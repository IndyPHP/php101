<pre>
<?php

//print_r($_GET);

	if (empty($_GET['random']))
	{
		$r=rand(1,999);
	}
	else
	{
		$r=(hexdec($_GET['random'])-11)/3;
	}

	if (!empty($_GET['guess']))
	{
		$guess=$_GET['guess'];
		
		if ($guess>$r)
		{
			echo "Your guess is too high\n";
		}
		else if ($guess<$r)
		{
			echo "Your guess is too low\n";
		}
		else
		{
			echo "<H3 style=\"background: red;\">You got it!!</H3>";
		}
	}

//echo "Random is $r\n";

?>
<form>
<input type="hidden" name="random" value="<?php echo dechex($r*3+11); ?>" />Guess:
<input type="text" name="guess" />
<input type="submit" name="submit" value="Make a Guess" />
</form>
