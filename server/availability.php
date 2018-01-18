<?php
/*
 * Here's where you usually write a really long formal comment about what this file will do.
 * Ok, bye.
 */

require ("blocks/block_A.php");
require ("blocks/block_B.php");
require ("blocks/block_C.php");

$master = array(
				'4BHK' => $BHK4,
				'3BHKP' => array_merge($BHK3P_A, $BHK3P_B, $BHK3P_C),
				'3BHK' => array_merge($BHK3_A, $BHK3_B, $BHK3_C),
			);

echo json_encode($master);
