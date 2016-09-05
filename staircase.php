<?php

function draw($size)
{
	for($i = 1; $i <=$size; $i++)
	{
		$spaces = $size-$i;
		while ($spaces)
		{
			echo "&nbsp; ";
			$spaces--;
		}
		$stairs = 0;
		while ($stairs < $i)
		{
			echo "#";
			$stairs++;
		}
		echo "<br/>";
	}
}
draw(6);


/*function draw($size)
{
	$pengurang = $size; $text="";
	for($x = 1; $x<=$size; $x++)
	{


		for($i = 1; $i <=$size; $i++)
		{
			if($i <$pengurang){
				$text .= "&nbsp; ";
			}
			else
			{
				$text .= "#";
			}
			
		}
		$text .= "<br>";
		$pengurang--; 
	}
	return $text;
		
}
echo draw(6);

?>*/
