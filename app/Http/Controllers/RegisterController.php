<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use DB;

class RegisterController extends Controller
{
    //
    function save(Request $request)
    {


        //user saving to the database
        $user = new User;
        $user->email = $request->email;
        $user->save();


        //getting user time stamp form database
        $data = DB::table('users')
            ->select('created_at')
            ->where('id', '=', $user->id)
            ->get();


        //Exam duration add 10 min after to time stamp of registration
        $date = $data[0]->created_at;
        $date = date('Y-m-d H:i:s', strtotime('+0 hour + 10 minutes +0 seconds', strtotime($date)));


        // Session sets here
        Session::put('time', $date);
        Session::put('user_id', $user->id);

        return redirect('/1/0');  //redirect to question page
    }
}
