<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Story Editor</title>
    <link type="text/css" rel="stylesheet" href="cssketch.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet"> <!--Normale Variant  font-family: 'Baloo Chettan', cursive; -->
    <link rel="icon" href="https://i.ibb.co/0JK5N6W/FG6.png" sizes="">
    <script>

        function myFunction2() {
            var x = document.getElementById("show");
            var c = document.getElementById("show2");
            var v = document.getElementById("show3");
            var b = document.getElementById("show4");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }

            if (x.style.display === "block") {
                c.style.display = "none";
                v.style.display = "none";
                b.style.display = "none";
            }
        }

        function myFunction() {
            var x = document.getElementById("show");
            var c = document.getElementById("show2");
            var v = document.getElementById("show3");
            var b = document.getElementById("show4");
            if (c.style.display === "block") {
                c.style.display = "none";
            } else {
                c.style.display = "block";
            }

            if (c.style.display === "block") {
                x.style.display = "none";
                v.style.display = "none";
                b.style.display = "none";
            }
        }

        function myFunction3() {
            var x = document.getElementById("show");
            var c = document.getElementById("show2");
            var v = document.getElementById("show3");
            var b = document.getElementById("show4");
            if (v.style.display === "block") {
                v.style.display = "none";
            } else {
                v.style.display = "block";
            }

            if (v.style.display === "block") {
                x.style.display = "none";
                c.style.display = "none";
                b.style.display = "none";
            }
        }

        function myFunction4() {
            var x = document.getElementById("show");
            var c = document.getElementById("show2");
            var v = document.getElementById("show3");
            var b = document.getElementById("show4");
            if (b.style.display === "block") {
                b.style.display = "none";
            } else {
                b.style.display = "block";
            }

            if (b.style.display === "block") {
                x.style.display = "none";
                v.style.display = "none";
                c.style.display = "none";
            }

        }

    </script>
</head>
<body>

<nav>
    <p id="xd"><a href="quest.php"><img src="https://i.ibb.co/BPsTzM8/Ferdi-Game.png">  </a> </li></p>
</nav>
</body>

<div class="home">
    <div class="mainbackscreen">

        <div class="textblock">
            <div class="text">
                <p id="Hoofdtitel">
                    STORYLINE EDITOR
                </p>

                <div class="helekleinetext"> <p id="hele" >Uitleg: <br> - Creëer en edit je eigen storyline! <br> - Druk op één van de knoppen en vul je eigen storyline in en druk op enter!
                    </p>
                </div>

                <p id="Hoofdtitel">
                    VOEG JE STORY TOE

                </p>

            </div>

            <button onclick="myFunction2()">Antagonist</button>

            <button onclick="myFunction()">Settings</button>

            <button onclick="myFunction3()">Complication</button>

            <button onclick="myFunction4()">Objective</button>

            <div  id="show" style="display: none">
                <div class="textvansql">

                    <form action="voegantagonist.php" method="post" id="form2">
                        <label for="antagonistline"><b>Antagonist: </b></label>
                        <input type="text" placeholder="" name="antagonistline">
                    </form>

                </div>
            </div>

            <div  id="show2" style="display: none">
                <div class="textvansql">



                    <form action="voegsetting.php" method="post" id="form1">
                        <label for="settingline"><b>Settings: </b></label>
                        <input type="text" placeholder="" name="settingline">
                    </form>



                </div>
            </div>

            <div  id="show3" style="display: none">
                <div class="textvansql">

                    <form action="voegcomplication.php" method="post" id="form3">
                        <label for="complicationline"><b>Complication: </b></label>
                        <input type="text" placeholder="" name="complicationline">
                    </form>



                </div>
            </div>

            <div  id="show4" style="display: none">
                <div class="textvansql">

                    <form action="voegobjective.php" method="post" id="form4">
                        <label for="objectiveline"><b>Objective: </b></label>
                        <input type="text" placeholder="" name="objectiveline">
                    </form>



                </div>
            </div>


        </div>
    </div>
</div>

</html>