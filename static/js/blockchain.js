function Coin(Contract) {
    this.web3 = null;
    this.instance = null;
    this.Contract = Contract;
};

Coin.prototype.init = function() {
    this.web3 = new Web3(
        (window.web3 && window.web3.currentProvider) ||
        new Web3.providers.HttpProvider(this.Contract.endpoint));

    ethereum.enable();

    var contract_interface = this.web3.eth.contract(this.Contract.abi);

    this.instance = contract_interface.at(this.Contract.address);
};

Coin.prototype.showAddressBalance = function(hash, cb) {
    var that = this;
    var address = $("#balance-address").val();

    if(!isValidAddress(address)) {
        console.log("Invalid address");
        return;
    }

    this.getBalance(address, function(error, balance) {
        if(error) {
            console.log(error)
        }
        else {
            console.log(balance.toNumber());
                $("#message").text(balance.toNumber());
		}
	})
};

Coin.prototype.getBalance = function(address, cb) {
    this.instance.showbalances(address, function(error, result) {
        cb(error, result);
    })
}

Coin.prototype.createTokens = function() {
    var that = this;
    
    var address = $("#create-address").val();
    var amount = $("#create-amount").val();
    console.log(amount);

    if(!isValidAddress(address)) {
        console.log("Invalid address");
        return;
    }

    if(!isValidAmount(amount)) {
        console.log("Invalid amount");
        return;
    }

    console.log(window.web3);

    this.instance.mint(address, amount, { from:
window.web3.eth.accounts[0], gas: 100000, gasPrice: 100000, gasLimit: 100000 }, 
                function(error, txHash) {
            if(error) {
                console.log(error);
            }
            else {
                that.waitForReceipt(txHash, function(receipt) {
                    if(receipt.status) {
                        $("#create-address").val("");
                        $("#create-amount").val("");
                    }
                    else {
                        console.log("error");
                    }
                });
            }
        }
    )
};

Coin.prototype.waitForReceipt = function(hash, cb) {
    var that = this;

    this.web3.eth.getTransactionReceipt(hash, function(err, receipt) {
        if (err) {
            error(err);
        }
        if (receipt !== null) {
            //Transaction went through
            if (cb) {
                cb(receipt);
            }
        } else {
            window.setTimeout(function() {
                that.waitForReceipt(hash, cb);
            }, 2000);
        }
    });
};

function isValidAddress(address) {
    return /^(0x)?[0-9a-f]{40}$/i.test(address);
};

function isValidAmount(amount) {
    return amount > 0 && typeof Number(amount) == 'number';    
};

Coin.prototype.bindButtons = function() {
    var that = this;

    $(document).on("click", "#button-create", function() {
        that.createTokens();
    });

    $(document).on("click", "#button-check", function() {
        that.showAddressBalance();
    }); 
};

Coin.prototype.onReady = function() {
    this.bindButtons();
    this.init();
};

var coin = new Coin({
				abi: [
				{
					"inputs": [],
					"stateMutability": "nonpayable",
					"type": "constructor"
				},
				{
					"anonymous": false,
					"inputs": [
						{
							"indexed": false,
							"internalType": "address",
							"name": "from",
							"type": "address"
						},
						{
							"indexed": false,
							"internalType": "address",
							"name": "to",
							"type": "address"
						},
						{
							"indexed": false,
							"internalType": "uint256",
							"name": "amount",
							"type": "uint256"
						}
					],
					"name": "Sent",
					"type": "event"
				},
				{
					"inputs": [
						{
							"internalType": "address",
							"name": "",
							"type": "address"
						}
					],
					"name": "balances",
					"outputs": [
						{
							"internalType": "uint256",
							"name": "",
							"type": "uint256"
						}
					],
					"stateMutability": "view",
					"type": "function"
				},
				{
					"inputs": [
						{
							"internalType": "address",
							"name": "receiver",
							"type": "address"
						},
						{
							"internalType": "uint256",
							"name": "amount",
							"type": "uint256"
						}
					],
					"name": "mint",
					"outputs": [],
					"stateMutability": "nonpayable",
					"type": "function"
				},
				{
					"inputs": [],
					"name": "minter",
					"outputs": [
						{
							"internalType": "address",
							"name": "",
							"type": "address"
						}
					],
					"stateMutability": "view",
					"type": "function"
				},
				{
					"inputs": [
						{
							"internalType": "address",
							"name": "receiver",
							"type": "address"
						},
						{
							"internalType": "uint256",
							"name": "amount",
							"type": "uint256"
						}
					],
					"name": "send",
					"outputs": [],
					"stateMutability": "nonpayable",
					"type": "function"
				},
				{
					"inputs": [
						{
							"internalType": "address",
							"name": "_account",
							"type": "address"
						}
					],
					"name": "showbalances",
					"outputs": [
						{
							"internalType": "uint256",
							"name": "",
							"type": "uint256"
						}
					],
					"stateMutability": "view",
					"type": "function"
				}
			],
				address: "0xeF3ced5fccCFd8E5a32cAE58f68892CA56d68934",
				endpoint: "https://rinkeby.infura.io/v3/4e927f8390b043e6bc52c6c30e9c3d01"
				});

$(document).ready(function() {
    coin.onReady();
});