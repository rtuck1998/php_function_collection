<?php
function getCountry($code) {
	
		$population = '';
		if (($data = @file_get_contents('https://restcountries.com/v2/alpha/'.$code)) === false) { 
		}
		else {
		$content = file_get_contents('https://restcountries.com/v2/alpha/'.$code);
		
		
		$info = json_encode(utf8ize($content));
		$info2 = json_decode(json_decode($info, true),true);
		if (!isset($info2['status'])) {
		$nation_name = $info2['name'];
		$flag = $info2['flags']['png']; 
		$capital = ''; $currency = '';
		if (isset($info2['capital'])) { $capital = $info2['capital']; }
		$languages = ''; 
		if (isset($info2['currencies'])) { $currency = ''.$info2['currencies'][0]['name'].' ('.$info2['currencies'][0]['symbol'].')'; }
		if (count($info2['languages']) < 2) {
			$languages = $info2['languages'][0]['name'];
		}
		else {
			for ($i = 0; $i < count($info2['languages']); $i++) {
				$languages .= $info2['languages'][$i]['name'];
				if ($i < count($info2['languages']) - 1) {
					$languages .= ', ';
				}
			}
		}
		
		}
		
		
		
	}
	if (isset($nation_name)) {
		return array($nation_name, $flag, $capital, $languages, $currency);
	}
	else {
		return null;
	}
}
