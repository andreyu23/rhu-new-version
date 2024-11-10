<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;


use App\Models\HealthOfficeModel;
use App\Models\InfoModel;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        $health = HealthOfficeModel::get();
        $info = InfoModel::get();
        return view('pages.dashboard.index')->with(['health' => $health, 'info' => $info]);
    });
    Route::get('/prenatal/other/{id}', function ($id) {
        return redirect('/prenatal/other/laboratory/' . $id);
    });

    Route::get('/development/{id}', function ($id) {
        return view('development');
    });

    Route::get('/prenatal/visit/{id}', [InfoController::class, 'prenatalindex']);
    Route::post('/prenatal/prenatalvisit/added', [InfoController::class, 'prenatalstore'])->name('prenatal.save');
    Route::post('/prenatal/prenatalvisit/update/{id}', [InfoController::class, 'prenatalupdate'])->name('prenatal.update');


    Route::get('/prenatal/other/laboratory/{id}', [InfoController::class, 'labindex']);
    Route::post('/prenatal/labresult/added', [InfoController::class, 'labstore'])->name('lab.save');
    Route::post('/prenatal/labresult/update/{id}', [InfoController::class, 'labupdate'])->name('lab.update'); // New

    Route::get('/prenatal/other/health/{id}',[InfoController::class, 'health']);
    Route::post('/prenatal/health/added',[InfoController::class, 'health_store'])->name('health.save');
    Route::post('/prenatal/health/update/{id}',[InfoController::class, 'health_update'])->name('health.update');


    Route::get('/prenatal/other/risk/{id}',[InfoController::class, 'risk']);
    Route::post('/prenatal/risk/added',[InfoController::class, 'risk_store'])->name('risk.save');
    Route::post('/prenatal/risk/update/{id}',[InfoController::class, 'risk_update'])->name('risk.update');


    Route::get('/prenatal/other/tetanus-toxoid/{id}',[InfoController::class, 'tetanus_toxoid']);
    Route::post('/prenatal/tetanus-toxoid/added',[InfoController::class, 'tetanus_toxoid_store'])->name('tetanus-toxoid.save');
    Route::post('/prenatal/tetanus-toxoid/update/{id}',[InfoController::class, 'tetanus_toxoid_update'])->name('tetanus-toxoid.update');


    Route::get('/prenatal/other/covid/{id}', [InfoController::class, 'covidindex']);
    Route::post('/prenatal/covid/added', [InfoController::class, 'covidstore'])->name('covid.save');
    Route::post('/prenatal/covid/update/{id}', [InfoController::class, 'covidupdate'])->name('covid.update');


    Route::get('/prenatal/other/obstet-history/{id}',[InfoController::class, 'history']);
    Route::post('/prenatal/history/added',[InfoController::class, 'history_store'])->name('history.save');
    Route::post('/prenatal/history/update/{id}',[InfoController::class, 'history_update'])->name('history.update');


    Route::get('/prenatal/other/dental-checkup/{id}', [InfoController::class, 'dentalindex']);
    Route::post('/prenatal/dental/added', [InfoController::class, 'dentalstore'])->name('dental.save');
    Route::post('/prenatal/dental/update/{id}', [InfoController::class, 'dentalupdate'])->name('dental.update');


    Route::get('/prenatal/other/family-planning/{id}', [InfoController::class, 'famindex']);
    Route::post('/prenatal/family/added', [InfoController::class, 'famstore'])->name('family.save');
    Route::post('/prenatal/family/update/{id}', [InfoController::class, 'famupdate'])->name('family.update');

    Route::get('/prenatal/other/labor-delivery/{id}', [InfoController::class, 'laborindex']);
    Route::post('/prenatal/labor/added', [InfoController::class, 'laborstore'])->name('labor.save');
    Route::post('/prenatal/labor/update/{id}', [InfoController::class, 'laborupdate'])->name('labor.update');


    Route::get('/brgy/health/center', [InfoController::class, 'healthoffice_index']);
    Route::post('/prenatal/healthoffice/added', [InfoController::class, 'healthoffice_store'])->name('healthoffice.save');
    Route::post('/prenatal/healthoffice/update/{id}', [InfoController::class, 'healthoffice_update'])->name('healthoffice.update');



    Route::get('/prenatal',[InfoController::class, 'index']);
    Route::get('/prenatal/registration',[InfoController::class, 'registration']);
    Route::get('/prenatal/details',[InfoController::class, 'details']);

    Route::post('/info/added',[InfoController::class, 'store'])->name('info.save');

    Route::get('/prenatal/other/vaccination/{id}',[InfoController::class, 'vaccination']);
    Route::post('/prenatal/vaccination/added',[InfoController::class, 'vaccination_store'])->name('vaccination.save');
    Route::post('/prenatal/vaccination/update/{id}',[InfoController::class, 'vaccination_update'])->name('vaccination.update');

});
