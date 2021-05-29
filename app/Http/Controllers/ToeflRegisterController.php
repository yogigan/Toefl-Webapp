<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;
use App\Models\Exam;
use App\Models\Schedule;

class ToeflRegisterController extends Controller
{

    function registerPage(){
        $data = Schedule::all();
        return view('toefl-registration-form', ['Schedule'=>$data]);
    }

    function registerToefl(Request $request){

        $user = new User();
        $getUserByEmail = User::where('email', $request->email)->get();
        if(count($getUserByEmail) < 1){
            $isUnique = true;
            do{
                $generateId = rand(100000000, 999999999);
                $user->id = "U$generateId";
            }while($isUnique);
        }else{
            foreach($getUserByEmail as $u){
                $user = User::find($u->id);
            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        $code = new Code();
        $getScheduleById = Schedule::where('id', $request->schedule)->get();
        if (count($getScheduleById) > 0){
            foreach($getScheduleById as $s){
                $randomString = self::generateCode(strlen($s->package));
                $code->id = "$s->package-$randomString";
                echo "$s->package-$randomString";
            }
            $code->sent_date = null;
            $code->is_used = false;
            $code->user = $user->id;
            $code->save();

            $exam = new Exam();
            $exam->id = $code->id;
            $exam->score = null;
            $exam->schedule = $request->schedule;
            $exam->save();
        }

        return redirect("/thank-you")->with(['email' =>  $request->email]);

    }

    static function generateCode($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 19-$length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
