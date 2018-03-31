<!DOCTYPE html>
<html>
<head>
	<title>Hasil Rekap</title>
</head>
<body>
	<div>
	<h2>rekap nilai</h2>
		<table border="1" style="text-align: center">
			<tr>
				<th>UTS</th>
				<th>UAS</th>
				<th>Quiz</th>
				<th>Tugas</th>
				<th>Total</th>
				<th>Index</th>
			</tr>
			<tr style="">
				<td>
					<?php 
						echo ($_POST["uts"]);
					?>
				</td>
				<td>
					<?php 
						echo ($_POST["uas"]);
					?>
				</td>
				<td>
					<?php 
						echo ($_POST["quiz"]);
					?>
				</td>
				<td>
					<?php 
						echo ($_POST["tugas"]);
					?>
				</td>
				<td>
					<?php 
						$total = (($_POST["uts"]*20/100)+($_POST["uas"]*30/100)+($_POST["quiz"]*30/100)+($_POST["tugas"]*20/100));
						echo ($total);
					?>
				</td>
				<td style="font-weight: bold;">
					<?php 
						switch ($total) {
							case $total >= 80:
								echo "A";
								break;
							case $total >= 70:
								echo "B";
								break;
							case $total >= 60:
								echo "C";
								break;
							case $total >= 50:
								echo "D";
								break;
							default:
								echo "E";
								break;
						}
					?>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>