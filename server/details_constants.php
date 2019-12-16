<?php

/*
 * returns either,
 * 	or just the total apartment cost
 * 	an array containing information regarding an apartment
 *
 * used in multiple places,
 *	like the apartment modals on the apartment pricing page
 */

// If 'amoeba' is -1 it came from block_*.php else it came from details.php
function calculate_total($selected_apt_floor, $area_sq_ft, $car_parking, $amoeba) {
	if ( is_array($amoeba) ) {
		// this condition is only used when this function call comes in from the sales end discounter
		$cost_per_sqft = $amoeba['rate_sqft'];
		if ($cost_per_sqft == 'false') {
			$cost_per_sqft = 8300;
		}

		$floor_rise_cost = $amoeba['floor_rise'];
		if ($floor_rise_cost == 'false') {
			$floor_rise_cost = 25;
		}

		$clubhouse = $amoeba['club_house'];
		if ($clubhouse == 'false') {
			$clubhouse = 100000;
		} else {
			$clubhouse = 0;
		}
	} else {
		$cost_per_sqft = 8300;
		$floor_rise_cost = 25;
		$clubhouse = 100000;
	}
	$legal = 25000;
	// global $cost_per_sqft, $clubhouse, $legal;

	$floor_rise = $area_sq_ft * $selected_apt_floor * $floor_rise_cost;

	$basic_cost = $area_sq_ft * $cost_per_sqft;
	$base_cost = $basic_cost + $car_parking + $clubhouse + $floor_rise;
	$registration = round($base_cost * 0.066);

	// $vat = round($base_cost * 0.05);
	// $service_tax = round($base_cost * 0.045);
	// $gst = round( $base_cost * 0.12 );
	/*
	 * We are setting GST to zero and hiding it from the calculations,
	 * although we're still retaining it in the calculations pipeline
	 * in the scenario that we may have to revert back
	 */
	$gst = 0;

	$infrastructure = $area_sq_ft * 150;
	$maintenance = $area_sq_ft * 42;
	$corpus_deposit = $area_sq_ft * 42;

	// $total = $base_cost + $vat + $service_tax + $infrastructure + $corpus_deposit + $maintenance + $legal;
	$total = $base_cost + $gst + $infrastructure + $corpus_deposit + $maintenance + $legal;

	if ( (! is_array($amoeba) ) && $amoeba == -1) {
		return $total;
	} else {
		// $temp_sit_out = $type_details[$amoeba];
		$for_json_array = array (
													'#rate_per_sqft' => commafy($cost_per_sqft),
													'#basic_cost' => commafy($basic_cost),
													'#car_parking' => commafy($car_parking),
													'#floor_rise_cost' => $floor_rise_cost,
													'#floor_rise' => commafy($floor_rise),
													'#clubhouse' => commafy($clubhouse),
													// '#vat' => commafy($vat),
													// '#service_tax' => commafy($service_tax),
													// '#gst' => commafy( $gst ),
													'#infrastructure' => commafy($infrastructure),
													'#corpus_deposit' => commafy($corpus_deposit),
													'#maintenance' => commafy($maintenance),
													'#legal' => commafy($legal),
													'#your_price' => commafy($total),
													'#registration' => commafy($registration),
													// '#your_price_int' => $total,
													// '#sit_out' => $temp_sit_out['sit_out'],
													// '#home_office' => $temp_sit_out['home_office'],
													// '#entrance_foyer' => $temp_sit_out['entrance_foyer'],
											);
		return $for_json_array;
	}
}

// This function converts an int to Indian Currency system string with commas and shizz
function commafy($total_loop) {
	if ($total_loop == 0) return "0";

	$x = (string)($total_loop % 1000);
	$total_loop = (int)($total_loop / 1000);

	$calc = 3 - strlen($x);
	while ($calc) {
		$x = '0'.$x;
		$calc -= 1;
	}
	$amount = $x;

	while ($total_loop) {
		$x = (string)($total_loop % 100);
		$total_loop = (int)($total_loop / 100);

		if ($total_loop) {
			$calc = 2 - strlen($x);
			while ($calc) {
				$x = '0'.$x;
				$calc -= 1;
			}
		}
		$amount = $x.','.$amount;
	}

	return '₹ '.$amount;
}

// $type_details = array (
// 										'16' => array (
// 															'num_sit_out' => 4,
// 															'sit_out' => 274,
// 															'home_office' => 61,
// 															'entrance_foyer' => 54,
// 														),
// 										'16B' => array (
// 															'num_sit_out' => 4,
// 															'sit_out' => 209,
// 															'home_office' => 61,
// 															'entrance_foyer' => 54,
// 														),
// 										'18' => array (
// 															'num_sit_out' => 4,
// 															'sit_out' => 280,
// 															'home_office' => 61,
// 															'entrance_foyer' => 54,
// 														),
// 										'4' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 403,
// 															'home_office' => 64,
// 															'entrance_foyer' => 53,
// 														),
// 										'4A' => array (
// 															'private_garden' => 488,
// 															'num_sit_out' => 3,
// 															'sit_out' => 403,
// 															'home_office' => 64,
// 															'entrance_foyer' => 53,
// 														),
// 										'8' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 272,
// 															'home_office' => 64,
// 															'entrance_foyer' => 53,
// 														),
// 										'9' => array (
// 															'num_sit_out' => 2,
// 															'sit_out' => 205,
// 														),
// 										'12' => array (
// 															'num_sit_out' => 2,
// 															'sit_out' => 238,
// 														),
// 										'15' => array (
// 															'num_sit_out' => 2,
// 															'sit_out' => 193,
// 														),
// 										'17' => array (
// 															'num_sit_out' => 2,
// 															'sit_out' => 347,
// 														),
// 										'3A' => array (
// 															'private_garden' => 531,
// 															'num_sit_out' => 3,
// 															'sit_out' => 241,
// 															'home_office' => 65,
// 															'entrance_foyer' => 52,
// 														),
// 										'3' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 241,
// 															'home_office' => 65,
// 															'entrance_foyer' => 52,
// 														),
// 										'7' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 200,
// 														),
// 										'1A' => array (
// 															'private_garden' => 230,
// 															'num_sit_out' => 3,
// 															'sit_out' => 423,
// 															'home_office' => 65,
// 															'entrance_foyer' => 52,
// 														),
// 										'5' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 274,
// 															'home_office' => 65,
// 															'entrance_foyer' => 52,
// 														),
// 										'10' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 402,
// 															'home_office' => 65,
// 															'entrance_foyer' => 52,
// 														),
// 										'14' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 264,
// 															'home_office' => 65,
// 															'entrance_foyer' => 52,
// 														),
// 										'6' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 239,
// 														),
// 										'11' => array (
// 															'num_sit_out' => 3,
// 															'sit_out' => 375,
// 														),
// 								);
