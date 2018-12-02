<?php
function f3($rows, $cols)
{
			$b = 1;

			echo '<table border = "1">';

			for( $tr = 1; $tr <= $rows; $tr++ )
			{
				
				echo "<tr>";

				for( $td = 1; $td <= round($cols/2); $td++ )
				{
					if($tr%2 != 0 && $td != round($cols/2))
					{
						echo "<td colspan = '2'>" . $b .  "</td>";
						$b++;
					}
					else
					{
						if($tr%2 != 0 && $td == round($cols/2))
						{
							if($cols%2 == 0)
							{
								echo "<td colspan = '2'>" . $b .  "</td>";
								$b++;
							}
							else
							{
								echo "<td>" . $b .  "</td>";
								$b++;
							}
						}
						else
						{
							if($tr%2 == 0 && $td == 1)
							{
								echo "<td>" . $b .  "</td>";
								$b++;
							}
							else
							{
								if($tr%2 == 0 && $td != 1 && $td < round($cols/2))
								{
									echo "<td colspan = '2'>" . $b .  "</td>";
									$b++;

								}
								else
								{
									if($tr%2 == 0 && $td == round($cols/2))
									{
										if( $cols%2 == 0)
										{
											echo "<td colspan = '2'>" . $b .  "</td>";
											$b++;
											echo "<td>" . $b .  "</td>";
											$b++;
										}
										else
										{
											echo "<td colspan = '2'>" . $b .  "</td>";
											$b++;
											
										}
									}
								}

							}
						}
					}

				}

				echo "</tr>";

			}

			
			echo '</table>';
			echo "<br \>"."<br \>";
}