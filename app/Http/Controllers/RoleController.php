<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function __invoke()
    {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard');

        } elseif (Auth::user()->role == 'guru') {
            return redirect()->route('guru.dashboard');

        } elseif (Auth::user()->role == 'murid') {
            return redirect()->route('murid.dashboard');

        }

        return redirect()->route('login')->with('pesan', 'Belum Login');
    }
}
