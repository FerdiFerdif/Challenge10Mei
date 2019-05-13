<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quest</title>
    <link type="text/css" rel="stylesheet" href="cssketch.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet"> <!--Normale Variant  font-family: 'Baloo Chettan', cursive; -->
    <link rel="icon" href="https://i.ibb.co/0JK5N6W/FG6.png" sizes="">
    <script> function myFunction() {
            var x = document.getElementById("show");
            if (x.style.display === "block") {
                x.style.display = "block";
            } else {
                x.style.display = "block";
            }
        } </script>
</head>
<body>

<nav>
    <p id="xd"><a href="homepagina.php"><img src="https://i.ibb.co/BPsTzM8/Ferdi-Game.png">  </a> </li></p>
</nav>
</body>

<div class="home">
    <div class="mainbackscreen">

        <div class="textblock">
            <div class="text">
                <p id="Hoofdtitel">
                    QUEST ADVENTURE
                </p>

                <div class="helekleinetext"> <p id="hele" >Uitleg: <br> - Bij dit spel maak je een missie die je moet uitvoeren

                        <br> - Een missie wordt samengesteld uit minstens 4 verschillende random geshuffelde gekozen  situaties die bestaan uit de volgende volgorde: <br>
                        - 1. Antagonist (omgeving) 2. Setting (waar je precies bent en wat je doet) 3. Complication (iets wat je tegen werkt) 4. Objective (je doel)

                    </p>
                </div>

                <p id="Hoofdtitel">
                    BUTTON MENU

                </p>

            </div>

            <button onclick="myFunction()">Show My Quest</button>

            <a href="quest.php"> <button>Refresh Quest</button> </a>

            <a href="storyeditor.php"> <button>Voeg Een Storyline</button> </a>

            <div  id="show" style="display: none">
                <div class="textvansql">


                    <?php //--FILE RETRIEVAL METHOD
                    //$settings = explode("\n", file_get_contents('settings.txt '));
                    //$objectives = explode("\n", file_get_contents('objectives.txt'));
                    //$antagonists = explode("\n", file_get_contents('antagonist.txt'));
                    //$complications = explode("\n", file_get_contents('complication.txt'));

                    //shuffle($settings);
                    //shuffle($objectives);
                    //shuffle($antagonists);
                    //shuffle($complications);

                    //echo $settings[0] . '<br> ' . $objectives[0] . '<Br> ' . $antagonists[0] . '<Br> '
                    //. $complications[0] . "<br />\n";


                    $dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');


                    $query = "SELECT storyline FROM antagonist ORDER BY RAND() LIMIT 1";


                    $result = mysqli_query($dbc, $query) or die ('Error querying.');

                    foreach($result as $row)
                    {
                        echo " ".$row['storyline']."<br>";

                    }



                    $query = "SELECT storyline FROM setting ORDER BY RAND() LIMIT 1";


                    $result = mysqli_query($dbc, $query) or die ('Error querying.');

                    foreach($result as $row)
                    {
                        echo " ".$row['storyline']."<br>";

                    }

                    $query = "SELECT storyline FROM complication ORDER BY RAND() LIMIT 1";


                    $result = mysqli_query($dbc, $query) or die ('Error querying.');

                    foreach($result as $row)
                    {
                        echo " ".$row['storyline']."<br>";

                    }

                    $query = "SELECT storyline FROM objective ORDER BY RAND() LIMIT 1";


                    $result = mysqli_query($dbc, $query) or die ('Error querying.');

                    foreach($result as $row)
                    {
                        echo " ".$row['storyline']."<br>";

                    }

                    ?>



                </div>
            </div>



        </div>
    </div>
</div>

</html>