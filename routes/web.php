<?php

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/servizi', [PageController::class, 'services'])->name('services');
Route::get('/contatti', [PageController::class, 'contact'])->name('contact');


Route::get('/sitemap.xml', function () {
    return Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/chi-siamo'))
        ->add(Url::create('/servizi'))
        ->add(Url::create('/contatti'));
});