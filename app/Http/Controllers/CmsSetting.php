<?php

namespace App\Http\Controllers;

use App\Models\BannerPromosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CmsSetting extends Controller
{
    public function SettingCms()
    {
         // Query untuk mengambil data menu utama dan submenu
         $menus = DB::table('menuutama as m')
         ->leftJoin('submenu as s', 'm.menu_id', '=', 's.menu_id')
         ->where('m.status', 'aktif')
         ->select('m.menu_id', 'm.nama_menu', 's.submenu_id', 's.nama_submenu', 's.url','m.icon','m.menuUrl')
         ->orderBy('m.urutan')
         ->orderBy('s.urutan')
         ->get();


        
     // return  $menus;
     return view('settingCms', compact('menus')); 
    }

  
    public function getData(Request $request)
    {
        $search = $request->input('search');  // Menangkap input pencarian
        $data = BannerPromosi::query();

        if ($search) {
            // Menambahkan pencarian berdasarkan judul dan deskripsi
            $data->where('judul', 'like', "%$search%")
                 ->orWhere('deskripsi', 'like', "%$search%");
        }

        // Mengambil hasil pencarian
        $data = $data->get();

        return response()->json($data);
    }

    // Menyimpan data banner_promosi baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image',
            'status' => 'required|in:active,inactive',
        ]);

        $imagePath = $request->file('gambar')->store('images', 'public');

        BannerPromosi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
            'status' => $request->status,
        ]);

        return response()->json(['message' => 'Data berhasil disimpan!'], 200);
    }

    // Menghapus banner_promosi
    public function destroy($id)
    {
        $banner = BannerPromosi::find($id);
        if ($banner) {
            $banner->delete();
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        }
        return response()->json(['message' => 'Data tidak ditemukan!'], 404);
    }
}