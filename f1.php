<?php
function f1($rows, $cols)
{
	$a=1;
			$b = $cols;
			echo '<table border = "1">';
			echo '<tr>';
			echo "<td colspan='$b'>" . $a . "</td>";
			echo '</tr>';	
			$a++;
			$b--;

			for( $i = 1; $i < $rows; $i++ )
			{
				echo '<tr>';
				echo "<td rowspan='$b'>" . $a . "</td>";
				$a++;
				echo "<td colspan='$b'>" . $a . "</td>";
				$a++;
				$b--;
				echo '</tr>';
			}

			echo '</tr>';
			echo '</table>';

			echo "<br \>"."<br \>";
}