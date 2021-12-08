<?php

namespace App\Http\Controllers;

use App\Models\projects;
use app\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ImagesController extends Controller

{


    public function Image($id)
    {
        // $image = images::where('id', $id)->first();
        $image = DB::table('images')
            ->join('projects', 'images.project_id', '=', 'projects.id' )
            ->where('images.project_id', $id)
            ->get();
        
        dd($image);
         //return view("Projects.project",  ['idUitDeController' => $id, 'imageuitdecontroller' => $image]);
         //return view('projects.project')->with('imageuitdecontroller', $image);

    }
} 