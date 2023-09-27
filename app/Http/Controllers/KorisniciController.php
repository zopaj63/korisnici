<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KorisniciController extends Controller
{
    
    public function index()
    {
        $korisnici=[
            ["id"=>1, "ime"=>"Prvi korisnik"],
            ["id"=>2, "ime"=>"Drugi korisnik"] // kako nemamo bazu ubacujemo polje niz ovako!
        ];
        return view("korisnici.index", compact("korisnici")); //compact pretvara u niz (ovdje suvišno)
    }

    public function create()
    {
        return view("korisnici.create"); //prikaz forme za unos
    }

    public function store(Request $request)
    {
        return view("korisnici.create"); //spremanje u bazu?
    }

    public function edit($id) //forma za upis promjene podataka
    {
        $korisnik=["id"=>$id, "ime"=>"Prvi korisnik"]; // isto samo simulacija, inače pretražujemo iz baze
        return view("korisnici.edit", compact("korisnik"));
    }

    public function update(Request $request, $id)
    {
        return redirect("/"); // nakon update podatka redirektamo na početnu stranicu
    }

    public function destroy($id)
    {
        return redirect("/");
    }

}
