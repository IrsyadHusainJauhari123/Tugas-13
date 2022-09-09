<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;
use App\Http\Controllers\API\AlamatResource;
use Illuminate\Support\Facades\Route;

class ClientController extends Controller
{
    function showabout()
    {
        return view('fontend.about');
    }

    function showlogin()
    {
        return view('fontend.login');
    }


    function showcart()
    {
        return view('fontend.cart');
    }


    function showcheckout(Produk $produk)
    {
        $data['list_provinsi'] = Provinsi::all();
        $data['produk'] = $produk;
        return view('fontend.checkout', $data);
    }


    function showsingle()
    {
        return view('fontend.single');
    }

    function showcontact(Produk $produk)
    {
        $data['list_provinsi'] = Provinsi::all();
        $data['produk'] = $produk;
        return view('fontend.contact', $data);
    }


    function showhome()
    {
        return view('fontend.home');
    }

    function showshop()
    {
        $data['list_produk'] = Produk::all();

        $data['list_produk'] = Produk::paginate(8);

        return view('fontend.shop', $data);
    }

    function sortBy()
    {
        $list_produk = Produk::all();
        $list_produk = $list_produk->sortBy('harga');
        $data['list'] = $list_produk;

        return view('fontend.shop', $data);
    }
}
