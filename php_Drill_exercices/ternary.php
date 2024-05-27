<?php
//----------------------------
echo "<h2>Exercice 11</h2>";

$hello = $_GET['gender'] == 'male'? 'mister' : 'miss';

echo 'Hello ' . $hello

?>

<form method="get" action="">

    <label for="gender">Select your gender :</label>
    <select name="gender" id="gender" required>
        <option value="male" selected>Male</option>
        <option value="female">Female</option>
    </select><br>

	<input type="submit" name="submit" value="Greet me now">
</form>