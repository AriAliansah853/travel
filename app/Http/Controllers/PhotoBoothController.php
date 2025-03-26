<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoBoothController extends Controller
{
    public function index()
    {
        return view('photobooth');
    }

    public function capture(Request $request)
    {
        $image = $request->image;
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = 'photo_' . time() . '.png';
        
        Storage::disk('public')->put($imageName, base64_decode($image));

        return response()->json(['image' => asset('storage/' . $imageName)]);
    }
}