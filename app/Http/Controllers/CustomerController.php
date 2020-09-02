<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return view('admin.customer.customer');
    }

    public function create()
    {
        return view('admin.customer.addcustomer');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.customer.customerprofile');
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
