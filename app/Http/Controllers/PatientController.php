<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use JWTAuth;

class PatientController extends Controller
{
    function authenticatePatient(Request $request) {
        // check if user data exsist in FHIR server
        $patientId = $request->patient_id;
        $authStatus = $this->databaseQuery('select patient_id from patient_session where patient_id = {$patientId}');
        if (empty($authStatus)) {

        } else {
            $userData = [
                
            ];
        }

        return view('patientData');
    }

    function checkPatientSession() {
        // check if user already authenticated
        if (!empty($request->session_jwt) && !empty($request->patient_id))
            $authStatus = $this->databaseQuery('select patient_id from patient_session where patient_id =');
        else {
            // authenticate if it not

        }
    }

    function getPatientDiagnosis() {
        return view('patientData');
    }

    function getPatientData() {
        return view('patientData');
    }

    function storePatientSurvey() {
        return view('patientData');
    }

    function getPatientSurvey() {
        return view('patientData');
    }

    function destgroySession() {
        return view('patientData');
    }

    function databaseQuery($queryParam) {
        $query = DB::connection('supabase')->select($queryParam);
        return $query;
    }
}
