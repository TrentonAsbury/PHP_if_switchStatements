<?php

	$title = "Home Page";

?>

<DOCTYPE html>
<HTML><HEAD>
<TITLE>SCC::<?php echo $title;  ?></TITLE>
</HEAD>

<BODY>

	<ul>
		<!--
		<?php
		
			$i = 1;
			while($i < 11){
				echo "<li> item " . $i;
				$i++;
			}
			
		?>
		<h3>Creating Numeric Arrays</h3>
		
		<?php
		
			$list = array(1, 15, 55, 66, 19);
			for ($i=0; $i < 5; $i++) {
				echo "Value: " . ($i + 1) . " is " . $list[$i] . "<br />"; 
				
			}
		?>
		-->
		<?php
			/*
			$sum = 0;
			for ($i=0; $i < 5; $i++) {
				$sum += $list[$i];
				}
			echo "<h2>The sum of the Array is: " . $sum . "</h2>";
			
			echo "<p> ....................... </p>";
			
			$k = 0;
			$num = 0;
			while ($k < 10) {
				echo "The Value of num is " . $num . "<br>";
				$num--;
				$k++;
			}
			
			echo "<br>";
			 */
			 
			$d = date("D");
			
			switch ($d) {
				case 'Mon':
					echo "Today is Monday";
					break;
				
				case 'Tue':
					echo "Today is Tuesday";
					break;
				
				case 'Wed':
					echo "Today is Wednesday";
					break;
					
				case 'Thu':
				echo "Today is Thursday";
				break;
					
				case 'Fri':
				echo "Today is Friday";
				break;
				
				case 'Sat':
					echo "Today is Saturday";
					break;
					
				case 'Sun':
					echo "Today is Sunday";
					break;
			
			default:
				echo "I have no idea!!";		
					break;
			}
			
			$j = 0;
			$num2 = 5;
			do{
				$num2 += 10;
				echo $num2 . "<br>";
				$j++;
				
				
			}while($j < 10);
			echo "Total Value: $num2";
			
		?>
		
		
	</ul>


</BODY>

</HTML> 