<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.general');
    }

    public function domain()
    {
        return view('admin.setting.domain');
    }

    public function addDomain()
    {
        return view('admin.setting.adddomain');
    }

    public function payment()
    {
        return view('admin.setting.payment');
    }

    public function addPayment()
    {
        return view('admin.setting.addpayment');
    }

    public function shipping()
    {
        return view('admin.setting.pengiriman');
    }

    public function addShipping()
    {
        return view('admin.setting.addpengiriman');
    }

    public function billing()
    {
        return view('admin.setting.paketbilling');
    }

    public function addBilling()
    {
        return view('admin.setting.managepaket');
    }

    public function staff()
    {
        return view('admin.setting.staff');
    }

    public function blocklist()
    {
        return view('admin.setting.blocklist');
    }

    public function addBlocklist()
    {
        return view('admin.setting.addblocklist');
    }

    public function integration()
    {
        return view('admin.setting.integrasi');
    }

    public function security()
    {
        return view('admin.setting.keamanan');
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
