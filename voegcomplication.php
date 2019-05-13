
<?php
$line3 = filter_input(INPUT_POST,'complicationline');


$dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
//


$query = "INSERT INTO complication (storyline)
                    VALUES ('$line3')";

$result = mysqli_query($dbc, $query) or die ('Error querying.');


header("Location:storyeditor.php");






?>