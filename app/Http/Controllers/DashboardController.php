<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function showMenu()
    {
        // return "TEST";
        // Query untuk mengambil data menu utama dan submenu
        $menus = DB::table('menuutama as m')
            ->leftJoin('submenu as s', 'm.menu_id', '=', 's.menu_id')
            ->where('m.status', 'aktif')
            ->select('m.menu_id', 'm.nama_menu', 's.submenu_id', 's.nama_submenu', 's.url','m.icon','m.menuUrl')
            ->orderBy('m.urutan')
            ->orderBy('s.urutan')
            ->get();


           
        // return  $menus;
        return view('welcome', compact('menus')); 
    }
}