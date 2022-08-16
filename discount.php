<html>

<body>

<?php
	
	$tot=2200;
	
	echo "The total amount is : $tot</br>";
	
	if($tot>=5000)
	{
		$tot-=($tot*0.2);
	}
	else
	{
		$tot-=($tot*0.05);
	}
	
	echo "The discounted amount is : $tot<br/>";

?>
</body>
</html>