<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectCMSNotes extends Controller {

  public function cmsNotes () {
    return view('Pages.ProjProduceCMS1');
  }

  public function cmsNotesFull () {
    return view('ProjFullNotes');
  }

  public function staticHTML () {
    return view('Pages.documentation');
  }

  public function laravelGuide(){
    return view('En Routes.Laravel Guide');
  }

  public function webTemplates(){
    return view('En Routes.Testing Output Result');
  }

  public function VarietyDevsDo(){
    return view('En Routes.MiscDevJobs');
  }
  /*
  public function laravel_Guide(){
    return view('EnRoutes.Laravel_Guide');
  }*/

}
