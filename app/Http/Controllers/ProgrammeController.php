<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programme;

class ProgrammeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = Programme::all();
        return view('programmes.index')->with('programmes', $programmes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programmes.create');
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
            'type' => 'required',
            'description' => 'required'
        ]);
        
        $post = new Programme;
        $post->programme_name = $request->input('name');
        $post->programme_type = $request->input('type');
        $post->programme_description = $request->input('description');
        $post->save();

        return redirect('/programmes')->with('success', 'Programme Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programme = Programme::find($id);
        return view('programmes.show')->with('programme', $programme);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programme = Programme::find($id);
        return view('programmes.edit')->with('programme', $programme);
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
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);
        
        $post = Programme::find($id);
        $post->programme_name = $request->input('name');
        $post->programme_type = $request->input('type');
        $post->programme_description = $request->input('description');
        $post->save();

        return redirect('/programmes')->with('success', 'Programme Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programme = Programme::find($id);
        $programme->delete();
        return redirect('/programmes')->with('success', 'Programme Deleted');
    }
}
