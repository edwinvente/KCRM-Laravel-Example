<?php

namespace App\Http\Controllers;

use App\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('developers.index');
    }
    
    public function list()
    {
        //ORM eloquent
        $developers = Developer::orderBy('id', 'desc')->get();
        //query builder
        $developers = \DB::table('developers')->get();
        //return response()->json($developers, 200);
        return view('welcome', [
            'developers' => $developers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $skill = $request->input('skill');

        $newDeveloper = new Developer();
        $newDeveloper->developer = $name;
        $newDeveloper->age = $age;
        $newDeveloper->skill = $skill;
        
        if ($newDeveloper->save()) {
            return redirect('/');
        }
        return 'no guardo';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $developer = Developer::find($id);
        
        return view('developers.update', [
            'developer' => $developer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $age = $request->input('age');
        $skill = $request->input('skill');

        $newDeveloper = Developer::find($id);
        $newDeveloper->developer = $name;
        $newDeveloper->age = $age;
        $newDeveloper->skill = $skill;
        
        if ($newDeveloper->update()) {
            return redirect('/');
        }
        return 'no guardo';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        //
    }
}
