<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    private array $data = array();

    public function index() {

        return view("login", $this->data);

    }
    public function verify(LoginRequest $r) {

        $inputs = $r->validated();

        $email = $inputs["email"];
        $password = $inputs["password"];

        // Realizando login
        if ( Auth::attempt(["email" => $email,"password" => $password]) ) {

            return redirect("/dashboard")->with("success", "Login realizado com sucesso!");

        } else {

            return redirect("/login")->with("error", "Conta não encontrada! Tenha certeza se os dados estão corretos.");

        };

    }

}
