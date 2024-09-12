<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    private array $data = array();

    public function index() {

        return view("login", $this->data);

    }
    public function login() {

        // return view("");

    }

}
