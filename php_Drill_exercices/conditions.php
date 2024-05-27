<?php
echo "<h2>Exercice 1.1</h2>";
$room_is_filthy = true;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

//----------------------------
echo "<h2>Exercice 1.2</h2>";

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness ==  $possible_states[0]){
	echo "I'm dying !";
} else if( $room_filthiness ==  $possible_states[1]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness ==  $possible_states[2]){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if($room_filthiness ==  $possible_states[3]){
	echo "Room is clean : good job !";
} else {
	echo "<br>Nothing to do, room is neat.";
}

//----------------------------
echo "<h2>Exercice 2</h2>";

$hour = date('H');
$minute = date('i');
$time = intval($hour . $minute);

if ($time >= 500 && $time <= 900) {
    echo "Good morning !";
} elseif ($time >= 901 && $time <= 1200) {
    echo "Good day !";
} elseif ($time >= 1201 && $time <= 1600) {
    echo "Good afternoon !";
} elseif ($time >= 1601 && $time <= 2100) {
    echo "Good evening !";
} else {
    echo "Good night !";
}

//----------------------------
echo "<h2>Exercice 3</h2>";

if (isset($_GET['age'])){
	
    $age = intval($_GET['age']);

    if($age < 12) {
        echo "<p>Hello kiddo !</p>";
    } else if($age < 18) {
        echo "<p>Hello Teenager !</p>";
    } else if($age < 115) {
        echo "<p>Hello Adult !</p>";
    } else {
        echo "<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>";
    }
}

?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="number" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
//----------------------------
echo "<h2>Exercice 4</h2>";

if (isset($_GET['age'])){
	
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];

    if($gender == "male") {
        $missMister = "mister";
    } else {
        $missMister = "miss";
    }

    if($age < 12) {
        echo "<p>Hello $missMister kiddo !</p>";
    } else if($age < 18) {
        echo "<p>Hello $missMister Teenager !</p>";
    } else if($age < 115) {
        echo "<p>Hello $missMister Adult !</p>";
    } else {
        echo "<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>";
    }
}

?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="number" name="age"><br>

    <label for="gender">Select your gender :</label>
    <select name="gender" id="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
//----------------------------
echo "<h2>Exercice 5</h2>";

if (isset($_GET['age'])){
	
    $english = isset($_GET['english']) ? $_GET['english'] : false;
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];

    if($gender == "male") {
        $missMister = "mister";
    } else {
        $missMister = "miss";
    }

    if($english) {
        $greeting = "Hello";
    } else {
        $greeting = "Aloha";
    }

    if($age < 12) {
        echo "<p>$greeting $missMister kiddo !</p>";
    } else if($age < 18) {
        echo "<p>$greeting $missMister Teenager !</p>";
    } else if($age < 115) {
        echo "<p>$greeting $missMister Adult !</p>";
    } else {
        echo "<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>";
    }
}

?>
<form method="get" action="">
    <label for="english">Do you speak english :</label>
	<input type="radio" name="english"><br>

	<label for="age">Please type your age :</label>
	<input type="number" name="age"><br>

    <label for="gender">Select your gender :</label>
    <select name="gender" id="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
//----------------------------
echo "<h2>Exercice 6</h2>";

$age = intval($_GET['age']);
$gender = $_GET['gender'];
$name = isset($_GET['name']) ? $_GET['name'] : 'Anonymous';

if(($age > 21) && ($age < 40) && ($gender == 'female')) {
    echo "Welcome to the team $name!";
} else {
    echo "Sorry $name, you don't fit the criteria.";
}

?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="number" name="age"><br>

    <label for="gender">Select your gender :</label>
    <select name="gender" id="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

    <label for="name">Your name : </label>
    <input type="text" name="name"><br>

	<input type="submit" name="submit" value="check">
</form>

<?php
//----------------------------
echo "<h2>Exercice 7</h2>";

$age = intval($_GET['age']);
$gender = $_GET['gender'];
$name = isset($_GET['name']) ? $_GET['name'] : 'Anonymous';

$message = "Sorry $name, you don't fit the criteria.";

if(($age > 21) && ($age < 40) && ($gender == 'female')) {
    $message = "Welcome to the team $name!";
}

echo $message;

?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="number" name="age"><br>

    <label for="gender">Select your gender :</label>
    <select name="gender" id="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

    <label for="name">Your name : </label>
    <input type="text" name="name"><br>

	<input type="submit" name="submit" value="check">
</form>

<?php
//----------------------------
echo "<h2>Exercice 8</h2>";

$note = isset($_GET['note']) ? intval($_GET['note']) : 0;

$result = "This work is really bad. What a dumb kid!";

if($note >= 4 && $note <= 9) {
    $result = "This is not sufficient. More studying is required.";
} else if($note == 10) {
    $result = "barely enough!";
} else if (in_array($note, [11, 12, 13, 14])) {
    $result = "Not bad!";
} else if (in_array($note, [15, 16, 17, 18])) {
    $result = "Bravo, bravissimo!";
} else {
    $result = "Too good to be true : confront the cheater!";
}

echo $result;

?>
<form method="get" action="">
	<label for="note">Note :</label>
	<input type="number" name="note"><br>

	<input type="submit" name="submit" value="check">
</form>