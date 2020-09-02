<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report.penjualan');
    }

    public function pageView()
    {
        return view('admin.report.pageview');
    }

    public function formData()
    {
        return view('admin.report.formulirdata');
    }

    public function formDataManage()
    {
        return view('admin.report.addformulirdata');
    }

    public function stock()
    {
        return view('admin.report.riwayatstok');
    }

    public function email()
    {
        return view('admin.report.riwayatemail');
    }

    public function staff()
    {
        return view('admin.report.staff');
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
