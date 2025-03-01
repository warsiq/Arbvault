<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getRankProgress($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'rank' => $user->rank, 
            'total_rewards' => $user->total_rewards
        ]);
    }
}
