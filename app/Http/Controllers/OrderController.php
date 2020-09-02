<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.order');
    }

    public function create()
    {
        return view('admin.order.addorder');
    }

    public function draft()
    {
        return view('admin.order.draft');
    }

    public function abandoned()
    {
        return view('admin.order.tertinggal');
    }

    public function setting()
    {
        return view('admin.order.setting');
    }

    public function return()
    {
        return view('admin.order.returnorder');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.order.showorder');
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
