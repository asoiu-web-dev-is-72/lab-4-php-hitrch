<?php
function f4($rows, $cols)
{
			echo '<table class = "t1" border = "1">';

			
			for($i = 0 ; $i < $cols; $i++)
			{
				echo "<tr>";
				$a = $i % 3;
				$j = $rows;

				$b = $rows - $a;
				$c = $b % 3;
				$b = $b - $c;
				if($c != 0)
				{
					echo "<td colspan='$c'>" . "</td>";
					$b = $b - $c;
				}


				while($b > 3)
				{
					echo "<td colspan='3'>" . "</td>";
					$b = $b - 3;
				}

				if($a == 0)
				{
					if($rows>2)
					{
						echo "<td colspan='3'>" . "</td>";
					}
				}
				else
				{
					if($rows > 4)
					{

						if($i % 3 != 2 || $rows > 2)
						{
							echo "<td colspan='3'>" . "</td>";
						}
						echo "<td colspan='$a'>" . "</td>";
					}
					else
					{
						if($rows == 4)
						{

							if($i % 3 != 2 && $rows > 2)
							{
								echo "<td colspan='3'>" . "</td>";
							}
							echo "<td colspan='$a'>" . "</td>";
						}
						else
						{
							echo "<td colspan='$a'>" . "</td>";	
						}
						
					}
				}
				echo "</tr>";
			}
			
			echo '</table>';
			echo '<br>';echo '<br>';echo '<br>';
}