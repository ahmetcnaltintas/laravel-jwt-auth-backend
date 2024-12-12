<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /* AYARLAR SAYFASI */
    public function index()
    {
        return view('admin.general.index');
    }


    /* --------------------- FONKSİYONLAR --------------------- */


    /* GÜNCELLEME FONKSİYONU */
    public function update(Request $request, string $id)
    {
        //
    }

}
