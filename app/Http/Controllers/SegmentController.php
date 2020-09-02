<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegmentController extends Controller
{

    public function index()
    {
        return view('admin.customer.segment');
    }

    public function create()
    {
        return view('admin.customer.addsegment');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.customer.showsegment');
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
