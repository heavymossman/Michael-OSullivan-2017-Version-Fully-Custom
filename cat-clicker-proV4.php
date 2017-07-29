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

.cat-list {
  font-size: larger;
}
  

</style>


    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>Cat Clicker Premium PRO V4</h1>
          <p>Click on the cat and build your clicks</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="row">

            <div class="col-md-4">

                

                  <ul id="cat-list" class="cat-list"></ul>
                  <button class="submit-button btn btn-default" id="admin-mode">Admin Mode</button>
                  <form id="admin-mode-form" class="py-1">
                    <label>Edit Cat Name</label>
                    <input class="form-control" id="cat-name-edit">
                    <br />
                    <label>Edit Cat Picture URL</label>
                    <input class="form-control" id="cat-image-edit">
                    <button class="submit-button btn btn-success" id="save-button">Save</button>
                    <button class="submit-button btn btn-warning" id="admin-mode-cancel">Cancel</button>
                    <br /><hr>
                    <h4>Add New cat</h4>
                    <label>Add New Cat Name</label>
                    <input id="new-cat-name" class="new-cat-content form-control" placeholder="Enter your cat name">
                    <br />
                    <label>Add New Cat Image URL</label>
                    <input id="new-cat-image" class="new-cat-image form-control" placeholder="Enter your cat image URL">
                    <br />
                    <button type="submit" class="submit-button btn btn-success" id="upload-button">Upload/Save</button>
                    <button class="submit-button btn btn-warning" id="admin-mode-cancel">Cancel</button>

                  </form> 
            </div>

            <div class="col-md-8">

            
              <div id="cat">
                  <h2 id="catName"></h2>
                  <h3>Total clicks are: <span id="cat-count"></span></h3>
                  <img id="cat-image" src="" alt="cute cat" class="img-fluid">
              </div>

        
            </div> <!--col-md-10-->

          </div><!--row-->

        </div><!--col-md-12-->
      </div><!--row-->
    </div> <!--container-->

    <?php include 'footer-bootstrap.php'; ?>

    <script type="text/javascript">


    $(function(){

      


      // This is the constructor for the Cat Model - trying to add new cats
      function Cat(name, imgSrc, clickCount) {
        this.name = name;
        this.imgSrc = imgSrc;
        this.clickCount = 0; 
      };

      //hard coded the first new cat 

      var fluffy = new Cat ("Fluffy","https://s-media-cache-ak0.pinimg.com/736x/1d/f0/27/1df027c08f92b225f3dadbf347d6df45.jpg");

      
      var model = {

        currentCat: null,

        allCats: [

          {
            name : "Meow", 
            imgSrc : "kittens/0002.png",
            clickCount : 0
          },

          { 
            name : "MoMo", 
            imgSrc : "kittens/0003.png",
            clickCount : 0
          },

          { 
            name : "Charlie", 
            imgSrc : "kittens/0004.png",
            clickCount : 0
          },
          {
            name : "Gavin", 
            imgSrc : "kittens/0005.png",
            clickCount : 0
          },

          {
            name : "Cookie", 
            imgSrc : "kittens/0006.png",
            clickCount : 0
          },

          {
            name : "Lewis", 
            imgSrc : "kittens/0007.png",
            clickCount : 0
          }

        ]
      



      }; //model closure





      


     /* ======= Octopus ======= */

var octopus = {

    init: function() {
        // set our current cat to the first one in the list
        model.currentCat = model.allCats[0];

        // tell our views to initialize
        catListView.init();
        catView.init();
    },

    getCurrentCat: function() {
        return model.currentCat;
    },

    getCats: function() {
        return model.allCats;
    },

    // set the currently-selected cat to the object passed in
    setCurrentCat: function(cat) {
        model.currentCat = cat;
    },

    // increments the counter for the currently-selected cat
    incrementCounter: function() {
        model.currentCat.clickCount++;
        catView.render();
    }, 

    editCats: function() {
      adminModeForm.style.visibility = "hidden"; // closes the admin panel area after clicking save
      catListView.init();
    }
};

 // Currently stores the new cat name and image in the scope and displays n the console.log
     var uploadCatBtn = document.getElementById('upload-button');

     uploadCatBtn.addEventListener("click", function(){
        var addCatName = document.getElementById('new-cat-name').value   
        var addCatImage = document.getElementById('new-cat-image').value   
        

        var newCat = new Cat (addCatName, addCatImage);
        model.allCats.push(newCat);

        catListView.init();
     }); 

      //store the HTML Elements for the event listener to call
      var buttonElem = document.getElementById('admin-mode');
      var cancelButtonElem = document.getElementById('admin-mode-cancel');

      var adminModeForm = document.getElementById('admin-mode-form');



      adminModeForm.style.visibility = "hidden";

      buttonElem.addEventListener("click", function(){
        adminModeForm.style.visibility = "visible";
        var cat = octopus.getCurrentCat();


        cancelButtonElem.addEventListener("click", function(){
        adminModeForm.style.visibility = "hidden";
      });

      });

    

      model.allCats.push(fluffy);


/* ======= View ======= */

var catView = {

    init: function() {
        // store pointers to our DOM elements for easy access later
        this.catElem = document.getElementById('cat');
        this.catNameElem = document.getElementById('catName');
        this.catImageElem = document.getElementById('cat-image');
        this.countElem = document.getElementById('cat-count');

        this.catNameElemChange = document.getElementById('cat-name-edit');
        this.catImageElemChange = document.getElementById('cat-image-edit');
        this.saveBtn = document.getElementById('save-button');

        // on click, increment the current cat's counter
        this.catImageElem.addEventListener('click', function(){
            octopus.incrementCounter();
        });

        // render this view (update the DOM elements with the right values)
        this.render();
    },

    render: function() {
        // update the DOM elements with values from the current cat
        var currentCat = octopus.getCurrentCat();
        this.countElem.textContent = currentCat.clickCount;
        this.catNameElem.textContent = currentCat.name;
        this.catImageElem.src = currentCat.imgSrc;
        this.catNameElemChange.value = currentCat.name;
        this.catImageElemChange.value = currentCat.imgSrc;

        this.saveBtn.addEventListener("click", function(){

          var currentCat = octopus.getCurrentCat();

          function updateCat(){

         
         //CODE TO SAVE EDITS ON THE ADMIN FIELDS GOES HERE!!! 
          var catName = document.getElementById('cat-name-edit').value;
          currentCat.name = catName; 
          this.catNameElem = document.getElementById('catName');
          this.catNameElem.textContent = currentCat.name;

          //model.allCats.push(catName);

          var catImageURL = document.getElementById('cat-image-edit').value;
          currentCat.imgSrc = catImageURL; 
          this.catImageElem = document.getElementById('cat-image');
          this.catImageElem.src = currentCat.imgSrc;
         
          
          octopus.editCats();

        } updateCat();

      });


    } 
};



var catListView = {

    init: function() {
        // store the DOM element for easy access later
        this.catListElem = document.getElementById('cat-list');

        // render this view (update the DOM elements with the right values)
        this.render();
    },

    render: function() {
        var cat, elem, i;
        // get the cats we'll be rendering from the octopus
        var cats = octopus.getCats();

        // empty the cat list
        this.catListElem.innerHTML = '';

        // loop over the cats
        for (i = 0; i < cats.length; i++) {
            // this is the cat we're currently looping over
            cat = cats[i];

            // make a new cat list item and set its text
            elem = document.createElement('li');
            elem.innerHTML = '<a href="#">' + cat.name + '</a>'

            // on click, setCurrentCat and render the catView
            // (this uses our closure-in-a-loop trick to connect the value
            //  of the cat variable to the click event function)
            elem.addEventListener('click', (function(newCat) {
                return function() {
                    octopus.setCurrentCat(newCat);
                    catView.render();
                };
            })(cat));

            // finally, add the element to the list
            this.catListElem.appendChild(elem);
        }
    }
};

// make it go!
octopus.init();


      
    }) //final closures




    </script>

    <?php include 'footer.php'; ?>




