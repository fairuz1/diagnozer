<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

// default route
Route::get('/', function () { return view('welcome'); });

// patient route
Route::prefix('patient')->group(function () {
    Route::get('/auth', [PatientController::class, 'authenticatePatient'])->name('authenticatePatient');
    Route::delete('/destroy-session', [PatientController::class, 'destroySession'])->name('destgroySession');
    Route::get('/get-diagnosis', [PatientController::class, 'getPatientDiagnosis'])->name('getPatientDiagnosis');
    Route::get('/get-patient-data', [PatientController::class, 'getPatientData'])->name('getPatientData');
    Route::post('/post-patient-survey', [PatientController::class, 'storePatientSurvey'])->name('storePatientSurvey');
    Route::get('/get-patient-survey', [PatientController::class, 'getPatientSurvey'])->name('getPatientSurvey');
    Route::get('/log-patient', [PatientController::class, 'storePatientSurvey'])->name('storePatientSurvey');
});
