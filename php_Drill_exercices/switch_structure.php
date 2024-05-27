<?php
echo "<h2>Exercice 9</h2>";

$note = isset($_GET['note']) ? intval($_GET['note']) : 0;
    
switch ($note) {
    case ($note < 4):
        $result = "This work is really bad. What a dumb kid!";
        break;
    case ($note >= 4 && $note <= 9):
        $result = "This is not sufficient. More studying is required.";
        break;
    case 10:
        $result = "barely enough!";
        break;
    case in_array($note, [11, 12, 13, 14]):
        $result = "Not bad!";
        break;
    case in_array($note, [15, 16, 17, 18]):
        $result = "Bravo, bravissimo!";
        break;
    case in_array($note, [19, 20]):
        $result = "Too good to be true : confront the cheater!";
        break;
}

echo $result;

?>
<form method="get" action="">
	<label for="note">Note :</label>
	<input type="number" name="note"><br>

	<input type="submit" name="submit" value="check">
</form>