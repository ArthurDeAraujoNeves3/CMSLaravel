<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experiences;
use App\Models\General;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExperiencesController extends Controller
{
    
    private array $data = array();

    public function __construct() {
        
        $General = General::all()->toArray();
        // dd($General);
        $this->data["name"] = $General[0]["name"];
        $this->data["bgColor"] = $General[0]["bgColor"];
        $this->data["colorTheme"] = $General[0]["colorTheme"];

    }

    public function index() {
        
        $Experiences = Experiences::all()->toArray();
        
        // dd($Experiences);

        $this->data["Experiences"] = $Experiences;
        // dd($Experiences[0]["title"]);
        $this->data["sections"] = Sections::all()->toArray();
        
        return view("dashboardExperiences", $this->data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $r)
    {
        //dd($r->all());
        $id = (string) Str::uuid();

        $sectionId = Sections::all()->toArray()[2]["id"]; // Experiências

        $obj = new Experiences();
        $obj->id = $id;
        $obj->title = $r->all()["title"];
        $obj->enterpriseName = $r->all()["interprise"];
        $obj->description = $r->all()["description"];
        $obj->date = $r->all()["date"];
        $obj->sectionId = $sectionId;
        $obj->save();

        return redirect("/experiences")->with("success", "Sucesso!");
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
    public function update(Request $r, string $id) {
        // dd($r->post());
        $welcomeMessage = $r->post()["welcomeMessage"];
        $expertise = $r->post()["expertise"];
        $imageUrl = "";
        
        Experiences::select()->where("id", "=", $id)->update([

            "welcomeMessage" => $welcomeMessage,
            "expertise" => $expertise,
            
        ]);

        return redirect("/dashboard")->with("success", "Alterações salvas com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
