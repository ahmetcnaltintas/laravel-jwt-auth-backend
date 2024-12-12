<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementsController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\WebSiteController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function () {

    /* GİRİŞ SAYFASI */
    Route::get('/', 'index')->name('index');

    /* ADMİN PANEL */
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    /* WEB SİTE AYARLARI */
    Route::controller(WebSiteController::class)->group(function () {
        Route::get('/website-setting', 'index')->name('website.index');

        /* MENÜ AYAR ROTALARI */
        Route::post('/menus/reorder', 'menuReorder')->name('menus.reorder');
        Route::post('/menus/add/item', 'menuAddItem')->name('menu.add.item');
        Route::post('/menus/add/select/item', 'menuSelectAddItem')->name('menu.add.select.item');
        Route::put('/menus/edit/item/{id}', 'menuEditItem')->name('menu.edit.item');


    });

    /* DUYURULAR */
    Route::controller(AnnouncementsController::class)->group(function () {
        Route::get('/announcements', 'index')->name('announcements.index');
    });

    /* SLİDERLAR */
    Route::controller(SlidersController::class)->group(function () {
        Route::get('/sliders', 'index')->name('slider.index');
        Route::get('/sliders/create', 'create')->name('slider.create');
        Route::get('/sliders/edit/{id}', 'edit')->name('slider.edit');

        Route::post('/sliders/store', 'store')->name('slider.store');
        Route::put('/sliders/update/{id}', 'update')->name('slider.update');
        Route::delete('/sliders/destroy/{id}', 'destroy')->name('slider.destroy');
    });

    /* SAYFALAR */
    Route::controller(PagesController::class)->group(function () {
        Route::get('/pages', 'index')->name('pages.index');
    });

    /* GENEL AYARLAR */
    Route::controller(GeneralSettingController::class)->group(function () {
        Route::get('/general-setting', 'index')->name('general.index');
    });

    /* ÖDEME ENTEGRASYONU */
    Route::controller(PaymentController::class)->group(function () {
        Route::get('/payment-integration', 'index')->name('payment.index');
    });
});


