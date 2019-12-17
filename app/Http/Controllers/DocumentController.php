<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
use App\Project;
use App\Typedocument;
use App\Document;


class DocumentController extends Controller
{

    public function showYears(){

      $years = Year::all();
      return view('intranet')->with('years',$years);

    }

    public function showProjects($name){

      $year_id = Year::where('name',$name)->select("idYear")->first();
      //dd($year_id);
      $projects = Project::where('year_id',$year_id->idYear)->get();
      //dd($projects);
      return view('proyectos')->with('projects',$projects);

    }

    public function showTypeDocuments( $name,$abb_project){

      $project_id = Project::where('abbreviation', $abb_project)->select("idProject")->first();
      $typedocuments = Typedocument::where('project_id',$project_id->idProject)->get();
      //dd($typedocuments);
      return view('tipodocumento')->with('typedocuments',$typedocuments);

    }

    public function showDocuments($name, $abb_project, $nametype){

      $typedocument_id = Typedocument::where('idTypedocument',$nametype)->select("idTypedocument")->first();
      $documents = Document::where('typedocument_id', $typedocument_id->idTypedocument)->get();
      //dd($documents);

      

      return view('documents')->with('documents',$documents);

    }
}