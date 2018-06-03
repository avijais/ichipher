<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserInterface as UserInterface;

class UserController extends Controller
{
    public function __construct(UserInterface $user){
    	$this->user = $user;
    }

    public function usersList(){
    	$pageTitle = "User List";
    	// echo "<pre>";print_r($usersData->toarray());die();
    	return view('admin.user.user-list');
    	// ->with('data', json_encode($usersData));
    }

    public function fetchUsers(){
    	// $usersData = $this->user->getAll();
    	$pageTitle = "User List";
    	$usersData = '{
					  "draw": 1,
					  "recordsTotal": 10,
					  "recordsFiltered": 10,
					  "data": [
						    [
						      "Airi",
						      "Satou",
						      "Accountant",
						      "Tokyo",
						      "28th Nov 08",
						      "$162,700"
						    ],
						    [
						      "Angelica",
						      "Ramos",
						      "Chief Executive Officer (CEO)",
						      "London",
						      "9th Oct 09",
						      "$1,200,000"
						    ],
						    [
						      "Ashton",
						      "Cox",
						      "Junior Technical Author",
						      "San Francisco",
						      "12th Jan 09",
						      "$86,000"
						    ],
						    [
						      "Bradley",
						      "Greer",
						      "Software Engineer",
						      "London",
						      "13th Oct 12",
						      "$132,000"
						    ],
						    [
						      "Brenden",
						      "Wagner",
						      "Software Engineer",
						      "San Francisco",
						      "7th Jun 11",
						      "$206,850"
						    ],
						    [
						      "Brielle",
						      "Williamson",
						      "Integration Specialist",
						      "New York",
						      "2nd Dec 12",
						      "$372,000"
						    ],
						    [
						      "Bruno",
						      "Nash",
						      "Software Engineer",
						      "London",
						      "3rd May 11",
						      "$163,500"
						    ],
						    [
						      "Caesar",
						      "Vance",
						      "Pre-Sales Support",
						      "New York",
						      "12th Dec 11",
						      "$106,450"
						    ],
						    [
						      "Cara",
						      "Stevens",
						      "Sales Assistant",
						      "New York",
						      "6th Dec 11",
						      "$145,600"
						    ],
						    [
						      "Cedric",
						      "Kelly",
						      "Senior Javascript Developer",
						      "Edinburgh",
						      "29th Mar 12",
						      "$433,060"
						    ]
						  ]
						}';
    	// return json_encode($usersData);
    	return $usersData;
    }
}
