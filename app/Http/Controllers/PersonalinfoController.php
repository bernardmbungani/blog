<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personalinfo;
class PersonalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalinfo = Personalinfo::all();
        return view('personalinfo.index',['personalinfos' => $personalinfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Personalinfo::create([
            'user_id' => auth()->id(),
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'sname'=>$request->sname,
            'age'=>$request->age,
        ]);
        return redirect()->route('personalinfo.index');
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
    public function edit(Personalinfo $personalinfo)
    {
        return view('personalinfo.edit', ['personalinfo' => $personalinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personalinfo $personalinfo)
    {
        $personalinfo->fname = $request->fname;        
        $personalinfo->mname = $request->mname;        
        $personalinfo->sname = $request->sname;        
        $personalinfo->age = $request->age;  
        $personalinfo->save();      
        return redirect()->route('personalinfo.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personalinfo $personalinfo)
    {
        $personalinfo->delete();  
        return back();
    }
}
