<?php

namespace App\Http\Controllers;
use App\Services\BlockchainService;
use Illuminate\Http\Request;

class BlockchainController extends Controller
{
    protected $blockchainService;

    public function __construct(BlockchainService $blockchainService)
    {
        $this->blockchainService = $blockchainService;
    }

    // Get balance of a user
    public function getBalance($address)
    {
        return response()->json($this->blockchainService->getBalance($address));
    }

    // Transfer tokens
    public function transferTokens(Request $request)
    {
        $validated = $request->validate([
            'from' => 'required|string',
            'to' => 'required|string',
            'amount' => 'required|numeric|min:0.01',
        ]);

        // Use the BlockchainService to perform the transfer
        $txHash = $this->blockchainService->transferTokens(
            $validated['from'],
            $validated['to'],
            $validated['amount']
        );

        return response()->json([
            'transactionHash' => $txHash
        ]);
    }
}
