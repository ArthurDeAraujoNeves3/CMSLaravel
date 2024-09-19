<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequest;
use App\Models\General;
use App\Models\Hero;
use App\Models\Sections;
use Illuminate\Http\Request;

class HeroController extends Controller {

    private array $data = array();
    
    public function __construct() {

        $General = General::all()->toArray();
        // dd($General);
        $this->data["name"] = $General[0]["name"];
        $this->data["bgColor"] = $General[0]["bgColor"];
        $this->data["colorTheme"] = $General[0]["colorTheme"];
        
    }

    public function index() {

        $Hero = Hero::all()->toArray();
        
        // dd($Hero);

        $this->data["Hero"] = $Hero[0];
        $this->data["sections"] = Sections::all()->toArray();
        
        return view("dashBoard", $this->data);

    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(string $id) {
        //
    }

    public function edit(string $id) {
        //
    }

    public function update(HeroRequest $r, string $id) {
        
        // dd($r->post());
        $welcomeMessage = $r->post()["welcomeMessage"];
        $expertise = $r->post()["expertise"];
        
        if ( $r->image ) {

            $file = $r->image;
            $path = $file->store("hero", "public");

            Hero::select()->where("id", "=", $id)->update([

                "imageUrl" => $path

            ]);

        };
        
        Hero::select()->where("id", "=", $id)->update([

            "welcomeMessage" => $welcomeMessage,
            "expertise" => $expertise,
            
        ]);

        return redirect("/dashboard")->with("success", "Alterações salvas com sucesso!");

    }

    public function destroy(string $id) {
        //
    }
}
