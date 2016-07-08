<?php

class movie{

	public $name; //movie title
	public $genres; //one or more genres
	public $runtime; //runtime in minutes
	public $image; //name of image file
	public $isSelected = false;

	function __construct($name, $genres, $runtime, $image){
		$this->name=$name;
		$this->genres=$genres;
		$this->runtime=$runtime;
		$this->image=$image;
	}

	function select(){
		$this->isSelected = true;
	}

	function deselect(){
		$this->isSelected = false;
	}
}

function getMovies($data){
	$raw = file($data);
	$movies;
	for($i=0;$i<count($raw);$i++){
		$raw[$i] = explode(";", $raw[$i]);
		$movies[$i] = new movie($raw[$i][0],$raw[$i][1],$raw[$i][2],$raw[$i][3]);
	}
	return $movies;
}

$test = getMovies("movies.txt");

?>