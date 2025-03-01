<?php

namespace App\Services;

use Web3p\Web3\Web3;
use Web3p\Web3\Contract;

class BlockchainService
{
    protected $web3;
    protected $contract;
    protected $contractAddress = '0x0c1D7F8c03e6664a4a840311CD6198434ff7E27C'; // Replace with your contract address
    protected $abi = [
        // ABI array of your smart contract (can be obtained from the deployed contract)
    ];

    public function __construct()
    {
        // Get the Infura API URL from the .env file
        $infuraApiUrl = env('INFURA_URL'); // This loads the Infura URL from the .env file

        // Connect to Ethereum Mainnet via Infura HTTP endpoint
        $this->web3 = new Web3($infuraApiUrl);
        
        // Set up the contract instance (replace with your contract ABI)
        $this->contract = new Contract($this->web3->provider, $this->abi);
    }

    // Method to get the balance of an Ethereum address
    public function getBalance($address)
    {
        // Fetch balance from the Ethereum network
        $this->web3->eth->getBalance($address, function ($err, $balance) {
            if ($err) {
                // Handle error
                echo 'Error: ' . $err;
            } else {
                echo 'Balance: ' . $balance;
            }
        });
    }

    // Other methods to interact with your smart contract and blockchain events
}
