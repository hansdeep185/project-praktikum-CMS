<?php

namespace App\Http\Controllers;

//import model rahmanyanto
use App\Models\Rahmanyanto; 

//import return type View
use Illuminate\View\View;

class RahmanyantoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $rahmanyantos = Rahmanyanto::latest()->paginate(10);

        //render view with products
        return view('rahmanyanto.index', compact('rahmanyantos'));
    }
}