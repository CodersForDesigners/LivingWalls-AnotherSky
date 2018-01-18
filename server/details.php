<?php

/*
 * This file returns the apartment detailed description to the front end, cuz its cool like that
 * this script is invoked by/when
 * 	changing the parking selection in the apartment modal
 * 	among other places
 */
require "details_constants.php";

$selected_apt_floor = $_POST['selected_apt_floor'];
$area_sq_ft = $_POST['area_sq_ft'];
$car_parking = $_POST['car_parking'];
$apt_type = $_POST['apt_type'];

echo json_encode(calculate_total($selected_apt_floor, $area_sq_ft, $car_parking, $apt_type));
