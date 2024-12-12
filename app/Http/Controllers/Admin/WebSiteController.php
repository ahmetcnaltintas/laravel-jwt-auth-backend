<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebSite\MenuAddItemRequest;
use App\Http\Requests\WebSite\MenuAddSelectItemRequest;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    /* WEB SİTE AYARLARI SAYFASI */
    public function index()
    {
        $menus = Menu::orderBy('order')->get();
        $pages = Page::where('status', 1)->get();

        return view('admin.website.index', compact('menus','pages'));
    }



    /* ---------------------------- FONKSİYONLAR ---------------------------- */




    /* ---------------- MENÜ AYARLARI ---------------- */

    /* MENÜ SIRALAMA */
    public function menuReorder(Request $request)
    {
        $menus = $request->all();

        foreach ($menus as $menu) {
            Menu::where('id', $menu['id'])->update(['order' => $menu['position']]);
        }

        return response()->json(['message' => 'Menü sıralaması başarıyla güncellendi!']);
    }
    /* MENÜ İTEM EKLEME */
    public function menuAddItem(MenuAddItemRequest $request)
    {
        try {
            $menu = new Menu();
            $menu->name = $request->name;
            $menu->slug = $request->slug;
            $menu->order = $request->order ?? (Menu::max('order') + 1);
            $menu->save();

            session()->flash('success', 'Menü öğesi başarıyla eklendi!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Menü ekleme sırasında bir hata oluştu.');
            return redirect()->back();
        }
    }
    /* SEÇİLEN SAYFAYI MENÜYE EKLEME */
    public function menuSelectAddItem(MenuAddSelectItemRequest $request)
    {
        try {
            $page = Page::findOrFail($request->page_id);

            $menu = new Menu();
            $menu->name = $page->title;
            $menu->slug = $page->slug;
            $menu->order = Menu::max('order') + 1;
            $menu->save();

            session()->flash('success', 'Seçilen sayfa başarıyla menüye eklendi!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Seçilen sayfa menüye eklenirken bir hata oluştu.');
            return redirect()->back();
        }
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
