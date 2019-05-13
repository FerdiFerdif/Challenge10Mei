
<?php
$line4 = filter_input(INPUT_POST,'objectiveline');


$dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
//


$query = "INSERT INTO objective (storyline)
                    VALUES ('$line4')";

$result = mysqli_query($dbc, $query) or die ('Error querying.');


header("Location:storyeditor.php");






?>