<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{

    public function index()
    {
        return view('admin.discount.discount');
    }

    public function create()
    {
        return view('admin.discount.adddiscount');
    }

    public function report()
    {
        return view('admin.discount.report');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
