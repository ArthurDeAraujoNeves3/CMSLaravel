<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbouteMeRequest;
use App\Models\AboutMe;
use App\Models\General;
use App\Models\Sections;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutMeController extends Controller
{

    private array $data = array();

    public function __construct()
    {
        $General = General::all()->toArray();
        // dd($General);
        $this->data["name"] = $General[0]["name"];
        $this->data["bgColor"] = $General[0]["bgColor"];
        $this->data["colorTheme"] = $General[0]["colorTheme"];
    }

    public function index()
    {

        $AbouteMe = AboutMe::all()->toArray();

        // dd($AbouteMe);

        $this->data["Hero"] = $AbouteMe[0];
        $this->data["sections"] = Sections::all()->toArray();

        return view("dashBoardAbouteMe", $this->data);
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
    public function store(Request $r)
    {

        $url = $_SERVER["REQUEST_URI"];
        $url = explode("?", $url);
        $path = $url[1];
        return Storage::download("public/{$path}", 'Currículo - Arthur.pdf');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

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
    public function update(AbouteMeRequest $r, string $id)
    {

        $location = $r->post()["location"];
        $description = $r->post()["description"];

        if ($r->pdf) {

            $file = $r->pdf;
            $path = $file->store("pdf", "public");

            AboutMe::select()->where("id", "=", $id)->update([

                "pdf" => $path

            ]);
        };

        AboutMe::select()->where("id", "=", $id)->update([

            "location" => $location,
            "description" => $description,

        ]);

        return redirect("/aboutMe")->with("success", "Alterações salvas com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
