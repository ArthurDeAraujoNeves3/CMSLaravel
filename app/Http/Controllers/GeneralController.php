<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralRequest;
use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
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
        
        $this->data["General"] = General::all()->toArray();
        // dd($this->data["General"]);
        
        return view("dashboardGeneral", $this->data);

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
    public function store(Request $request)
    {
        //
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
    public function update(GeneralRequest $r, string $id)
    {
        
        $name = $r->post()["name"];
        
        General::select()->where("id", "=", $id)->update([

            "name" => $name,
            
        ]);

        return redirect("/general")->with("success", "Alterações salvas com sucesso!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
