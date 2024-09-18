<?php

function dd($value) {
	echo "<pre>";
	var_dump($value);
	echo "</pre>";

	die();
}

function checkfernwartung(){
	if (isset($_GET['fernwartung'])) {
		fernwartungChangeState();
		$GLOBALS['FernwartungState']=true;
	} else {
		$GLOBALS['FernwartungState']=fernwartungState();
	}
}

function fernwartungChangeState() {
	file_put_contents('../fernwartung.json', json_encode(['validtill'=>(time()+5*60)]));
}

function fernwartungState() {
	if (!file_exists('../fernwartung.json')) return false;
	$data = json_decode(file_get_contents('../fernwartung.json'));
	return $data->validtill > time();
}

function printInfo() {
	if (!file_exists('../info.json')) return ''; 
	$contents = file_get_contents('../info.json');
	$data = json_decode($contents, true);
	$view = "";

	foreach ($data as $key => $value) {
		$today = strtotime(date("Y-m-d"));
		$start_date = strtotime($value["start_date"]);
		$end_date = strtotime($value["end_date"]);

		if (!($start_date <= $today && $today <= $end_date)) {continue;}

		$title = $value["title"];
		$description = $value["description"];


		$view .= "
			<article>
				<h1>&#9888; $title</h1>
				<p>$description</p>
			</article>
		";
	}

	return $view;
}