<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communities = Community::orderBy('created_at', 'desc')->paginate(10);
        return view("admin.community.index", compact('communities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.community.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:communities'],
            'imagei' => ['required', 'image', 'max:3500'],
            'description' => ['required', 'string'],
            'link' => ['nullable', 'string'],
            'category' => ['required'],
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

                $file_url = url('/storage/communities/'.$fileNameToStore);

                $request->file("imagei")->storeAs("public/communities", $fileNameToStore);

            }else{
                return back()->with('error', "File is not Image");
            }
        }else{
            $fileNameToStore = "";
            $file_url = "";
        }

        $request['image'] = $file_url;

        $community = Community::create($request->all());

        return redirect()->route('communities')->with('success', 'You have succesfuly created a community');
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
    public function edit(Community $community)
    {
        return view("admin.community.edit", compact('community'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Community $community)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'imagei' => ['nullable', 'image', 'max:3500'],
            'description' => ['required', 'string'],
            'link' => ['nullable', 'string'],
            'category' => ['required'],
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

                $file_url = url('/storage/communities/'.$fileNameToStore);

                $request->file("imagei")->storeAs("public/communities", $fileNameToStore);

            }else{
                return back()->with('error', "File is not Image");
            }
        }else{
            $fileNameToStore = "";
            $file_url = $community->image;
        }

        $request['image'] = $file_url;

        $community->update($request->all());
        return back()->with('success', "Update successful.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Community $community)
    {
        $community->delete();

        return redirect()->route('communities')->with('success', "Community has been Deleted");
    }
}
