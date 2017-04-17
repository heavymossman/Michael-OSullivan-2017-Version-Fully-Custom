<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Michael O'Sullivan">
    

    <title>JS Reaction Game - Michael O'Sullivan</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <style>

    body {
        font-family: 'Lato', sans-serif;
        background-color: #ECECEC;

    }

  


    </style>


  </head>

  <body>

    <div class="container text-xs-center">

        <div class="row">
            <div class="col-md-12 p-t-3">
            <h1 class="text-xs-center">Welcome to the Reaction Tester</h1>
            <h2>Test your reactions!</h2>
            <h3>Click on the boxes and circles as quickly as you can!</h3>
            <a href="index.php" >Back home</a>
            </div>

        </div>

        <div class="row p-y-3">
            <h2 class="p-a-2">Your reaction time: <strong><span id="results"></span></strong></h2>

        </div>


        <div class="row">
            <div class="col-md-12">

            <div id="shape"></div>
            

            </div>
        </div>


    </div><!--CONTAINER-->










    <script type="text/javascript">

        var start = new Date().getTime();


        function getRandomColor() {
                var letters = '0123456789ABCDEF'.split(''); // .split seperates the items in a string into a usable array
                var color = '#';
                for (var i = 0; i < 6; i++ ) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
        }

        function makeShapeAppear() {
            document.getElementById("shape").style.display = "block"; 
            start = new Date().getTime();
        }

        function appearAfterDelay()  {

            var top = Math.random() * 300;

            var left = Math.random() * 800;

            var width = (Math.random() * 400) + 100;

            var height = (Math.random() * 400) + 100;

            if (Math.random() > 0.5 ) {
                document.getElementById("shape").style.borderRadius = "50%";
            } else {
                document.getElementById("shape").style.borderRadius = "0";
            }

            document.getElementById("shape").style.top = top + "px";
            document.getElementById("shape").style.left = left + "px";
            document.getElementById("shape").style.width = width + "px";
            document.getElementById("shape").style.height = height + "px";
            document.getElementById("shape").style.backgroundColor = getRandomColor();

            setTimeout(makeShapeAppear, Math.random() * 2000); // This will set the display timer to random with a max delay of 2000 miliseconds or 2 seconds
        }

        appearAfterDelay();

        document.getElementById("shape").onclick = function () {

            document.getElementById("shape").style.display = "none";

            var end = new Date().getTime();

            var timeTaken = (end - start) / 1000; //dividing it by 1000 to convert it from miliseconds to seconds 

            document.getElementById("results").innerHTML = timeTaken + " seconds";

            appearAfterDelay(); // reloading the function ensures that the shape reappears and the game is continous
         
        }


    </script>

  <?php include 'footer-bootstrap.php'; ?>


 <?php include 'footer.php'; ?>