<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ManyToManyForms;
class ViewPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showFile = ManyToManyForms::all();
        return view('En Routes.ManyToManyPDFs', compact('showFile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ManyToManyForms::findOrFail($id);
        return view('En Routes.MtMFsShowMethod', compact('data'));
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

    //custom func
    public function download($file){
      return response()->download('storage/'.$file);
    }

    public function pdfjsindex(){
      $showFile = ManyToManyForms::all();
      return view('En Routes.pdf js index', compact('showFile'));
    }
    public function pdfjsformhtml(){
      $showFile = ManyToManyForms::all();
      return view('En Routes.pdf js formhtml', compact('showFile'));
    }
    public function pdfjstronhtml(){
      $showFile = ManyToManyForms::all();
      return view('En Routes.pdf js tron', compact('showFile'));
    }



}
