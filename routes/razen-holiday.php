<?php
Route::prefix('razen-holiday')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', 'RazenHoliday\Admin\DashboardController@index')->name('razen-holiday.admin.dashboard.index');
            Route::post('/change', 'RazenHoliday\Admin\DashboardController@change')->name('razen-holiday.admin.dashboard.change');
        });

        Route::prefix('profil')->group(function(){
            Route::get('/', 'RazenHoliday\Admin\ProfilController@index')->name('razen-holiday.admin.profil.index');
            Route::get('/detail/{id}', 'RazenHoliday\Admin\ProfilController@show');
            Route::post('/','RazenHoliday\Admin\ProfilController@store')->name('razen-holiday.admin.profil.store');
            Route::get('/edit/{id}','RazenHoliday\Admin\ProfilController@edit');
            Route::post('/update','RazenHoliday\Admin\ProfilController@update')->name('razen-holiday.admin.profil.update');
            Route::get('/destroy/{id}','RazenHoliday\Admin\ProfilController@destroy');
            Route::post('/edit-media-sosial-profil', 'RazenHoliday\Admin\ProfilController@edit_media_sosial_profil')->name('razen-holiday.admin.profil.edit-media-sosial-profil');
            Route::post('/tambah-media-sosial-profil', 'RazenHoliday\Admin\ProfilController@tambah_media_sosial_profil')->name('razen-holiday.admin.profil.tambah-media-sosial-profil');
        });
    });

    Route::prefix('landing-page')->group(function(){
        Route::prefix('beranda')->group(function(){
            Route::get('/', 'RazenHoliday\LandingPage\BerandaController@index')->name('razen-holiday.landing-page.beranda.index');
        });
    });

    Route::prefix('master-data')->group(function(){
        Route::prefix('media-sosial')->group(function(){
            Route::get('/', 'RazenHoliday\MasterData\MediaSosialController@index')->name('razen-holiday.master-data.media-sosial.index');
            Route::get('/detail/{id}', 'RazenHoliday\MasterData\MediaSosialController@show')->name('razen-holiday.master-data.media-sosial.show');
            Route::post('/','RazenHoliday\MasterData\MediaSosialController@store')->name('razen-holiday.master-data.media-sosial.store');
            Route::get('/edit/{id}','RazenHoliday\MasterData\MediaSosialController@edit')->name('razen-holiday.master-data.media-sosial.edit');
            Route::post('/update','RazenHoliday\MasterData\MediaSosialController@update')->name('razen-holiday.master-data.media-sosial.update');
            Route::get('/destroy/{id}','RazenHoliday\MasterData\MediaSosialController@destroy')->name('razen-holiday.master-data.media-sosial.destroy');
        });
    });
});
