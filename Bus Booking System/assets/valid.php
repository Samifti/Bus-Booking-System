<?php
	function Min_Length($data,$arg)
	{
		return strlen($data)>= $arg;
	}
	
	function Max_Length($data,$arg)
	{
		return(strlen($data) <= $arg);
	}
	
	function Int_max($data,$max)
	{
		return ($data <= $max);
	}
	
	function Int_min($data,$min)
	{
		return ($data >= $min);
	}
		
	//Numeric
	function numeric($str)
	{
		return is_numeric($str);
	}
	
	function Email($data)
	{
		return (filter_var($data,FILTER_VALIDATE_EMAIL) !== false);
	}
		
	function Date_valid($date,$format = 'YYYY-MM-DD')
	{
		$d = preg_split( '/[-\.\/ ]/', $date );
		if(count($d)!= 3)
		{
			return false;
		}
		if(intval($d[0]) > 3000 && intval($d[0]) < 1000)
		{
			return false;
		}
		if(intval($d[1]) > 12 && intval($d[1]) < 1)
		{
			return false;
		}
		if(intval($d[2]) > 31 && intval($d[2]) < 1)
		{
			return false;
		}
		return true;	
	}
	
	function Phone($data)
	{
		if(!is_numeric($data) || strlen($data) != 10)
		{
			return false;
		}
		return true;
	}
		
?>