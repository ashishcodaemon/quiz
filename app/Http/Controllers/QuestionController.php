<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Support\Facades\DB;
use Session;

class QuestionController extends Controller
{
    //function to get Question from database
    public function getQuestion($id, $opt)
    {
        $question = DB::table('questions')
            ->select()
            ->where('id', $id)
            ->get();
        $options = DB::table('choises')
            ->select()
            ->where('question_id', $id)
            ->get();
        return (['question' => $question, 'options' => $options, 'opt' => $opt]);
    }

    //function to fetch answer to reattempt by user
    public function getAnswer($userid, $questionid)
    {
        return  $opt = DB::select("SELECT submitted_id FROM `responses` WHERE user_id= $userid and question_id= $questionid;");
    }


    //display function to show question to candidate
    public function show($id, $opt = 0)
    {
        return view('question', $this->getQuestion($id, $opt));
    }

    function next(Request $req, $id)
    {
        if ($req->submit == 'next') {

            if ($id < 10) {

                //validation to select option
                $req->validate(['option'  => 'required'], ['option:required' => "Select Option"]);

                //flaf to check question is reattemp or fresh attempt
                $flag = DB::select("SELECT COUNT(*) AS count FROM `responses` WHERE user_id= $req->user_id AND question_id=$req->question_id;");
                if ($flag[0]->count == 1) {
                    $i = DB::select("SELECT id  FROM `responses` WHERE user_id= $req->user_id AND question_id=$req->question_id;");
                    $i = $i[0]->id;
                    //update the old ans
                    DB::update("UPDATE responses SET submitted_id='$req->option' WHERE id='$i';");
                } else {
                    //submit new ans
                    $response = new Response;
                    $response->user_id = $req->user_id;
                    $response->question_id = $req->question_id;
                    $response->submitted_id = $req->option;
                    $response->save();
                }

                //display next question
                $questionid = $req->question_id + 1;
                $opt = $this->getAnswer($req->user_id, $questionid);

                if ($opt) {
                    return redirect('/' . $id + 1 . '/' . $opt[0]->submitted_id);
                } else {
                    //display next quetion if option is null
                    return redirect('/' . $id + 1 . '/' . $opt = 0);
                }
            } else {

                return redirect('/' . $id . '/' . $opt = 0);
            }
        } elseif ($req->submit == 'back') {
            if ($id > 1) {

                $questionid = $req->question_id - 1;
                $opt = $this->getAnswer($req->user_id, $questionid);

                return redirect('/' . $id - 1 . '/' . $opt[0]->submitted_id);
            } else {
                return redirect()->back();
            }
        } elseif ($req->submit == 'save') {
            //save the quiz
            //check for last ans is existing or not
            $flag = DB::select("SELECT COUNT(*) AS count FROM `responses` WHERE user_id= $req->user_id AND question_id=$req->question_id;");
            if ($flag[0]->count == 1) {
                $i = DB::select("SELECT id  FROM `responses` WHERE user_id= $req->user_id AND question_id=$req->question_id;");
                $i = $i[0]->id;
                DB::update("UPDATE responses SET submitted_id='$req->option' WHERE id='$i';");
            } else {
                //save last question
                $response = new Response;
                $response->user_id = $req->user_id;
                $response->question_id = $req->question_id;
                $response->submitted_id = $req->option;
                $response->save();
            }


            $i = DB::select("SELECT COUNT(*) as total FROM `responses` INNER JOIN choises ON responses.submitted_id = choises.id WHERE choises.is_correct=1 AND responses.user_id='$req->user_id';");
            $i = $i[0]->total;
            Session::forget('time');
            return view('result', ['result' => $i]);
        }
    }
//display result
    function result()
    {
        $userid = Session::get('user_id');
        $i = DB::select("SELECT COUNT(*) as total FROM `responses` INNER JOIN choises ON responses.submitted_id = choises.id WHERE choises.is_correct=1 AND responses.user_id= $userid;");
        $i = $i[0]->total;
        Session::put('time', "");
        return view('result', ['result' => $i]);
    }
}
