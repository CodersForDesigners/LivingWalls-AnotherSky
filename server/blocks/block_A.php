<?php

/*
 REFER
 	server/availability.php
 */

// require_once "../server/details_constants.php";
require_once __DIR__ . "/../details_constants.php";

// 4BHK section
$apartmentA041 = array(
					'apt_number' => 'A041',
					'apt_area' => '3178',
					'apt_floor' => '4',
					'apt_type' => '16',
					'apt_price' => calculate_total(4, 3178, 350000, -1),
					'apt_size'	=> '4BHK',
					'apt_blocking' => '1',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

// $apartmentA101 = array(
// 					'apt_number' => 'A101',
// 					'apt_area' => '3258',
// 					'apt_floor' => '10',
// 					'apt_type' => '16B',
// 					'apt_price' => calculate_total(10, 3258, 350000, -1),
// 					'apt_size'	=> '4BHK',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

$apartmentA111 = array(
					'apt_number' => 'A111',
					'apt_area' => '3258',
					'apt_floor' => '11',
					'apt_type' => '16B',
					'apt_price' => calculate_total(11, 3258, 350000, -1),
					'apt_size'	=> '4BHK',
					'apt_blocking' => '1',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

$apartmentA112 = array(
					'apt_number' => 'A112',
					'apt_area' => '2316',
					'apt_floor' => '11',
					'apt_type' => '15',
					'apt_price' => calculate_total(11, 2316, 350000, -1),
					'apt_size'	=> '3BHK',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

$apartmentA161 = array(
					'apt_number' => 'A161',
					'apt_area' => '3258',
					'apt_floor' => '16',
					'apt_type' => '16B',
					'apt_price' => calculate_total(16, 3258, 350000, -1),
					'apt_size'	=> '4BHK',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

$apartmentA061 = array(
					'apt_number' => 'A061',
					'apt_area' => '3354',
					'apt_floor' => '6',
					'apt_type' => '18',
					'apt_price' => calculate_total(6, 3354, 350000, -1),
					'apt_size'	=> '4BHK',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

// $apartmentA081 = array(
// 					'apt_number' => 'A081',
// 					'apt_area' => '3354',
// 					'apt_floor' => '8',
// 					'apt_type' => '18',
// 					'apt_price' => calculate_total(8, 3354, 350000, -1),
// 					'apt_size'	=> '4BHK',
//					'apt_pg_ho_ef' => '0-1-1',
// 					);

// $apartmentA121 = array(
// 					'apt_number' => 'A121',
// 					'apt_area' => '3354',
// 					'apt_floor' => '12',
// 					'apt_type' => '18',
// 					'apt_price' => calculate_total(12, 3354, 350000, -1),
// 					'apt_size'	=> '4BHK',
//					'apt_pg_ho_ef' => '0-1-1',
// 					);

// $apartmentA141 = array(
// 					'apt_number' => 'A141',
// 					'apt_area' => '3354',
// 					'apt_floor' => '14',
// 					'apt_type' => '18',
// 					'apt_price' => calculate_total(14, 3354, 350000, -1),
// 					'apt_size'	=> '4BHK',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

// $apartmentA181 = array(
// 					'apt_number' => 'A181',
// 					'apt_area' => '3354',
// 					'apt_floor' => '18',
// 					'apt_type' => '18',
// 					'apt_price' => calculate_total(18, 3354, 350000, -1),
// 					'apt_size'	=> '4BHK',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

$BHK4 = array(
				  $apartmentA041,
				  // $apartmentA101,
				  $apartmentA111,
				  $apartmentA161,
				  // $apartmentA061,
				  // $apartmentA081,
				  // $apartmentA121,
				  // $apartmentA141,
				  // $apartmentA181,
		  	);

$BHK4_pdf = array(
				  'A041' => $apartmentA041,
				  // 'A101' => $apartmentA101,
				  'A111' => $apartmentA111,
				  'A161' => $apartmentA161,
				  // 'A061' => $apartmentA061,
				 // 'A081' => $apartmentA081,
				 // 'A121' => $apartmentA121,
				  // 'A141' => $apartmentA141,
				  // 'A181' => $apartmentA181,
		  	);

// 3BHK section
// $apartmentA093 = array(
// 					'apt_number' => 'A093',
// 					'apt_area' => '2764',
// 					'apt_floor' => '9',
// 					'apt_type' => '4',
// 					'apt_price' => calculate_total(9, 2764, 350000, -1),
// 					'apt_size'	=> '3BHK+',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

$apartmentA003 = array(
					'apt_number' => 'A003',
					'apt_area' => '3008',
					'apt_floor' => '0',
					'apt_type' => '4A',
					'apt_price' => calculate_total(0, 3008, 350000, -1),
					'apt_size'	=> '3BHK+',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '1-1-1',
					);

$apartmentA013 = array(
					'apt_number' => 'A013',
					'apt_area' => '2588',
					'apt_floor' => '1',
					'apt_type' => '8',
					'apt_price' => calculate_total(1, 2588, 350000, -1),
					'apt_size'	=> '3BHK+',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

$apartmentA023 = array(
					'apt_number' => 'A023',
					'apt_area' => '2588',
					'apt_floor' => '2',
					'apt_type' => '8',
					'apt_price' => calculate_total(2, 2588, 350000, -1),
					'apt_size'	=> '3BHK+',
					'apt_blocking' => '1',
					// 'apt_pg_ho_ef' => '0-1-1',
					);

// $apartmentA043 = array(
// 					'apt_number' => 'A043',
// 					'apt_area' => '2588',
// 					'apt_floor' => '4',
// 					'apt_type' => '8',
// 					'apt_price' => calculate_total(4, 2588, 350000, -1),
// 					'apt_size'	=> '3BHK+',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

// $apartmentA103 = array(
// 					'apt_number' => 'A103',
// 					'apt_area' => '2588',
// 					'apt_floor' => '10',
// 					'apt_type' => '8',
// 					'apt_price' => calculate_total(10, 2588, 350000, -1),
// 					'apt_size'	=> '3BHK+',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

// $apartmentA133 = array(
// 					'apt_number' => 'A133',
// 					'apt_area' => '2588',
// 					'apt_floor' => '13',
// 					'apt_type' => '8',
// 					'apt_price' => calculate_total(13, 2588, 350000, -1),
// 					'apt_size'	=> '3BHK+',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

// $apartmentA163 = array(
// 					'apt_number' => 'A163',
// 					'apt_area' => '2588',
// 					'apt_floor' => '16',
// 					'apt_type' => '8',
// 					'apt_price' => calculate_total(16, 2588, 350000, -1),
// 					'apt_size'	=> '3BHK+',
// 					// 'apt_pg_ho_ef' => '0-1-1',
// 					);

$apartmentA132 = array(
					'apt_number' => 'A132',
					'apt_area' => '2335',
					'apt_floor' => '13',
					'apt_type' => '9',
					'apt_price' => calculate_total(13, 2335, 350000, -1),
					'apt_size'	=> '3BHK',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '0-0-0',
					);

// $apartmentA142 = array(
// 					'apt_number' => 'A142',
// 					'apt_area' => '2335',
// 					'apt_floor' => '14',
// 					'apt_type' => '9',
// 					'apt_price' => calculate_total(14, 2335, 350000, -1),
// 					'apt_size'	=> '3BHK',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-0-0',
// 					);

// initially,
// $apartmentA092 = array(
// 					'apt_number' => 'A092',
// 					'apt_area' => '2358',
// 					'apt_floor' => '9',
// 					'apt_type' => '12',
// 					'apt_price' => calculate_total(9, 2358, 350000, -1),
// 					'apt_size'	=> '3BHK',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-0-0',
// 					);

// $apartmentA092 = array(
// 					'apt_number' => 'A092',
// 					'apt_area' => '2532',
// 					'apt_floor' => '9',
// 					'apt_type' => '17',
// 					'apt_price' => calculate_total(9, 2532, 350000, -1),
// 					'apt_size'	=> '3BHK',
// 					'apt_blocking' => '1',
// 					// 'apt_pg_ho_ef' => '0-0-0',
// 					);

// $apartmentA152 = array(
// 					'apt_number' => 'A152',
// 					'apt_area' => '2358',
// 					'apt_floor' => '15',
// 					'apt_type' => '12',
// 					'apt_price' => calculate_total(15, 2358, 350000, -1),
// 					'apt_size'	=> '3BHK',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-0-0',
// 					);

// $apartmentA102 = array(
// 					'apt_number' => 'A102',
// 					'apt_area' => '2316',
// 					'apt_floor' => '10',
// 					'apt_type' => '15',
// 					'apt_price' => calculate_total(10, 2316, 350000, -1),
// 					'apt_size'	=> '3BHK',
// 					'apt_pg_ho_ef' => '0-0-0',
// 					);

// $apartmentA162 = array(
// 					'apt_number' => 'A162',
// 					'apt_area' => '2316',
// 					'apt_floor' => '16',
// 					'apt_type' => '15',
// 					'apt_price' => calculate_total(16, 2316, 350000, -1),
// 					'apt_size'	=> '3BHK',
// 					'apt_blocking' => '0',
// 					// 'apt_pg_ho_ef' => '0-0-0',
// 					);

$apartmentA122 = array(
					'apt_number' => 'A122',
					'apt_area' => '2532',
					'apt_floor' => '12',
					'apt_type' => '17',
					'apt_price' => calculate_total(12, 2532, 350000, -1),
					'apt_size'	=> '3BHK',
					'apt_blocking' => '0',
					// 'apt_pg_ho_ef' => '0-0-0',
					);

$BHK3_A = array (
						// $apartmentA112,
						$apartmentA132,
						// $apartmentA142,
						// $apartmentA092,
						// $apartmentA152,
						// $apartmentA102,
						// $apartmentA162,
						// $apartmentA122,
					);

$BHK3_A_pdf = array (
						// 'A112' => $apartmentA112,
						'A132' => $apartmentA132,
						// 'A142' => $apartmentA142,
						// 'A092' => $apartmentA092,
						// 'A152' => $apartmentA152,
						// 'A102' => $apartmentA102,
						// 'A162' => $apartmentA162,
						// 'A122' => $apartmentA122,
					);

$BHK3P_A = array (
						// $apartmentA093,
						$apartmentA003,
						$apartmentA013,
						// $apartmentA023,
						// $apartmentA043,
						// $apartmentA103,
						// $apartmentA133,
						// $apartmentA163,
					);

$BHK3P_A_pdf = array (
						// 'A093' => $apartmentA093,
						'A003' => $apartmentA003,
						'A013' => $apartmentA013,
						// 'A023' => $apartmentA023,
						// 'A043' => $apartmentA043,
						// 'A103' => $apartmentA103,
						// 'A133' => $apartmentA133,
						// 'A163' => $apartmentA163,
					);
