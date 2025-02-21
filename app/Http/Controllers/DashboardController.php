<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function showMenu()
    {
        // Query untuk mengambil data menu utama dan submenu
        $menus = DB::table('MenuUtama as m')
            ->leftJoin('SubMenu as s', 'm.menu_id', '=', 's.menu_id')
            ->where('m.status', 'aktif')
            ->select('m.menu_id', 'm.nama_menu', 's.submenu_id', 's.nama_submenu', 's.url')
            ->orderBy('m.urutan')
            ->orderBy('s.urutan')
            ->get();


           
        // return  $menus;
        return view('welcome', compact('menus')); 
    }
}