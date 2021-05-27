<?php

namespace App\Http\Controllers;

use App\Models\Schedule;

class ScheduleController extends Controller
{
    function getAll(){
        $data = Schedule::all();
        return view('toefl-registration-form', ['Schedule'=>$data]);
    }
}
