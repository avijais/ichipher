<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Homework;
use Illuminate\Support\Facades\Input;
use Mail;
use App\Models\User;

class HomeworkController extends Controller
{
    public function homeworks()
    {
    	$homeworks = Homework::with(['standard', 'section', 'subject', 'user'])->get()->toArray();
    	return view('homework.homeworks', ['homeworks' => $homeworks]);
    }

    public function addHomework(Request $request)
    {
        // $postData = Input::all();
        // print_r("this is post data");

        $postData = $request->input();
        // print_r($postData);
        $loggedinUserData = $request->session()->get('userData');

        $toBeAddHomework = [
            'standard_id' => $postData['standard_id'],
            'section_id' => $postData['section_id'],
            'subject_id' => $postData['subject_id'],
            'description' => $postData['description'],
            'created_by' => $loggedinUserData['id'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if (!empty($postData['title']))
            $toBeAddHomework['title'] = $postData['title'];

        if (!empty($postData['remarks']))
            $toBeAddHomework['remarks'] = $postData['remarks'];

        if (!empty($postData['reference']))
            $toBeAddHomework['reference'] = $postData['reference'];

        if (!empty($postData['submission_date']))
            $toBeAddHomework['submission_date'] = $postData['submission_date'];

        $insertReponse = 1;
        // Homework::insert($toBeAddHomework)->id;
        if ($insertReponse) {
            $clientId = $loggedinUserData['client_id'];
            $clientId = 2;
            $students = User::where(['role_id' => 5, 'client_id' => $clientId])->select('fname','lname','email')->get()->toArray();
            // print_r($students);
            $this->emailHomework($students);
            $response = ["status" => "success", "message" => "Homework added successfully."];
        } else {
            $response = ["status" => "error", "message" => "Homework not added successfully, Please try after sometime!!"];
        }

        return response($response);
    }

    public function emailHomework($students)
    {
        $student = [];
        Mail::send('emails.homework', ['student' => $student], function($m) use ($student) {
            $m->from('avinash152090@gmail.com', 'Your Application');
            $m->to('avinashjaiswal090@gmail.com', 'Avinash')->subject('This is homework');
        });
    }
}