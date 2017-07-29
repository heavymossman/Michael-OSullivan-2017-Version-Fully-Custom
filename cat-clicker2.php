<?php include 'header.php'; ?>

<style type="text/css">
  
.show-hide{
  display: none;
}

</style>


    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>Cat Clicker</h1>
          <p>Click on the cat and build your clicks</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="row">

          <div class="col-md-2">

            <ul id="catMenu">
              
            </ul>

          </div>

        <div class="col-md-5">

          <div id="cats">

        

          </div>  

             <p id="catClicks"></p>
            

            </div> 

          </div>

        </div>
      </div>
    </div>

    <?php include 'footer-bootstrap.php'; ?>

    <script type="text/javascript">


      var allCats = {

      "kittens" : [

        {
          "id" : 1,
          "name" : "Meow", 
          "image" : "kittens/0002.png",
          "startingClicks" : 0
        },

        { 
          "id" : 2,
          "name" : "MoMo", 
          "image" : "kittens/0003.png",
          "startingClicks" : 0
        },

        { 
          "id" : 3,
          "name" : "Charlie", 
          "image" : "kittens/0004.png",
          "startingClicks" : 0
        },
        {
          "id" : 4,
          "name" : "Gavin", 
          "image" : "kittens/0005.png",
          "startingClicks" : 0
        },

        {
          "id" : 5,
          "name" : "Cookie", 
          "image" : "kittens/0006.png",
          "startingClicks" : 0
        },

        {
          "id" : 6,
          "name" : "Lewis", 
          "image" : "kittens/0007.png",
          "startingClicks" : 0
        }

        ]
      
      }


     // console.log(allCats.kittens);

    function displayCats(){

        for (anything in allCats.kittens){

           console.log(allCats.kittens[anything]);

           var ouput = "<br />" + "<li>" + '<a href="#" id="' + allCats.kittens[anything].id + '"' + 'onclick="' + allCats.kittens[anything].name + '();' + '">' + allCats.kittens[anything].name + "</a></li>";

           $('#catMenu').append(ouput);
        } 

    }
     
    displayCats();


    function Meow() {

      var output = allCats.kittens[0].id + "<br>" + allCats.kittens[0].name + '<br><img id="0" class="img-fluid" src="' + allCats.kittens[0].image + '">' + '<br>'

      $('#cats').html(output);

      var results = allCats.kittens[0].startingClicks;

      $('#catClicks').html("How popular is this cat " + results);

      $( "#0" ).click(function() {

        allCats.kittens[0].startingClicks = allCats.kittens[0].startingClicks + 1;

        results = allCats.kittens[0].startingClicks;

        $('#catClicks').html("How popular is this cat " + results);

        console.log("Here are the clicks " + results);
      })
    }


    function MoMo() {

      var output = allCats.kittens[1].id + "<br>" + allCats.kittens[1].name + '<br><img id="0" class="img-fluid" src="' + allCats.kittens[1].image + '">' + '<br>'

      $('#cats').html(output);

      var results = allCats.kittens[1].startingClicks;

      $('#catClicks').html("How popular is this cat " + results);

      $( "#0" ).click(function() {

        allCats.kittens[1].startingClicks = allCats.kittens[1].startingClicks + 1;

        var results = allCats.kittens[1].startingClicks;

        $('#catClicks').html("How popular is this cat " + results);

        console.log("Here are the clicks " + results);
      })
    }

     function Charlie() {

      var output = allCats.kittens[2].id + "<br>" + allCats.kittens[2].name + '<br><img id="0" class="img-fluid" src="' + allCats.kittens[2].image + '">' + '<br>'

      $('#cats').html(output);

      var results = allCats.kittens[2].startingClicks;

      $('#catClicks').html("How popular is this cat " + results);

      $( "#0" ).click(function() {

        allCats.kittens[2].startingClicks = allCats.kittens[2].startingClicks + 1;

        var results = allCats.kittens[2].startingClicks;

        $('#catClicks').html("How popular is this cat " + results);

        console.log("Here are the clicks " + results);
      })
    }

    function Gavin() {

      var output = allCats.kittens[3].id + "<br>" + allCats.kittens[3].name + '<br><img id="0" class="img-fluid" src="' + allCats.kittens[3].image + '">' + '<br>'

      $('#cats').html(output);

      var results = allCats.kittens[3].startingClicks;

      $('#catClicks').html("How popular is this cat " + results);

      $( "#0" ).click(function() {

        allCats.kittens[3].startingClicks = allCats.kittens[3].startingClicks + 1;

        var results = allCats.kittens[3].startingClicks;

        $('#catClicks').html("How popular is this cat " + results);

        console.log("Here are the clicks " + results);
      })
    }

    function Cookie() {

      var output = allCats.kittens[4].id + "<br>" + allCats.kittens[4].name + '<br><img id="0" class="img-fluid" src="' + allCats.kittens[4].image + '">' + '<br>'

      $('#cats').html(output);

      var results = allCats.kittens[4].startingClicks;

      $('#catClicks').html("How popular is this cat " + results);

      $( "#0" ).click(function() {

        allCats.kittens[4].startingClicks = allCats.kittens[4].startingClicks + 1;

        var results = allCats.kittens[4].startingClicks;

        $('#catClicks').html("How popular is this cat " + results);

        console.log("Here are the clicks " + results);
      })
    }

     function Lewis() {

      var output = allCats.kittens[5].id + "<br>" + allCats.kittens[5].name + '<br><img id="0" class="img-fluid" src="' + allCats.kittens[5].image + '">' + '<br>'

      $('#cats').html(output);

      var results = allCats.kittens[5].startingClicks;

      $('#catClicks').html("How popular is this cat " + results);

      $( "#0" ).click(function() {

        allCats.kittens[5].startingClicks = allCats.kittens[5].startingClicks + 1;

        var results = allCats.kittens[5].startingClicks;

        $('#catClicks').html("How popular is this cat " + results);

        console.log("Here are the clicks " + results);
      })
    }



    </script>

    <?php include 'footer.php'; ?>




