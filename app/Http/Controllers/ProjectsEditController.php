<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsEditController extends Controller
{
    private array $data = array();
    
    public function index(Request $r) {

        $id = $r->id;

        $projects = Projects::find($id)->toArray();

        // dd($projects);

        $this->data["Projects"] = $projects;
        return view("ProjectsEdit", $this->data);

    }
}
