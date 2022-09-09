<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\Pembeli;
use App\Models\Penjual;


use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function loginProcess()
    {
        // if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        //     $user = Auth::user();
        //     if ($user->level == 1) return redirect('beranda/admin')->with('success', 'Hack bro');
        //     if ($user->level == 0) return redirect('beranda/pengguna')->with('success',  'Hack bro');
        // } else {
        //     return back()->with('danger', 'Login Gagal, Silahkan Cek Username Dan Password Anda');
        // }

        $email = request('email');
        $user = Pembeli::where('email', $email)->first();
        if ($user) {
            $guard = 'pembeli';
        } else {
            $user = Penjual::where('email', $email)->first();
            if ($user) {
                $guard = 'penjual';
            } else {
                $guard = false;
            }
        }

        if (!$guard) {
            return back()->with('danger', 'Ngapain Lu TOD');
        } else {
            if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
                return redirect("beranda/$guard")->with('success', 'Login berhasil');
            } else {
                return back()->with('danger', 'Muke Kau Cem Tai');
            }
        }


        //if (request('login_as') == 1 {
        //    if (Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
        //        return redirect('beranda/pembeli')->with('success', 'Yah Ngehack Bro!!');
        //    } else {
        //        return back()->with('danger', 'Muke Kau Cem Tai');
        //   }
        //  } else {
        //     if (Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])) {
        //       return redirect('beranda/pembeli')->with('success', 'Yah Ngehack Bro!!');
        //       //} else {
        //       return back()->with('danger', 'Muke Kau Cem Dodol');
        //   }
        // }
        // }

        function logout()
        {
            Auth::logout();
            Auth::guard('pembeli')->logout();
            Auth::guard('penjual')->logout();
            return redirect('beranda');
        }

        function registration()
        {
        }

        function forgotPassword()
        {
        }
    }
}
