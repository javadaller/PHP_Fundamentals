<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
$teacher = isset($_GET['teacher']) ? $_GET['teacher'] : '';
$reason = isset($_GET['reason']) ? $_GET['reason'] : '';

$excuses = [
    'illness' => [
        "$teacher, $name is not feeling well and will be resting at home today.",
        "$teacher, unfortunately, $name has come down with a fever and cannot attend school today.",
        "$teacher, $name is ill and needs to stay home to recover.",
        "$teacher, $name is experiencing symptoms of illness and won't be in school today.",
        "$teacher, due to health issues, $name will not be able to attend school today."
    ],
    'death of the pet (or a family member)' => [
        "$teacher, $name is grieving the loss of a pet and will not be at school today.",
        "$teacher, we had a death in the family, and $name needs to be home today.",
        "$teacher, $name is deeply affected by the death of a loved one and can't attend school today.",
        "$teacher, $name is staying home due to the passing of a family member.",
        "$teacher, $name is dealing with the loss of a pet and needs some time at home."
    ],
    'significant extra-curricular activity' => [
        "$teacher, $name has an important extra-curricular event and won't be in school today.",
        "$teacher, $name is participating in a significant activity and needs to miss school today.",
        "$teacher, $name has a crucial competition/practice today and can't attend school.",
        "$teacher, $name is involved in an important event and will be absent today.",
        "$teacher, $name has a major extra-curricular commitment today and won't be at school."
    ],
    'wake up at 2 o\'clock' => [
        "$teacher, $name woke up very late and will not be able to make it to school today.",
        "$teacher, due to waking up at 2 o'clock, $name won't be attending school today.",
        "$teacher, $name had an unusual sleep schedule and can't come to school today.",
        "$teacher, $name woke up too late and will be missing school today.",
        "$teacher, an unexpected late wake-up means $name can't attend school today."
    ],
    'default' => [
        "$teacher, $name won't be able to attend school today due to personal reasons.",
        "$teacher, $name cannot make it to school today for an unspecified reason.",
        "$teacher, $name will be absent from school today due to unforeseen circumstances.",
        "$teacher, personal reasons are preventing $name from attending school today.",
        "$teacher, $name is unable to come to school today for personal reasons."
    ]
];

$excuse = '';

switch ($reason) {
    case 'illness':
    case 'death of the pet (or a family member)':
    case 'significant extra-curricular activity':
    case 'wake up at 2 o\'clock':
        $options = $excuses[$reason];
        $excuse = $options[array_rand($options)];
        break;
    default:
        $options = $excuses['default'];
        $excuse = $options[array_rand($options)];
        break;
}

echo $excuse;
?>

<form method="get" action="">
    <label for="name">Name of the child :</label>
    <input type="text" name="name"><br>

    <label for="gender">Gender of the child :</label>
    <select name="gender" id="gender" required>
        <option value="male" selected>Male</option>
        <option value="female">Female</option>
    </select><br>

    <label for="teacher">Name of the teacher :</label>
    <input type="text" name="teacher"><br>

    <label for="reason">Reason of the absence :</label><br>
    <input type="radio" name="reason" value="illness" checked>
    <label>Sick</label><br>

    <input type="radio" name="reason" value="death of the pet (or a family member)">
    <label>Death of the pet (or a family member)</label><br>

    <input type="radio" name="reason" value="significant extra-curricular activity">
    <label>Significant extra-curricular activity</label><br>

    <input type="radio" name="reason" value="wake up at 2 o'clock">
    <label>Wake up at 2 o'clock</label><br>

    <input type="submit" name="submit" value="Submit">
</form>
