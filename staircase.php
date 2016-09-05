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