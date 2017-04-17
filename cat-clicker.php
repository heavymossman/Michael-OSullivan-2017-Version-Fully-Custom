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

          <!--        <h3 id="catName"></h3>

              <div class="py-1" id="kitten">
                <img src="https://farm9.staticflickr.com/8373/8572410296_73a0b79de4.jpg" class="img-fluid">
              </div>

                <h2>CLICK THE CAT!</h2>
                <h2>Total Clicks: <strong><span id="totalCounts">0</span></strong></h2>
                    -->

                      <div class="py-1" id="catDisplayArea" >

                      </div>




            </div>  

           
            

            </div> 

          </div>

        </div>
      </div>
    </div>

    <?php include 'footer-bootstrap.php'; ?>

    <script type="text/javascript">



      
    // Cat Clicker


  var allCats = {

      "kittens" : [

        {
          "catId" : 1,
          "catName" : "Meow", 
          "catImage" : "kittens/0002.png",
          "clicks" : 0
        },

        { 
          "catId" : 2,
          "catName" : "MoMo", 
          "catImage" : "kittens/0003.png",
          "clicks" : 0
        },

        { 
          "catId" : 3,
          "catName" : "Charlie", 
          "catImage" : "kittens/0004.png",
          "clicks" : 0
        },
        {
          "catId" : 4,
          "catName" : "Gavin", 
          "catImage" : "kittens/0005.png",
          "clicks" : 0
        },

        {
          "catId" : 5,
          "catName" : "Cookie", 
          "catImage" : "kittens/0006.png",
          "clicks" : 0
        },

        {
          "catId" : 6,
          "catName" : "Lewis", 
          "catImage" : "kittens/0007.png",
          "clicks" : 0
        }

      ],
      "cats" : [

        {
          "catName" : "Megan", 
          "catImage" : "kittens/0008.png",
          "clicks" : 0
        }
      ]
    }

    allCats.display = function() {

      //this so far displays the cats listed on the left hand side in the menu

      for (bloodyCats in allCats.kittens) {

        console.log(allCats.kittens[bloodyCats].catName)

        var catNameOut = '<li class="catMenu-item">' + '<a  href="#" id="' + allCats.kittens[bloodyCats].catName + '">' + allCats.kittens[bloodyCats].catName + '</a></li>';

        $("#catMenu").append(catNameOut);

      }

    }

   


    allCats.display();

    allCats.elemDisplay = function(){

      for (cats in allCats.kittens) {

      var clicks = 0;

      var catId = '<p class="show-hide %dataId% theCats">Cat ID: %data%</p>';

      var catName = '<div class="theCats show-hide %dataId%"><h3 id="%dataId%">%data%</h3>'; 

      var catArea = '<div class="theCats py-1 show-hide %dataId%" id="clickme"><img src="%data%" class="img-fluid"></div>';

      var catAction = '<h2 class="theCats show-hide %dataId%">CLICK THE CAT!</h2>';

      var catClicks = '<h2 class="theCats show-hide %dataId%">Total Clicks: <strong><span id="totalClicks">0</span></strong></h2>';

      var end = '<hr class="theCats show-hide"></div><!--catConstructor-->';

      var formattedcatName = catName.replace('%data%', allCats.kittens[cats].catName); 

      formattedcatName = formattedcatName.replace("%dataId%", allCats.kittens[cats].catId)

      $('#catDisplayArea').append(formattedcatName);

      var formattedcatArea = catArea.replace('%data%', allCats.kittens[cats].catImage); 
      formattedcatArea = formattedcatArea.replace("%dataId%", allCats.kittens[cats].catId)
      $('#catDisplayArea').append(formattedcatArea);

      var formattedcatId = catId.replace('%data%', allCats.kittens[cats].catId); 
      formattedcatId = formattedcatId.replace("%dataId%", allCats.kittens[cats].catId)
      $('#catDisplayArea').append(formattedcatId);

      var formattedcatAction = catAction.replace('%data%', catAction); 
      formattedcatAction = formattedcatAction.replace("%dataId%", allCats.kittens[cats].catId)
      $('#catDisplayArea').append(formattedcatAction);

      var formattedcatClicks = catClicks.replace('%data%', allCats.kittens[cats].catName); 
      formattedcatClicks = formattedcatClicks.replace("%dataId%", allCats.kittens[cats].catId)
      $('#catDisplayArea').append(formattedcatClicks);

      $('#catDisplayArea').append(end);

      console.log(formattedcatName)

    


      }




       $('#clickme').click(function(e) {

        clicks = clicks + 1;

        console.log(clicks)

       $('#totalClicks').text(clicks);

    });


    }

    allCats.elemDisplay();

  /*  function makeButtonsWork(){

      var myArray = ["Meow", "MoMo", "Charlie", "Gavin", "Cookie", "Lewis"];

      var id = $('#id').text(); 

      if (id == myArray[0]) {
        $( ".1" ).toggleClass( 'show-hide', false );
      } else if (id)

      if (id2 == 'MoMo') {
        $( ".2" ).toggleClass( 'show-hide', false );
      }
  
    } */


    
      $( "#Meow" ).click(function() {

        var doesIt = $( ".1" ).hasClass( "show-hide" )
        console.log(doesIt)
        if (doesIt == true) {
          $( ".1" ).removeClass( 'show-hide' );
        } else {$( ".1" ).addClass( 'show-hide' );}
      });

      $( "#MoMo" ).click(function() {

        var doesIt = $( ".2" ).hasClass( "show-hide" )
        console.log(doesIt)
        if (doesIt == true) {
          $( ".2" ).toggleClass( 'show-hide', false );
        } else {$( ".2" ).toggleClass( 'show-hide', true );}
      });

      $( "#Charlie" ).click(function() {

        var doesIt = $( ".3" ).hasClass( "show-hide" )
        console.log(doesIt)
        if (doesIt == true) {
          $( ".3" ).toggleClass( 'show-hide', false );
        } else {$( ".3" ).toggleClass( 'show-hide', true );}
      });

      $( "#Gavin" ).click(function() {

        var doesIt = $( ".4" ).hasClass( "show-hide" )
        console.log(doesIt)
        if (doesIt == true) {
          $( ".4" ).toggleClass( 'show-hide', false );
        } else {$( ".4" ).toggleClass( 'show-hide', true );}
      });

      $( "#Cookie" ).click(function() {

        var doesIt = $( ".5" ).hasClass( "show-hide" )
        console.log(doesIt)
        if (doesIt == true) {
          $( ".5" ).toggleClass( 'show-hide', false );
        } else {$( ".5" ).toggleClass( 'show-hide', true );}
      });

      $( "#Lewis" ).click(function() {

        var doesIt = $( ".6" ).hasClass( "show-hide" )
        console.log(doesIt)
        if (doesIt == true) {
          $( ".6" ).toggleClass( 'show-hide', false );
        } else {$( ".6" ).toggleClass( 'show-hide', true );}
      });

    


     




    /* 


    var rand = catNames[Math.floor(Math.random() * catNames.length)]; // generates random number from the length of the catname array

    var clicks = 0; // set initial number to 0 to add to as integar

    var clicks2 = 0;

    $('#catName').html(rand); // displays a random cat name from the array above

    var rand = catNames[Math.floor(Math.random() * catNames.length)]; // run the randomiser again, to generate a new name for cat 2

   $('#kitten').click(function(e) { //on click listener

        clicks = clicks + 1; //functions to add 1 to each click
        
        

        $('#totalCounts').text(clicks); //output

        if (clicks == 10){
          console.log('YES')
           $('#catName2').text(rand); 
          $('#kitten2').html('<img src="https://farm5.staticflickr.com/4012/4670482099_13faf98fcc.jpg" class="img-fluid">' + '<h2>YOU UNLOCKED SPECIAL KITTEN</h2>' + '<h2>Total Clicks: <strong><span id="totalCounts2">0</span></strong></h2>');
        }

    }); */



  

    </script>
 

    <?php include 'footer.php'; ?>