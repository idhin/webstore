<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {   $barangs =  DB::table('barangs')
                    ->join('kategoris','kategoris.id','=','barangs.idKategori')
                    ->select('barangs.*','kategoris.namaKategori as namaKategori')
                    ->get();

        // dd($barangs);
        $data = array(
                        'barangs' => $barangs
        );


        return view('admin.product.product',$data);
    }

    public function create()
    {
        $data = array(
            'kategoris' => Kategori::all(),
        );

        // dd($data);
        return view('admin.product.addproduct',$data);
    }

    public function tambahBarang(Request $request)
    {
        $kategori = $request->kategori;
        $namaBarang = $request->namaBarang;
        $harga = $request->harga;
        $hargaCoret = $request->hargaCoret;
        $hargaModal = $request->hargaModal;
        $stok = $request->stok;
        $berat = $request->berat;

        $data = array (
            'kategori'  => $kategori,
            'namaBarang' => $namaBarang,
            'harga' => $harga,
            'hargaCoret' => $hargaCoret,
            'hargaModal' => $hargaModal,
            'stok' => $stok,
            'berat' => $berat

        );

        // dd($data);
        
        if($request->file('image')){
            // echo "as"; die;
            //simpan foto produk yang di upload ke direkteri public/storage/imageproduct
            $file = $request->file('image')->store('imageproduct','public');
            
            // dd($file);
            Barang::create([
                'idKategori'  => $kategori,
                'namaBarang' => $namaBarang,
                // 'harga' => $harga,
                'hargaCoret' => $hargaCoret,
                'hargaModal' => $hargaModal,
                'stok' => $stok,
                'berat' => $berat,
                'image' => $file

            ]);

            return redirect()->route('listProduct')->with('status','Berhasil Menambah Produk Baru');
        }else{
            echo "gagal";
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.product.showproduct');
    }

    public function stock(){
        return view('admin.product.managestock');
    }

    public function import(){
        return view('admin.product.import');
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
