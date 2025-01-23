<?php

use App\Http\Controllers\LocalizationController;
use App\Models\Language;
use Illuminate\Support\Facades\Route;


Route::prefix('{locale?}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('Setlocale')
    ->group(function () {
        Route::get('/', function () {
            return view('index');
        });
    });


// ADMIN
Route::prefix('{locale?}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware(['Setlocale','auth','admin'])
    ->group(function () {

        Route::controller(LocalizationController::Class)->group(function () {

            Route::get('/admin/main','adminMain')->name('admin.main');
            Route::get('/admin/languages', 'languages')->name('languages');
            Route::post('/admin/languages/position/change',  'changePosition')->name('changePosition');

//        Start JSON CRUD
            Route::get('/admin/static/translation/add',
                'addTranslation')->name('addStaticTranslation');
            Route::post('/admin/static/translation/store',
                'storeStaticTranslations')->name('storeStaticTranslations');
            Route::post('/admin/static/translation/update',
              'updateStaticTranslation')->name('updateStaticTranslation');

//        End JSON CRUD
            Route::get('/admin/testpage',  'testPage')->name('testPage');
            Route::post('/admin/language/store', 'createLanguage')->name('createLanguage');
            Route::post('/admin/language/status/update','updateLangStatus')->name('updateLangStatus');
            Route::post('/admin/language/delete',  'deleteLanguage')->name('deleteLanguage');
            Route::post('/admin/language/main/update',  'setMainLang')->name('setMainLang');
        });

    });



Route::get('/portfolio', function () {
    return view('site.pages.portfolio');
})->name('portfolio');
