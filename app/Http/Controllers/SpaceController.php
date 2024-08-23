<?php

namespace App\Http\Controllers;

use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spaces = Space::orderBy('created_at', 'desc')->paginate(10);
        return view("admin.spaces.index", compact('spaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.spaces.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:spaces'],
            'imagei' => ['required', 'image', 'max:3500'],
            'description' => ['required', 'string'],
            'benefit' => ['nullable', 'string'],
            'price_daily' => ['required'],
            'price_half_day' => ['required'],
            'price_weekly' => ['required'],
            'price_annually' => ['required'],
            'price_monthly' => ['required'],
            'min_no_of_days' => ['nullable'],
            'max_no_of_days' => ['nullable'],
            'no_of_persons' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        if ($request->hasFile("imagei")) {
            $fileNameWExt = $request->file("imagei")->getClientOriginalName();
            $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
            $fileExt = $request->file("imagei")->getClientOriginalExtension();
            if ($fileExt=="png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                $file_url = url('/storage/spaces/'.$fileNameToStore);

                $request->file("imagei")->storeAs("public/spaces", $fileNameToStore);

            }else{
                return back()->with('error', "File is not Image");
            }
        }else{
            $fileNameToStore = "";
            $file_url = "";
        }

        $request['image'] = $file_url;
        $request['isAvailable'] = true;
        $request['isActive'] = false;

        $space = Space::create($request->all());

        return redirect()->route('spaces')->with('success', 'You have succesfuly created a new space, but the status is not active for booking. Please activate it, to allow customers book for the space. Thank you!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Space $space)
    {
        return view("admin.spaces.edit", compact('space'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Space $space)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'imagei' => ['nullable', 'image', 'max:3500'],
            'description' => ['required', 'string'],
            'benefit' => ['nullable', 'string'],
            'price_daily' => ['required'],
            'price_half_day' => ['required'],
            'price_weekly' => ['required'],
            'price_annually' => ['required'],
            'price_monthly' => ['required'],
            'min_no_of_days' => ['nullable'],
            'max_no_of_days' => ['nullable'],
            'no_of_persons' => ['required'],
            'isActive' => ['nullable']
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // return $request->all();

        if ($request->hasFile("imagei")) {
            $fileNameWExt = $request->file("imagei")->getClientOriginalName();
            $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
            $fileExt = $request->file("imagei")->getClientOriginalExtension();
            if ($fileExt=="png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                $file_url = url('/storage/spaces/'.$fileNameToStore);

                $request->file("imagei")->storeAs("public/spaces", $fileNameToStore);

            }else{
                return back()->with('error', "File is not Image");
            }
        }else{
            $fileNameToStore = "";
            $file_url = $space->image;
        }

        $request['image'] = $file_url;
        $request['isActive'] = $request['isActive']=='on' ? true:false;
        // $request['isAvailable'] = true;
        // $request['isActive'] = false;

        $space->update($request->all());
        return back()->with('success', "Update successful.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Space $space)
    {
        // $cont = $space->bookings;

        // foreach ($cont as $key => $con) {
        //     $con->delete();
        // }

        $space->delete();

        return redirect()->route('spaces')->with('success', "Space has been Deleted");
    }
}
