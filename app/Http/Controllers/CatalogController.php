<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('admin.product.catalog');
    }

    public function create()
    {
        return view('admin.product.addcatalog');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.product.showcatalog');
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
