<?php include 'header.php'; ?>

<style type="text/css">

*,
*:before,
*:after {box-sizing: border-box;}

.new-cat-form {
    margin-bottom: 15px;
}
.new-cat-content {
    width:100%;
    display: block;
    font-size: 1.3em;
}

.cats {
    list-style-type: none;
    margin:0;
    padding: 0;
}
.cat {
    display: inline-block;
    padding:10px;
    list-style-type: none;
    display: inline-block;
    line-height: 100%;
    text-align: center;
    width: 380px;
    margin: .5em;
    font-size: 30px;
    color: black;
}

.cat-date {
    font-size:0.7em;
    margin-bottom: 10px;
    display: block;
}
  

</style>


    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>Cat Clicker Premium PRO V2</h1>
          <p>Click on the cat and build your clicks</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="row">

            <div class="col-md-4">
                <form id="new-cat-form" class="new-cat-form">
                  <input id="new-cat-content" class="new-cat-content form-control" placeholder="Enter your cat name">
                  <input id="new-cat-image" class="new-cat-image form-control" placeholder="Enter your cat image URL">
                  <button type="submit" class="submit-button btn btn-success">Upload</button>
                </form>
            </div>

            <div class="col-md-8">

              <ul id="cats" class="cats"></ul>

        
            </div> <!--col-md-10-->

          </div><!--row-->

        </div><!--col-md-12-->
      </div><!--row-->
    </div> <!--container-->

    <?php include 'footer-bootstrap.php'; ?>

    <script type="text/javascript">


    $(function(){

      // using this to generate the unique IDs per cat
      var data = {
        lastID: 0,
        startingClicks: 0
      }


      var model = {

        init: function() {
          if (!localStorage.cats) {
            localStorage.cats = JSON.stringify([]);
          }
        },

        add: function(obj) {
          var data = JSON.parse(localStorage.cats);
          data.push(obj);
          localStorage.cats = JSON.stringify(data);
        }, 

        getAllCats: function(){
          return JSON.parse(localStorage.cats);
        }

      };

      var octopus = {

        addNewCat: function(catName){

        
          var thisID = ++data.lastID;

          var newCatImage = $('#new-cat-image').val();

          var clickResults = data.startingClicks;

          model.add({
            content: catName,
            catID: thisID,
            catImage: newCatImage,
            catClicks: clickResults
          });
          view.render();
        },

        getCats: function(){
          return model.getAllCats();
        },

      

        init: function() {
          model.init();
          view.init();
        }

      };

      var view = {
        init: function() {
          this.catList = $('#cats');
          var newCatForm = $('#new-cat-form');
          var newCatContent = $('#new-cat-content');

          //var newCatImage = $('#new-cat-image');
          newCatForm.submit(function(e){
            octopus.addNewCat(newCatContent.val());
            newCatContent.val('');
            e.preventDefault(); //Uncomment this to stop the page refreshing after upload
          });
          view.render();
        },

        render: function() {
          var htmlStr = '';
          octopus.getCats().forEach(function(cat){

            htmlStr += '<li class="cat">' + cat.content + " " + 'ID: ' + cat.catID + '<br> <img ' + 'id="img-' + cat.catID + '" ' + 'class="img-fluid catImages"  src="' + cat.catImage + '">' + '<br> Total number of clicks: <span class="startingCatClicks">' + cat.catClicks + '</span></li>';
          });
          this.catList.html( htmlStr );
        }
      };

      octopus.init();

      //CLICK COUNTER

      $( ".catImages" ).on( "click", function() {
       // alert("working");
        
        var textclicks = $('.startingCatClicks').text(); //get teh starting clicks from the span id startkingCatClicks

        var clicks = parseInt(textclicks); //This converts the string of startking clicks into a integar or number

        var newClicks = clicks + 1; //adds one to the integar to reflect the click

        var finalOutput = newClicks.toString(); //converts output back to a string ()


        $('.startingCatClicks').text(finalOutput);

      });

      
    }) //final closures


    </script>

    <?php include 'footer.php'; ?>




