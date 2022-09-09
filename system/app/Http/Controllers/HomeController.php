<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller
{

    function showtemplate()
    {
        return view('template.base');
    }


    function showkategori()
    {
        return view('admin.kategori');
    }


    function showpelanggan()
    {
        return view('admin.pelanggan');
    }

    function showsuppliyer()
    {
        return view('admin.suppliyer');
    }

    function showproduk()
    {
        return view('admin.produk');
    }

    function showberanda()
    {
        return view('admin.beranda');
    }

    public function tetsCollection()
    {
        $list_mobil = ['Daihatsu ', 'Toyota', 'Bmw', 'Mercendes', 'Supra', 'Nissan', 'Mitsubisi'];
        $list_mobil = collect($list_mobil);
        $list_produk = Produk::all();

        //sortting
        //sorting nilai harg tertinggi
        //  dd($list_produk->sortBy('harga')[1]);

        //sorting nilai harga terendah
        // dd($list_produk->sortByDesc('harga'));
        // $data['list'] = $list_produk;
        //return view('tets-collection', $data);

        //take
        //skip
        // dd($list_mobil, $collection, $list_produk);

        //map
        //  $map = $list_produk->map(function ($item) {
        // $result['nama'] = $item->nama;
        // $result['harga'] = $item->harga;
        //     $result['stok'] = $item->stok;
        //     return $result;
        // });
        // dd($map);
        // dd($list_mobil, $collection, $list_produk);

        //filter

        //$filtered = $list_produk->filter(function ($item) {
        // return $item->harga < 20000;
        // });
        //dd($filtered);
        //dd($list_mobil, $collection, $list_produk);

        // $sum = $list_produk->sum('stok');
        // dd($sum);

        $data['list'] = produk::simplePaginate(15);
        return view('tets-collection', $data);
        dd($list_mobil,  $list_produk);
    }

    function tetsAjax()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('tets-ajax', $data);
    }
}
