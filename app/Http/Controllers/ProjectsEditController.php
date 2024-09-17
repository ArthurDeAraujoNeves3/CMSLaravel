<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectsEditController extends Controller
{
    private array $data = array();
    
    public function index(Request $r) {

        $id = $r->id;

        
        $projects = Projects::find($id)->toArray();
        // dd($projects["imageUrl"]);
        $image = asset("storage/". $projects["imageUrl"]);
        
        // dd($projects);

        $this->data["Projects"] = $projects;
        return view("ProjectsEdit", $this->data);

    }
}
