<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExpertiseEditController extends Controller {

    private array $data = array();
    
    public function index(Request $r) {

        $id = $r->id;

        $experience = Experiences::find($id)->toArray();

        // dd($experience);

        $this->data["experience"] = $experience;
        return view("ExperienceEdit", $this->data);

    }

}
