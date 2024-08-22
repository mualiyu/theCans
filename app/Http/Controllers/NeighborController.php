<?php

namespace App\Http\Controllers;

use App\Models\Neighbor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NeighborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $neighbors = Neighbor::orderBy('created_at', 'desc')->paginate(10);
        return view("admin.neighbors.index", compact('neighbors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.neighbors.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:neighbors'],
            'imagei' => ['required', 'image', 'max:3500'],
            'description' => ['required', 'string'],
            'link' => ['nullable', 'string'],
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

                $file_url = url('/storage/neighbors/'.$fileNameToStore);

                $request->file("imagei")->storeAs("public/neighbors", $fileNameToStore);

            }else{
                return back()->with('error', "File is not Image");
            }
        }else{
            $fileNameToStore = "";
            $file_url = "";
        }

        $request['image'] = $file_url;

        $neighbor = Neighbor::create($request->all());

        return redirect()->route('neighbors')->with('success', 'You have succesfuly added a new neighbor');
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
    public function edit(Neighbor $neighbor)
    {
        return view("admin.neighbors.edit", compact('neighbor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Neighbor $neighbor)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'imagei' => ['nullable', 'image', 'max:3500'],
            'description' => ['required', 'string'],
            'link' => ['nullable', 'string'],
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

                $file_url = url('/storage/neighbors/'.$fileNameToStore);

                $request->file("imagei")->storeAs("public/neighbors", $fileNameToStore);

            }else{
                return back()->with('error', "File is not Image");
            }
        }else{
            $fileNameToStore = "";
            $file_url = $neighbor->image;
        }

        $request['image'] = $file_url;
        // $request['isAvailable'] = true;
        // $request['isActive'] = false;

        $neighbor->update($request->all());
        return back()->with('success', "Update successful.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Neighbor $neighbor)
    {
        $neighbor->delete();

        return redirect()->route('neighbors')->with('success', "Neighbor has been Deleted");
    }
}
