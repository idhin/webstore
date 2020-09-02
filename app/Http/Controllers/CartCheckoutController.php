<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartCheckoutController extends Controller
{
    public function index()
    {
        return view('home.cart');
    }

    public function checkout(){
        return view('home.checkout');
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
