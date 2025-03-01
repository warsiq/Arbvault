<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{

public function getLeaderboard()
{
    $leaderboard = Referral::with('user')->orderBy('performance_score', 'desc')->get();
    return ReferralLeaderboardResource::collection($leaderboard);
}

}
