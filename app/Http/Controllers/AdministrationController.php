<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administration;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administration = Administration::all();
        return view('administration.index')->with('administration', $administration);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'about' => 'required',
            'profile_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('profile_image')){
            //get file name
            $fileNameWithExt = $request->file('profile_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //file name to be stored
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('profile_image')->storeAs('/public/profile_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $administration = new Administration;
        $administration->name = $request->input('name');
        $administration->position = $request->input('position');
        $administration->about = $request->input('about');
        $administration->profile_image = $fileNameToStore;
        $administration->save();

        return redirect('/administration')->with('success', 'Profile Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
