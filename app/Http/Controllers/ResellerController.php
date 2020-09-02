<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function index()
    {
        return view('admin.customer.reseller');
    }

    public function create()
    {
        return view('admin.customer.addreseller');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.customer.showreseller');   
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
