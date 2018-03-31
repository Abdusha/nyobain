<!DOCTYPE html>
<html>
<head>
	<title>Olah Nilai</title>

</head>
<body>
	<div>
		<h1>Olah Nilai</h1>
		<h2>Masukan Nilai</h2>
		<form method="POST" action="tampil.php">
			<label>UTS   : </label><input type="number" name="uts" value="" required="" min="0" max="100"><br>
			<label>UAS   : </label><input type="number" name="uas" value="" required="" min="0" max="100"><br>
			<label>Quiz  : </label><input type="number" name="quiz" value="" required="" min="0" max="100"><br>
			<label>Tugas : </label><input type="number" name="tugas" value="" required="" min="0" max="100"><br>
			<input type="submit" name="submit" value="Proses">
		</form>
	</div>
</body>
</html>