
<?php
$line2 = filter_input(INPUT_POST,'antagonistline');


$dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
//


$query = "INSERT INTO antagonist (storyline)
                    VALUES ('$line2')";

$result = mysqli_query($dbc, $query) or die ('Error querying.');


header("Location:storyeditor.php");






?>