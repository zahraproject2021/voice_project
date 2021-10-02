<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class MentorController extends Controller
{

    public function show()
    {

        $user_id = Auth::user()->id;
        $user = User::find($user_id)->load('teams.candidates');

        return view('dashboard',compact('user'));
    }

    public function candidateDetails($candidateId)
    {

        $candidate = Candidate::find($candidateId)->load('activities.scores.mentor');
        return view('candidate/details',compact('candidate'));
    }
}
