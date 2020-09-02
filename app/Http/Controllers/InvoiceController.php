<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function printInvoice()
    {
        return view('admin.invoice.invoice');
    }

    public function packingSlip()
    {
        return view('admin.invoice.packingslip');
    }

    public function thermalInvoice()
    {
        return view('admin.invoice.thermalinvoice');
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
