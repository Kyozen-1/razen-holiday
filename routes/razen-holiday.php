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

            Route::post('/store/section-1', 'RazenHoliday\LandingPage\BerandaController@store_section_1')->name('razen-holiday.landing-page.beranda.store.section-1');

            Route::post('/store/section-2', 'RazenHoliday\LandingPage\BerandaController@store_section_2')->name('razen-holiday.landing-page.beranda.store.section-2');
            Route::post('/store/section-2/konten', 'RazenHoliday\LandingPage\BerandaController@store_section_2_konten')->name('razen-holiday.landing-page.beranda.store.section-2.konten');
            Route::post('/hapus/section-2/konten', 'RazenHoliday\LandingPage\BerandaController@hapus_section_2_konten')->name('razen-holiday.landing-page.beranda.hapus.section-2.konten');

            Route::post('/store/section-3', 'RazenHoliday\LandingPage\BerandaController@store_section_3')->name('razen-holiday.landing-page.beranda.store.section-3');

            Route::post('/store/section-4', 'RazenHoliday\LandingPage\BerandaController@store_section_4')->name('razen-holiday.landing-page.beranda.store.section-4');
            Route::post('/store/section-4/konten', 'RazenHoliday\LandingPage\BerandaController@store_section_4_konten')->name('razen-holiday.landing-page.beranda.store.section-4.konten');
            Route::post('/hapus/section-4/konten', 'RazenHoliday\LandingPage\BerandaController@hapus_section_4_konten')->name('razen-holiday.landing-page.beranda.hapus.section-4.konten');

            Route::post('/store/section-5', 'RazenHoliday\LandingPage\BerandaController@store_section_5')->name('razen-holiday.landing-page.beranda.store.section-5');

            Route::post('/store/section-6', 'RazenHoliday\LandingPage\BerandaController@store_section_6')->name('razen-holiday.landing-page.beranda.store.section-6');

            Route::post('/store/section-7', 'RazenHoliday\LandingPage\BerandaController@store_section_7')->name('razen-teknologi.landing-page.beranda.store.section-7');

            Route::post('/store/section-8', 'RazenHoliday\LandingPage\BerandaController@store_section_8')->name('razen-holiday.landing-page.beranda.store.section-8');

            Route::post('/store/section-9', 'RazenHoliday\LandingPage\BerandaController@store_section_9')->name('razen-holiday.landing-page.beranda.store.section-9');

            Route::post('/store/section-10', 'RazenHoliday\LandingPage\BerandaController@store_section_10')->name('razen-holiday.landing-page.beranda.store.section-10');
        });

        Route::prefix('perusahaan')->group(function(){
            Route::get('/', 'RazenHoliday\LandingPage\PerusahaanController@index')->name('razen-holiday.landing-page.perusahaan.index');

            Route::post('/store/section-1', 'RazenHoliday\LandingPage\PerusahaanController@store_section_1')->name('razen-holiday.landing-page.perusahaan.store.section-1');

            Route::post('/store/section-4', 'RazenHoliday\LandingPage\PerusahaanController@store_section_4')->name('razen-holiday.landing-page.perusahaan.store.section-4');
        });

        Route::prefix('layanan')->group(function(){
            Route::get('/', 'RazenHoliday\LandingPage\LayananController@index')->name('razen-holiday.landing-page.layanan.index');

            Route::post('/store/section-1', 'RazenHoliday\LandingPage\LayananController@store_section_1')->name('razen-holiday.landing-page.layanan.store.section-1');
        });

        Route::prefix('proyek')->group(function(){
            Route::get('/', 'RazenHoliday\LandingPage\ProyekController@index')->name('razen-holiday.landing-page.proyek.index');

            Route::post('/store/section-1', 'RazenHoliday\LandingPage\ProyekController@store_section_1')->name('razen-holiday.landing-page.proyek.store.section-1');

            Route::post('/store/section-2', 'RazenHoliday\LandingPage\ProyekController@store_section_2')->name('razen-holiday.landing-page.proyek.store.section-2');
        });

        Route::prefix('kontak')->group(function(){
            Route::get('/', 'RazenHoliday\LandingPage\KontakController@index')->name('razen-holiday.landing-page.kontak.index');

            Route::post('/store/section-1', 'RazenHoliday\LandingPage\KontakController@store_section_1')->name('razen-holiday.landing-page.kontak.store.section-1');

            Route::post('/store/section-2', 'RazenHoliday\LandingPage\KontakController@store_section_2')->name('razen-holiday.landing-page.kontak.store.section-2');
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
