<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandController extends Controller
{
    public function index() {  //ci lista tutti gli elementi della tabella coi dettagli principali
        $brands = Brand::all();
        // dd($brands);
        return view('pages.home', compact('brands'));
    }

    public function show($id) {
        $brand = Brand::findOrFail($id);  //non ho capito il findOrFail
        return view('pages.brand', compact('brand'));
    }
}
