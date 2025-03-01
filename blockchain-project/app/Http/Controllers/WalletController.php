<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'wallet_address' => 'required|string|unique:users,wallet_address',
        ]);

        // Store the wallet address in the database
        $user = User::create([
            'wallet_address' => $request->wallet_address,
        ]);

        Log::info('Wallet address stored:', ['wallet_address' => $request->wallet_address]);

        return response()->json(['message' => 'Wallet address stored successfully'], 200);
    }
}
