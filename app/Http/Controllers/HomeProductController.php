<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeProductController extends Controller
{

    public function index()
    {
        return view('home.product');
    }

    public function collection()
    {
        return view('home.collection');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('home.single');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
