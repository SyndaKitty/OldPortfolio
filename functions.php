<?php 
	function startingPositionX($array){
		for ($x = 0; $x < count($array); $x++)
			for ($y = 0; $y < count($array[$x]); $y++)
				if ($array[$x][$y] == "S")
					return count($array) - $x;
	}
	
	function startingPositionY($array){
		for ($x = 0; $x < count($array); $x++)
			for ($y = 0; $y < count($array[$x]); $y++)
				if ($array[$x][$y] == "S")
					return $y;
	}
	
	function loadMap($filename)
	{
		$map = array();

		$directory = "maps/";
	
		if (file_exists($directory . $filename . ".txt")){
			$myfile = fopen($directory . $filename . ".txt", "r") or die("Unable to open file!");
			
			$line = 0;
			$column = 0;
			while(!feof($myfile)) {
				$c = fgetc($myfile);
				$map[$line][$column++] = $c;
				if($c == "\n"){
					$column = 0;
					$line++;
				}
			}
			fclose($myfile);
			return $map;
		}else
			return "File not found!";
	}
?>