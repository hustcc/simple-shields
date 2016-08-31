<?php
header("Content-Type: image/svg+xml;charset=utf-8");

function measureTextWidth($text) {
	$bbox = imageftbbox(11, 0, 'verdana.ttf', $text);
	return $bbox[2] - $bbox[0];
}

// color name 2 color rgb
function textColor($color_name) {
	$colors = array(
		'red' => 'e05d44',
		'orande' => 'fe7d37',
		'yellow' => 'dfb317',
		'brightgreen' => '4c1',
		'green' => '97ca00',
		'yellowgreen' => 'a4a61d',
		'blue' => '007ec6',
		'grey' => '555',
		'lightgrey' => '9f9f9f'
	);
	return isset($colors[$color_name]) ? $colors[$color_name] : null;
}

// get the GET paramters
$subject = isset($_GET['subject']) ? $_GET['subject']: 'shields';
$status = isset($_GET['status']) ? $_GET['status']: 'passing';
$color = isset($_GET['color']) ? $_GET['color']: 'lightgrey';
// chang color name to rgb
$color_tmp = textColor($color);
if ($color_tmp) {
	$color = $color_tmp;
}

// measure the text width
$subject_width = measureTextWidth($subject);
$status_width = measureTextWidth($status);

$left_width = $subject_width; // ignore all the margin and gap
$right_width = $status_width;

$subject_x = $left_width / 2; // ignore all the margin and gap
$status_x = $left_width + $right_width / 2;

$width = $left_width + $right_width;

echo 
	'<svg xmlns="http://www.w3.org/2000/svg" width="' . $width . '" height="20">
		<linearGradient id="b" x2="0" y2="100%">
			<stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
			<stop offset="1" stop-opacity=".1"/>
		</linearGradient>
		<mask id="a">
			<rect width="' . $width . '" height="20" rx="3" fill="#fff"/>
		</mask>
		<g mask="url(#a)">
			<path fill="#555" d="M0 0h' . $left_width . 'v20H0z"/>
			<path fill="#' . $color . '" d="M' . $left_width . ' 0h' . $right_width . 'v20H' . $left_width . 'z"/>
			<path fill="url(#b)" d="M0 0h' . $width . 'v20H0z"/>
		</g>
		<g fill="#fff" text-anchor="middle" font-family="Verdana" font-size="11">
			<text x="' . $subject_x . '" y="15" fill="#010101" fill-opacity=".3">' . $subject . '</text>
			<text x="' . $subject_x . '" y="14">' . $subject . '</text>
			<text x="' . $status_x . '" y="15" fill="#010101" fill-opacity=".3">' . $status . '</text>
			<text x="' . $status_x . '" y="14">' . $status . '</text>
		</g>
	</svg>';
