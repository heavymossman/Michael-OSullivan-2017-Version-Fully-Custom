<?php include 'header.php'; ?>

<style type="text/css">
  
.show-hide{
  display: none;
}


.controls {
    text-align: center;
    margin: 0 auto 1em;
}

.cat-list {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.cat-name-output {
  color: black;
  font-size: 50px;
}

.cat {
    background: url(http://bestanimations.com/Animals/Mammals/Cats/cats/cute-kitty-animated-gif-21.gif);
    border-radius: 50%;
    display: inline-block;
    line-height: 200px;
    text-align: right;
    width: 380px;
    margin: .5em;
    font-size: 30px;
    color: black;
}

.remove-cat {
    background: #000;
    color: #FFF;
    padding: 0.25em;
    text-decoration: none;
    border-radius: 3px;
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

          <div class="col-md-2">
            <div class="controls">
              <input class="form-control cat-name" placeholder="Enter your cats name">
        <button class="add-cat btn btn-success btn-block">Add Cat</button>

         </div>

         

          </div>

        <div class="col-md-10">

        <ul class="cat-list"></ul>

        <script type="text/template" data-template="cat">
           <li class="cat" data-id="{{id}}">
            {{name}}
           
           {{id}}
        
           
             
            <div class="cat-controls">
                <a href="#" style="color:white;" class="remove-cat">X</a>
            </div>

             </li>
    </script>
            </div> <!--col-md-8-->

          </div><!--row-->

        </div><!--col-md-12-->
      </div><!--row-->
    </div> <!--container-->

    <?php include 'footer-bootstrap.php'; ?>

    <script type="text/javascript">

    $(function(){

      
      // creating the empty dyniamic content data model and array objects

      var model = {
        lastID: 0,
        catName: "", 
        cats: []
      };




      // The so called octopus, currently just adding a cat functionality and also the init function of the view

      var octopus = {

        addCat: function() {
          var thisCatID = ++model.lastID;
          var thisCatName = model.catName;
          console.log(thisCatName)

          model.cats.push({
            id: thisCatID,
            name: thisCatName,
            visible: true
          }); 
          view.render(); 
        },

        removeCats: function(cat) {
          var clickedCat = model.cats[ cat.id - 1 ];
          clickedCat.visible = false;
          view.render();
        },

        getVisibleCats: function(){
          var visibleCats = model.cats.filter(function(cat){
            return cat.visible;
          });
          return visibleCats;
        }, 

        init: function(){

          view.init(); 
        } 

      };


      var view = {

        init: function(){
          var addCatBtn = $('.add-cat');
          addCatBtn.click(function(){
            var addCatName = $('.cat-name').val();
            console.log("CAT NAME IS: " + addCatName);
            octopus.addCat();
          });

          // grab elements and html for using in the render function
          this.$catList = $('.cat-list');
          this.$catNameOutput = $('.cat-name-output');
          this.catTemplate = $('script[data-template="cat"]').html();
         
          

          // Delegated event to listen for removal clicks

          this.$catList.on('click', '.remove-cat', function(e){
            var cat = $(this).parents('.cat').data();
            octopus.removeCats(cat);
            return false;
          });

          this.render();

        },

        render: function() {
          var $catList = this.$catList,
          $catNameOutput = this.$catNameOutput,
          catTemplate = this.catTemplate;
         

          //Clear and render the output

          $catList.html('');
          $catNameOutput.html('');
          octopus.getVisibleCats().forEach(function(cat){
            // Replace template markers with data
            var thisTemplate = catTemplate.replace(/{{id}}/g, cat.id); //g is a global match, The g modifier is used to perform a global match (find all matches rather than stopping after the first match).
            var anotherTemplate = thisTemplate.replace(/{{name}}/g, cat.name);
            //console.log(anotherTemplate)
            $catList.append(thisTemplate);
            $catNameOutput.append(anotherTemplate);
          });
        }


      };



      octopus.init();


    }()); //final closure
      



    </script>

    <?php include 'footer.php'; ?>




