<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class CategoryController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Kategori::orderBy('namaKategori', 'ASC')->paginate(10); 
        return view('admin.product.categori', $this->data);
    }

    public function create()
    {
        $sasas = "asas";
        ddd($sasas);
        $categories = Kategori::orderBy('namaKategori','ASC')->get();

        $this->data['categories'] = $categories->toArray();
        return view('admin.product.managecategori');
    }

    public function tambah(Request $request){
        $kategori = $request->kategori;
        // dd($kategori);
        Kategori::create([
            'namaKategori' => $request->kategori,
        ]);
        return redirect()->route('listKategori')->with('status','Berhasil Menambah Kategori');
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
