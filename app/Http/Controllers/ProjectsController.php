<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectsRequest;
use App\Http\Requests\ProjectsUpdate;
use App\Models\General;
use App\Models\Projects;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    private array $data = array();

    public function __construct() {
        
        $General = General::all()->toArray();
        // dd($General);
        $this->data["name"] = $General[0]["name"];
        $this->data["bgColor"] = $General[0]["bgColor"];
        $this->data["colorTheme"] = $General[0]["colorTheme"];

    }
    
    public function index()
    {

        $Projects = Projects::all()->toArray();
        
        // dd($Projects);

        $this->data["Projects"] = $Projects;
        // dd($Experiences[0]);
        
        return view("dashboardProjects", $this->data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectsRequest $r) {
        
        $r->all();
        
        $file = $r->image;
        $path = $file->store("capas", "public");
        
        $id = (string) Str::uuid();

        $sectionId = Sections::all()->toArray()[3]["id"]; // Projetos

        $obj = new Projects();
        $obj->id = $id;
        $obj->name = $r->all()["name"];
        $obj->description = $r->all()["description"];
        $obj->github = $r->all()["github"] ?? "";
        $obj->website = $r->all()["website"] ?? "";
        $obj->imageUrl = $path;
        $obj->sectionId = $sectionId;
        $obj->save();

        return redirect("/projects")->with("success", "Sucesso!");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectsUpdate $r, string $id)
    {

        $name = $r->post()["name"];
        $description = $r->post()["description"];
        $github = $r->post()["github"] ?? "";
        $website = $r->post()["website"] ?? "";
        
        if ( $r->image ) {

            $file = $r->image;
            $path = $file->store("capas", "public");

            Projects::select()->where("id", "=", $id)->update([

                "imageUrl" => $path
                
            ]);

        };
        
        Projects::select()->where("id", "=", $id)->update([

            "name" => $name,
            "description" => $description,
            "github" => $github,
            "webSite" => $website,
            
        ]);

        return redirect("/projects")->with("success", "Alterações salvas com sucesso!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Projects::select()->where("id", "=", $id)->delete();

        return redirect("/projects")->with("success", "Excluído com sucesso");
    }
}
