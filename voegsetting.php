
<?php
$line = filter_input(INPUT_POST,'settingline');


$dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
//


$query = "INSERT INTO setting (storyline)
                    VALUES ('$line')";

$result = mysqli_query($dbc, $query) or die ('Error querying.');


header("Location:storyeditor.php");






?>