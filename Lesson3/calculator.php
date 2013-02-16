<pre>
Show Globals
<?php
	
print_r($_GET);

$left=$_GET['left'];
echo "left=$left\n";

$right=$_GET['right'];
echo "right=$right\n";

$oper=$_GET['oper'];

switch ($oper)
{
	case 'plus':
		$result=$left+$right;
		break;

	case 'minus':
		$result=$left-$right;
		break;
	
	default:
		$result='unknown';
}
echo "result=$result\n";



?>