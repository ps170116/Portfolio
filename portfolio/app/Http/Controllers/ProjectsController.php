<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller

{

    public function index() {
        $projects = projects::all();
        return view('Projects.index', ['ProjectsUitController'=>$projects]); 
    }

    public function project($id, )
    {
        $project = projects::where('id', $id)->first();

        $image = DB::table('images')
            ->join('projects', 'images.project_id', '=', 'projects.id' )
            ->where('images.project_id', $id)
            ->get();

        $link = DB::table('links')
            ->join('projects', 'links.project_id', '=', 'projects.id' )
            ->where('links.project_id', $id)
            ->get();

        return view("Projects.project",  ['idUitDeController2' => $id,  'project' => $project, 'Image' => $image, 'linkController' => $link]);
            }

/*     public function Image($id)
    {
        $image = images::where('id', $id)->first();


        ($image);
    } */
    
/*    public function Image($id)
   {
        $image = images::where('id', $id)->first();
        `$Image = DB::table('images')
           ->join('projects', 'images.project_id', '=', 'projects.id' )
           ->where('images.project_id', $id)
           ->get();
        
        return view("Projects.project",  ['idUitDeController' => $id, 'image' => $Image]);
    } */
} 