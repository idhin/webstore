<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{

    public function index()
    {
        //
    }

    public function newsletter(){
        return view('admin.marketing.email');
    }

    public function manageNews(){
        return view('admin.marketing.addemail');
    }

    public function message(){
        return view('admin.marketing.message');
    }

    public function messageManage(){
        return view('admin.marketing.addmessage');
    }

    public function create()
    {
        //
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
