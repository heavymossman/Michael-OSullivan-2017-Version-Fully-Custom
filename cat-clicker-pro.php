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

    $(function(){

      //MODEL 

      var model = {

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


      };


      // HERE WE NEED OUR OCTOPUS

      var octopus = {

        addCat: function(){
          model.kittens.push({
            id: this.id,
            name: this.name,
            image: this.image,
            startingClicks: 0

          });
        }


      }

        octopus.addCat();



      // VIEW METHOD FOR THE MENU
      var view = {

        menu: function(){

          for (anything in model.kittens){

           var ouput = "<br />" + "<li>" + '<a href="#" id="' + model.kittens[anything].id + '">' + model.kittens[anything].name + "</a></li>";

           $('#catMenu').append(ouput);
          } 
        }

      };


      view.menu();

      //VIEW METHOD FOR THE ACTUAL CATS



    }) //final closure
      



    </script>

    <?php include 'footer.php'; ?>




