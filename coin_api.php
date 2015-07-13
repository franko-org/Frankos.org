<?php
# declaring functions
function getBtcValue($c){
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
	curl_setopt($c, CURLOPT_URL, 'https://coinbase.com/api/v1/currencies/exchange_rates');

	//execute curl
	$data = curl_exec($c);

	//create object from response
	$obj = json_decode($data);

	//create
	$BaseValue = $obj->{'btc_to_usd'};
	$BaseValue = str_replace('$','',$BaseValue);
	$BaseValue = str_replace(',','',$BaseValue);
	return $BaseValue;	
}
# declaring varialbes
static $c = null;
        if (is_null($c)) {
                $c = curl_init();
                curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; Cryptsy API PHP client; '.php_uname('s').'; PHP/'.phpversion().')');
        }
		


$btcValue = getBtcValue($c);

//echo $btcValue;

## starting	
if($_GET['coin_id'] == 1){
				$NewOutput['coin_name'] = 'Bitcoin';
				$NewOutput['coin_symbol'] = 'BTC';
				$NewOutput['btc_value'] = '1';
				$NewOutput['usd_value'] = $btcValue;
				echo json_encode($NewOutput);
}else{
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
			curl_setopt($c, CURLOPT_URL, 'http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid='.$_GET['coin_id']);

			//execute curl
			$data = curl_exec($c);

			//create object from response
			$arr = json_decode($data, true);
			

			$NewOutput = array();
			
			foreach($arr['return']['markets'] as $Markets){
				//calculate usd value
				$exRate = $btcValue * $Markets['lasttradeprice'];
				//add USD PRICE to array
				$NewOutput['coin_name'] = $Markets['primaryname'];
				$NewOutput['coin_symbol'] = $Markets['primarycode'];
				$NewOutput['btc_value'] = $Markets['lasttradeprice'];
				$NewOutput['usd_value'] = $exRate;
				
				echo json_encode($NewOutput);
			}
}
?>