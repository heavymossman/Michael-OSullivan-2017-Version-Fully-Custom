<?php include 'header.php'; ?>

    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>Should I buy this item?</h1>
          <p>A simple JS system that will save your life </p>
          <hr>
        </div>
      </div>


       <div class="row">
        <div class="col-md-6 p-2">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Product Name</label>
            <input class="form-control" type="text" id="name">
          </div>
        </div>

        <div class="col-md-6 p-2">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Value of Product</label>
            <input class="form-control" type="text"  id="value">
          </div>
        </div>




      </div>






      <div class="row">
        <div class="col-md-6 p-2">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Monthly income</label>
            <input class="form-control" type="text" id="income">
          </div>
        </div>

        <div class="col-md-6 p-2">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Monthly Outgoings</label>
            <input class="form-control" type="text"  id="outgoing">
          </div>
        </div>




      </div>

      <div class="row">

        <div class="col-md-12">

          <button onclick="myFunction()" class="btn btn-secondary">Try it</button> <button onclick="reload()" class="btn btn-secondary">Refresh</button>

          <h4 class="py-1"><span id="results"></span></h4>
          <br>
          <h4><span id="outcome"></span></h4>

          <hr>

        </div>

      </div>


        <div class="row">

        <div class="col-md-12">

          <h2>How many people in your band?</h2>

           <div class="form-group row">
             <div class="col-md-12"><label for="example-text-input" class="col-2 col-form-label">Number of people in your band</label>
           <input class="form-control" type="text"  id="band"></div>
          </div>

          <button onclick="bandCounter()" class="btn btn-secondary">Try it</button> <button onclick="reload()" class="btn btn-secondary">Refresh</button>

          <h4 class="py-1"><span id="band-results"></span></h4>
          <br>
         

        </div>

      </div>

        <div class="row">

        <div class="col-md-12">

          <h2 class="pb-2">Murder Mystery, Who Done It?</h2>

           <div class="row">
              <div class="col-md-6">

                <h3>Select Room</h3>

                  <select class="form-control" id="rooms">
                   <option selected disabled>Please choose one</option>
                    <option>The Ballroom</option>
                    <option>The Gallery</option>
                    <option>The Billiards Room</option>
                    <option>The Dining Room</option>

                  </select>

              </div>
               <div class="col-md-6">

               <h3>Select Suspects</h3>

                  <select class="form-control" id="suspects">
                   <option selected disabled>Please choose one</option>
                    <option>Mr. Parkes</option>
                    <option>Ms. Van Cleve</option>
                    <option>Mrs. Sparr</option>
                    <option>Mr. Kalehoff</option>

                  </select>


              </div>
           </div>

           <div class="py-1">

          <button onclick="whodoneit()" class="btn btn-secondary">Try it</button> <button onclick="reload()" class="btn btn-secondary">Refresh</button>

          </div>

           <h3 class="py-2">Your selection:</h3>

           <p><span id="room-display"></span></p>
           <p><span id="suspects-display"></span></p>

           <p>So it was <strong><span id="whodoneit"></span></strong></p>

        </div>

      </div>

      <div class="row">
        <div class="col-md-12">

          <h1>Countdown Timer for NASA</h1>

          <h2 class="py-1"><span id="counter"></span></h2>
          <hr>
        </div>


      </div>


         <div class="row">
        <div class="col-md-12">

          <h1>jQuery Appending</h1>

          <p id="main"></p>

            <p id="main1"></p>

              <p id="main2"></p>

        </div>


      </div>


      <div class="row">

        <div class="col-md-12">

          <!DOCTYPE html>
<!--

This is the HTML document that you'll use jQuery to modify. To take the quiz, click over to app.js!

-->

    <div class="container">
        <header class="header">
            <nav id="nav" class="navigator">
                <h1>Nav Header</h1>
                <ul class="nav-list">
                    <li class="nav-item"><a>Item #1</a></li>
                    <li class="nav-item active"><a href="#2">Item #2</a></li>
                    <li class="nav-item"><a href="#3">Item #3</a></li>
                    <li class="nav-item"><a href="#4">Item #4</a></li>
                    <li class="nav-item"><a href="#5">Item #5</a></li>
                    <li class="nav-item"><a href="#6">Item #6</a></li>
                </ul>
            </nav>
        </header>
          <div class="actions">
            <button id="my-button">Do it!</button>
            <button id="myAnchor">Anchor!</button>
        </div>
        <div class="articles">
            <input id="input" value="Cool Articles" type="text">
            <h1>Cool Articles</h1>
            <ul class="article-list">
                <li class="article-item">
                    <header>Article #1</header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sapiente officiis beatae, ut consequuntur. Quos minus neque eius, nemo sunt excepturi eveniet amet veritatis voluptatibus corporis ea, blanditiis porro ad!</p>
                    <h3>Sample Image Title here</h3>
                    <img src="http://placehold.it/350x150" alt="Placeholder Image">
                    <ul>
                        <li class="bold">James</li>
                        <li>Lily</li>
                        <li>Harry</li>
                    </ul>
                    <p>Magnam ex autem doloremque, tempore mollitia atque aut delectus corporis rem similique voluptates omnis reiciendis vitae impedit exercitationem unde quaerat, doloribus voluptatibus molestias et veritatis sed optio repudiandae? Provident, voluptates.</p>
                </li>
                <li class="article-item featured">
                    <header>Article #2</header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil animi ipsum, incidunt mollitia modi cum, eum ex doloremque rerum quod, maiores quisquam, enim quam unde cumque! Quam, doloremque. Voluptatum, maxime!</p>
                    <p>Numquam et quae, quasi. Reiciendis nemo mollitia eveniet alias, debitis facere atque excepturi et beatae laudantium commodi optio unde amet vitae libero quas cupiditate, nam porro minus. Quisquam, odit non.</p>
                </li>
                <li class="article-item">
                    <header>Article #3</header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ratione, cum doloremque molestias labore amet at dicta reiciendis repudiandae fuga atque adipisci pariatur distinctio suscipit perferendis provident, facere ad aut.</p>
                    <p>Temporibus sapiente odio eveniet enim perferendis maxime, ratione, accusantium suscipit alias, soluta architecto culpa pariatur. Cupiditate nam eaque dolore voluptatem necessitatibus corporis iusto adipisci, dignissimos error, vitae quam, aliquid eius!</p>
                </li>
                <li class="article-item">
                    <header>Article #4</header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate commodi, est soluta eos voluptates eum! Modi sit quia ipsum fugiat nesciunt, assumenda deleniti consequuntur molestias reprehenderit. Voluptate corporis illum nam?</p>
                    <p>Quia, omnis. Quasi necessitatibus, ducimus, deserunt ipsa, reprehenderit sit a dolore fuga placeat magni culpa ipsam quas id aut veniam rerum pariatur enim harum recusandae quo odio consequuntur. Maxime, aperiam.</p>
                </li>
            </ul>
        </div>
  
        </div>


      </div>



      <div>
    <div>
      <div id='family1'>
        <h1>Family1</h1>
        <div id='alex'>
          <h2>Alex</h2>
          <div id='jane'>
            <h3>Jane</h3>
          </div>
        </div>
        <div id='taylor'>
          <h2>Taylor</h2>
          <div id='bob'>
            <h3>Bob</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row py-1">

    <div class="col-md-12">

      <h1 class="py-1">HTML 5 Canvass Games + Meme Generator</h1>

      <div class="row">

        <div class="col-md-12">

        <div class="row"><canvas width="500" height="500" id="d"></canvas></div>


  <div>
    <input type="file" id="file" />  
  </div>
  <div id="image-container">
    <canvas width="500" height="500" id="c"></canvas>
    <div>
      <span>Top Line:</span><br/>
      <input id="topLineText" type="text"><br/>
      <span>Bottom Line:</span><br/>
      <input id="bottomLineText" type="text"><br/>
      <button id="saveBtn">Save</button>
    </div>
  </div>

  </div><!--col-md-12-->

  </div><!--row-->


     <!-- <canvas id="d" width=500px height="400px"></canvas> -->



    </div>


  </div>


  
  </div>


    </div>
    </div></div>
    <!--container-->


     <?php include 'footer-bootstrap.php'; ?>
    


    <script type="text/javascript">

    //Even Odd Function 

    var number = 19;

      if (number % 2 === 0) {
          console.log("even")
      } else {
          console.log("odd")
      }


    function reload(){
      // simple function to allow the refresh button to reload the page
      location.reload();
    }

    function myFunction() {

    var name = document.getElementById("name").value;

    var value = document.getElementById("value").value;
      
    var income = document.getElementById("income").value;

    var outgoings = document.getElementById("outgoing").value;

    var totalCash = income - outgoings;



    if (totalCash >= value) {
      document.getElementById("outcome").innerHTML = "Yes you can afford to buy this" ;
    } else  {
      document.getElementById("outcome").innerHTML = "No this is too expensive" ;
    }


  //    document.getElementById("results").innerHTML = "Product Name: " + name + ", Cost £" + value + " your income £" + income + ", your outgoings £" + outgoings + " ";

  }



    </script>

    <script>

    function bandCounter() {

      var state0 = "not a group";
      var state1 = "solo";
      var state2 = "duet";
      var state3 = "trio";
      var state4 = "quartet";
      var state5 = "a large group";

      var musicians = document.getElementById("band").value;

      if (musicians > 4){
        document.getElementById("band-results").innerHTML = "Your band is classified: " + state5;
      } else if (musicians == 1) {
        document.getElementById("band-results").innerHTML = "Your band is classified: " + state1;
      }
      else if (musicians == 2) {
        document.getElementById("band-results").innerHTML = "Your band is classified: " + state2;
      }
      else if (musicians == 3) {
        document.getElementById("band-results").innerHTML = "Your band is classified: " + state3;
      }
      else if (musicians == 4) {
        document.getElementById("band-results").innerHTML = "Your band is classified: " + state4;
      }
      else {
        document.getElementById("band-results").innerHTML = "Your band is classified: " + state0;
      }

    }

    </script>

    <script>

    function whodoneit(){

        var room = document.getElementById('rooms').value;
        var suspect = document.getElementById('suspects').value;

        var suspectLocation = room + " " + suspect;

        var weapon = "";
        var solved = false;

        if (room === "The Dining Room" && suspect === "Mr. Parkes") {
            weapon = "knife";
            solved = true;
        } else if (room === "The Ballroom" && suspect === "Mr. Kalehoff") {
            weapon = "poison";
            solved = true;
        } else if (room === "The Gallery" && suspect === "Ms. Van Cleve") {
            weapon = "trophy";
            solved = true;
        } else if (room === "The Billiards Room" && suspect === "Mrs. Sparr") {
            weapon = "pool stick";
            solved = true;
        }
         else {
            weapon = "fucks knows";
            solved = false;
        }


        if (solved) { // same as (solved === true)
          document.getElementById("whodoneit").innerHTML = suspect + " did it in the " + room + " with the " + weapon;
        }

        else {
          document.getElementById("whodoneit").innerHTML = "Murder remains a mystery, " +  suspect + " was in a different room, and could not have possibly committed the murder";
        }

      }

    </script>

    <script type="text/javascript">
      
      var balance = -100.00;
      var checkBalance = true;
      var isActive = true;

      if (checkBalance === true && isActive === true && balance > 0) {
          console.log("Your balance is £" + balance + ".")
      }

      else if (checkBalance === true && isActive === false) {
          console.log("Your account is no longer active")
      }

      else if (checkBalance === true && isActive === true && checkBalance === 0) {
        console.log("Your account is empty")
      }
      else if (checkBalance === true && isActive === true && balance < 0) {
        console.log("Your balance is negative. Please contact the bank")
      }

      else {
        console.log("Have a nice day")
      }


    </script>

    <script type="text/javascript">
      
      var flavor = "vanilla";
      var vessel = "cone";
      var toppings = "peanuts";


      if ((flavor === "vanilla" || flavor === "chocolate") && (vessel === "cone" || vessel === "bowl") && (toppings === "sprinkles" || toppings === "peanuts")) {
        console.log("I'd like two scoops of " + flavor + " ice cream in a " + vessel + " with " + toppings + ".");
      }

      else {
        console.log("Sorry not workking");
      }



    </script>

    <script type="text/javascript">
      
      var shirtWidth = 18;
      var shirtLength = 29;
      var shirtSleeve = 8.47;

      var size = "";

      if ((shirtWidth >= 18 && shirtWidth < 20) && (shirtLength === 28) && (shirtSleeve > 8.13 && shirtSleeve < 8.38)) {
        size = "S";
      } else if ((shirtWidth >= 20 && shirtWidth < 22) && (shirtLength === 29) && (shirtSleeve >= 8.38 && shirtSleeve < 8.63)) {
        size = "M";
      } else if ((shirtWidth >= 22 && shirtWidth < 24) && (shirtLength === 30) && (shirtSleeve >= 8.63 && shirtSleeve < 8.88)) {
        size = "L";
      } else if ((shirtWidth >= 24 && shirtWidth < 26) && (shirtLength === 31) && (shirtSleeve >= 8.88 && shirtSleeve < 9.63)) {
        size = "XL";
      } else if ((shirtWidth >= 26 && shirtWidth < 28) && (shirtLength > 31 && shirtLength <= 33) && (shirtSleeve >= 9.63 && shirtSleeve < 10.13)) {
        size = "2XL";
      } else if ((shirtWidth === 28) && (shirtLength === 34) && (shirtSleeve >= 10.13)) {
        size = "3XL";
      }
      else {
        console.log("N/A")
      }


      console.log(size)



    </script>

    <script type="text/javascript">
        
        var isGoing = true;
        var color = isGoing ? "green" : "red";
        console.log(color);


        /*
       * Programming Quiz - Navigating the Food Chain (3-8)
       *
       * Use a series of ternary operator to set the category to one of the following:
       *   - "herbivore" if an animal eats plants
       *   - "carnivore" if an animal eats animals
       *   - "omnivore" if an animal eats plants and animals
       *   - undefined if an animal doesn't eat plants or animals
       *
       * Notes
       *   - use the variables `eatsPlants` and `eatsAnimals` in your ternary expressions
       *   - `if` statements aren't allowed ;-)
       */

      // change the values of `eatsPlants` and `eatsAnimals` to test your code
      var eatsPlants = false;
      var eatsAnimals = false;




      if (eatsPlants === true && eatsAnimals === false) {
          console.log("herbivore");
      } else if (eatsPlants === true && eatsAnimals === true) {
          console.log("omnivore");
      } else if (eatsPlants === false && eatsAnimals === true) {
          console.log("carnivore");
      } else {
          console.log("undefined");
      }


      var category = (eatsAnimals ? eatsPlants ? "omnivore" : "carnivore" : eatsPlants ? "herbivore" : "undefined") 




      console.log(category);



    </script>


    <script type="text/javascript">

      var option = 4;
      
      if (option === 1) {
        console.log("You selected option 1.");
      } else if (option === 2) {
        console.log("You selected option 2.");
      } else if (option === 3) {
        console.log("You selected option 3.");
      } else if (option === 4) {
        console.log("You selected option 4.");
      } else if (option === 5) {
        console.log("You selected option 5.");
      } else if (option === 6) {
        console.log("You selected option 6.");
      }

      // THIS IS THE SAME AS ABOVE: 

      switch (option) {
        case 1:
          console.log("You selected option 1.");
          break // break stops it from continug to run all the other statements below it, no need for a break on the last line! 
        case 2:
          console.log("You selected option 2.");
          break
        case 3:
          console.log("You selected option 3.");
          break
        case 4:
          console.log("You selected option 4.");
          break
        case 5:
          console.log("You selected option 5.");
          break
        case 6:
          console.log("You selected option 6.");
      }



    </script>

    <script type="text/javascript">

      // AS ABOVE, BUT WHEN YOU DO NOT USE BREAK, AND MAKE USE OF THE WATERFALL EFFECT

      var tier = "nsfw deck";
      var output = "You’ll receive "

      switch (tier) {
        case "deck of legends":
          output += "a custom card, ";
        case "collector's deck":
          output += "a signed version of the Exploding Kittens deck, ";
        case "nsfw deck":
          output += "one copy of the NSFW (Not Safe for Work) Exploding Kittens card game and ";
        default:
          output += "one copy of the Exploding Kittens card game.";
      }

      console.log(output);      




    </script>

    <script type="text/javascript">
      
      /*
       * Programming Quiz: Back to School (3-9)
       */

      // change the value of `education` to test your code
      var education = "an Associate's degree";

      // set the value of this based on a person's education
      var salary;

      switch(education) {
        case "no high school diploma" : 
          salary = 25636;
          break;
        case "a high school diploma" : 
          salary = 35256;
          break;
        case "an Associate's degree" :
          salary = 41496;
          break;
        case "a Bachelor's degree" :
          salary = 59124;
          break;
        case "a Master's degree" :
          salary = 69732;
          break;
        case "a Professional degree" :
          salary = 89960;
          break; 
        case "a Doctoral degree" : 
          salary = 84396;
      }


      console.log("In 2015, a person with " + education + " earned an average of $"+ salary.toLocaleString('en-US') + "/year.")

    </script>
   
    <script type="text/javascript">
      
    //WHILE LOOPS

      var start = 0;

      var x = 10;
      while (x <= 25) {
        console.log('Printing out x = ' + x);
        x = x + 2;
      }

    </script>

    <script type="text/javascript">
      
      var x = 1
      

      while (x <= 20) {

        if (x % 3 === 0) {
          console.log("Julia");
        } else if (x % 5 === 0) { 
          console.log("James");
        } else if (x % 15 === 0){
          console.log("JuliaJames");
        } else {
          console.log(x);
        }
        x++; 
      }



    </script>

    <script type="text/javascript">
      
      var num = 99;

      while (num > 0) {

        if (num === 1){
          console.log(num + " bottle of juice on the wall! " + num + " bottle of juice! Take one down, pass it around... " + (num-1) + " bottles of juice on the wall!");
        } else if (num === 2){
          console.log(num + " bottles of juice on the wall! " + num + " bottles of juice! Take one down, pass it around... " + (num-1) + " bottle of juice on the wall!");
        } else {
          console.log(num + " bottles of juice on the wall! " + num + " bottles of juice! Take one down, pass it around... " + (num-1) + " bottles of juice on the wall!");
        }
         
      num--;
      }

      




    </script>

    <script type="text/javascript">
      
    /*  var count = 60, timer = setInterval(function() {
          $("#counter").html("T-" + count--);
          if(count == 1) clearInterval(timer);


      }, 1000);  */

        

          var count1 = 60, timer = setInterval(function() {
          
          if (count1 === 0) {
            clearInterval(timer);
            document.getElementById("counter").innerHTML = "Solid rocket booster ignition and liftoff! (T-minus " + count1 + " seconds";
          } else if (count1 === 50) {
            document.getElementById("counter").innerHTML = "Orbiter transfers from ground to internal power (T-minus " + count1 + " seconds";
          } else if (count1 === 31) {
            document.getElementById("counter").innerHTML = "Ground launch sequencer is go for auto sequence start (T-minus " + count1 + " seconds";
          } else if (count1 === 16) {
            document.getElementById("counter").innerHTML = "Activate launch pad sound suppression system (T-minus " + count1 + " seconds";
          } else if (count1 === 10) {
            document.getElementById("counter").innerHTML = "Activate main engine hydrogen burnoff system (T-minus " + count1 + " seconds";
          } else if (count1 === 6) {
            document.getElementById("counter").innerHTML = "Main engine start (T-minus " + count1 + " seconds";
          } else {
            document.getElementById("counter").innerHTML = "T-" + count1 + " seconds";
          }
          count1--;
      },1000);



    </script>

      <script type="text/javascript">

     /*
      
       var count = 60, timer = setInterval(function() {
          
          if (count == 0) {
            clearInterval(timer);
            console.log("Solid rocket booster ignition and liftoff! (T-minus " + count + " seconds)");
          } else if (count === 50) {
            console.log("Orbiter transfers from ground to internal power (T-minus " + count + " seconds)");
          } else if (count === 31) {
            console.log("Ground launch sequencer is go for auto sequence start (T-minus " + count + " seconds)");
          } else if (count === 16) {
           console.log("Activate launch pad sound suppression system (T-minus " + count + " seconds)");
          } else if (count === 10) {
            console.log("Activate main engine hydrogen burnoff system (T-minus " + count + " seconds)");
          } else if (count === 6) {
            console.log("Main engine start (T-minus " + count + " seconds)");
          } else {
            console.log("T- " + count + " seconds");
          }
          count--;
      },1000);


        */

    </script>

    <script type="text/javascript">
      
    //NESTED LOOPS RUDE BOY

    for (var x = 0; x < 5; x++) {
      for (var y = 0; y < 3; y++) {
        console.log(x + "," + y);
      }
    }

    /*

    x++ or ++x // same as x = x + 1 
    x-- or --x // same as x = x - 1
    x += 3 // same as x = x + 3
    x -= 6 // same as x = x - 6
    x *= 2 // same as x = x * 2
    x /= 5 // same as x = x / 5

    */

    </script>

    <script type="text/javascript">
      
      var x = 9;
      while (x >= 1) {
        console.log("hello " + x);
        x = x - 1;
      }


    </script>

    <script type="text/javascript">
      

   /*   var x = 9;
      while (x >= 1) {
        console.log("hello " + x);
        x = x - 1;
      } */


      for (var x = 9; x >= 1; x--) {
        console.log("hello " + x);
      }


    </script>

    <script type="text/javascript">
      
      for (var x = 5; x < 10; ++x) {
      console.log(x);
      }



    </script>

    <script type="text/javascript">
      
    for (var k = 0; k < 20; k++) {
            console.log(k);
    }


    </script>

    <script type="text/javascript">

    var solution = 3

    var factorial = function(n) {
      if(n == 0) {
          return 0
      } else {
          number = 1;
          for(i = 1; i <= n; i++) {
              number *= i;
          }
          return number;
      }
    }
     
    console.log(factorial(solution));
        

  /* for (var s = 12; s >= 1; s--) {
      for (var t = 12; t >= 1; t--) {
        console.log(s + " " + t);
      }  
    }

  */




    </script>

    <script type="text/javascript">
      
      // Factorial as above but with a FOR LOOP , this will do the maths for 12x11x10x9x8x7x6x5x4x3x1

      var solution = 12;

      for (i = 11; i > 1; i--){
        solution *= i;
      }

      console.log(solution);


    </script>

    <script type="text/javascript">
      
    /*
 * Programming Quiz: Find my Seat (4-8)
 * 
 * Write a nested for loop to print out all of the different seat combinations in the theater.
 * The first row-seat combination should be 0-0 
 * The last row-seat combination will be 25-99
 * 
 * Things to note: 
 *  - the row and seat numbers start at 0, not 1
 *  - the highest seat number is 99, not 100

 */


    for (var x = 9; x >= 1; x--) {
        console.log("hello " + x);
      }

      for (var r = 0; r <= 25; r++ ) {
        for (var s = 0; s <= 99; s++) {
          console.log(r + "-" + s)
        }
      }




    </script>


    <script type="text/javascript">
      
      function findAverage(x, y) {
        var answer = (x + y) / 2;
        return answer;
      }

      var avg = findAverage(5, 9);

      console.log(avg);



      function laugh(){
        var content = '"hahahahahahahahahaha!"'
        return content;
      }


      console.log(laugh());


    </script>

    <script type="text/javascript">
     
    function laugh(num) {
      var message = "";
      for (var i = 0; i < num; i++) {
        message += "ha";
      }
      message += "!";
      return message;
    }

    console.log(laugh(3));


    function sleep() {
      console.log("I'm sleepy!");
      return "zzz";
      return "snore";
    }

    sleep();

      function square(x) {
        return x * x;
      }

      function subtractFour(x) {
        return square(x) - 4;
      }

      console.log(subtractFour(5));

    </script>

    <script type="text/javascript">

      
        function makeLine(length) {
          var line = "";
          for (var j = 1; j <= length; j++) {
            line += "* "
          }
          return line + "\n";
        }

        function buildTriangle(max) {

          var x = 1;
          var xline = "";
          while (x <= max) {
            xline += makeLine(x);
            x++
          }
          return xline;
        }

        console.log(buildTriangle(10));

        var cry = function crying(){
          var i = "boohoo!";
          console.log(i);
          return i;

        }

        cry();

        function emotions(myString, myFunc) {
            console.log("I am " + myString + ", " + myFunc(2));
        }

        emotions("happy",  function(num) {
              var message = "";
              for (var i = 0; i < num; i++) {
                message += "ha";
              }
              message += "!";
              return message;
            });

    </script>

    <script type="text/javascript">
      
    // ARRAYS BABY!!!!

    var donuts = ["glazed", "chocolate frosted", "boston cream", "powdered", "sprinkled", "maple", "coconut", "jelly"];


    donuts[2] = "cinnamon twist";
    donuts[4] = "salted caramel";
    donuts[5] = "shortcake eclair";

    console.log(donuts);

    var udaciFamily = ["Julia", "James", "Michael"]; 

    console.log(udaciFamily);

    var captain = "Mal";
    var second = "Zoe";
    var pilot = "Wash";
    var companion = "Inara";
    var mercenary = "Jayne";
    var mechanic = "Kaylee";

    var crew = [captain, second, pilot, companion, mercenary, mechanic]; 

    console.log(crew);


    var prices = [1.23, 48.11, 90.11, 8.50, 9.99, 1.00, 1.10, 67.00];

    prices[0] = 5;
    prices[2] = 5;
    prices[6] = 5;

    console.log(prices)

    var donuts = ["glazed", "strawberry frosted", "powdered", "Boston creme"];

    donuts.pop();
    donuts.pop();
    donuts.pop();
    donuts.push("maple walnut");
    donuts.pop();
    donuts.push("sprinkled");

    console.log(donuts);


    </script>

    <script type="text/javascript">
      
      var rainbow = ["Red", "Orange", "Blackberry", "Blue"];

      rainbow.splice(2, 1); //removes blackberry

      rainbow.splice(2, 0, "Yellow", "Green"); // adds yellow and green in the third position or 2

      rainbow.push("Purple"); //pushes purples to the end of the array



      console.log(rainbow);


    </script>

    <script type="text/javascript">

    var team = ["Oliver Wood", "Angelina Johnson", "Katie Bell", "Alicia Spinnet", "George Weasley", "Fred Weasley", "Harry Potter"];

    function hasEnoughPlayers(team) {

      if (team.length >= 7) {
        return true;
      } else {
        return false;
      }
    }


    console.log(hasEnoughPlayers(team));

    var sortMe = [2, 1, 10, 7, 6];

    sortMe.sort(); 

    console.log(sortMe);



    </script>

    <script type="text/javascript">
      
      var test = [12, 929, 11, 3, 199, 1000, 7, 1, 24, 37, 4, 19, 300, 3775, 299, 36, 209, 148, 169, 299, 6, 109, 20, 58, 139, 59, 3, 1, 139];

      var newTest = []; 

      test.forEach(function(currentValue, index, array) {

        if (currentValue % 3 === 0) {
          // test if the value in the array is divisible by 3
            currentValue += 100; 
            // adds 100 to each array element that is divisible by three
            array.splice(index, 1, currentValue); 
            // push new values back into the array
        } 
      }); 

    console.log(test);

    var myArray = [1,2,3,4,5]; 

    myArray.forEach(function(anything){

      console.log(anything); 
    });


    </script>

    <script type="text/javascript">
      
    var myArray = [1,2,3,4,5]; 

    var newArray = myArray.map(function(elem) {
      elem = elem + 100;
      return elem;
    });

    console.log(newArray)



    </script>


    <script type="text/javascript">
      
    //Add 15% tip or tax to value in array

    amountTax = 0.15;


    var bills = [50.23, 19.12, 34.01, 100.11, 12.15, 9.90, 29.11, 12.99, 10.00, 99.22, 102.20, 100.10, 6.77, 2.22];

    var totals = bills.map(function(vat){
      vat = (vat * 0.15) + vat; 
      return Number(vat.toFixed(2)); //toFixed rounds up to two number of decimal places in the (1) or (2) () will return no decimansl and NUmber() returns the string as a integar 
    }); 

    console.log(totals);


    </script>

    <script type="text/javascript">
        
        var numbers = [
                        [ 243, 12, 23, 12, 45, 45, 78, 66, 223, 3 ],
                        [ 34, 2, 1, 553, 23, 4, 66, 23, 4, 55 ],
                        [ 67, 56, 45, 553, 44, 55, 5, 428, 452, 3 ],
                        [ 12, 31, 55, 445, 79, 44, 674, 224, 4, 21 ],
                        [ 4, 2, 3, 52, 13, 51, 44, 1, 67, 5 ],
                        [ 5, 65, 4, 5, 5, 6, 5, 43, 23, 4424 ],
                        [ 74, 532, 6, 7, 35, 17, 89, 43, 43, 66 ],
                        [ 53, 6, 89, 10, 23, 52, 111, 44, 109, 80 ],
                        [ 67, 6, 53, 537, 2, 168, 16, 2, 1, 8 ],
                        [ 76, 7, 9, 6, 3, 73, 77, 100, 56, 100 ]
                    ];



         for (var row = 0; row < numbers.length; row++) {
                for (var colum = 0; colum < numbers[row].length; colum++) {

                    if (numbers[row][colum] % 2 === 0) {
                      numbers[row][colum] = "Even";
                    } else {
                      numbers[row][colum] = "Odd";
                    }

                  console.log(numbers[row][colum]);
                }
              }
  


    </script>

    <script type="text/javascript">
      
    // OBJECTS

        var umbrella = {
        color: "pink",
        isOpen: true,
        open: function() {
            if (umbrella.isOpen === true) {
                return "The umbrella is already opened!";
            } else {
                umbrella.isOpen = true;
                return "Julia opens the umbrella!";
            }
        },
        isOpen: false,
        close: function() {
            if (umbrella.isOpen === false) {
                return "The umbrella is already closed!";
            } else {
                umbrella.isOpen = false;
                return "Julia closes the umbrella!";
            }
        },
      };

      var breakfast = {
        name: "The Lumberjack",
        price: 9.95,
        ingredients : [
          "eggs",
          "sausage",
          "toast",
          "hashbrowns",
          "pancakes"
        ]
      }

      console.log(breakfast);



    </script>

    <script type="text/javascript">
      
    //OBJECTS AND YA BANK! 

    /*
 * Programming Quiz: Bank Accounts 1 (7-3)
 */

      var savingsAccount = {
          balance: 1000,
          interestRatePercent: 1,
          deposit: function addMoney(amount) {
              if (amount > 0) {
                  savingsAccount.balance += amount;
              }

          },
          withdraw: function removeMoney(amount) {
              var verifyBalance = savingsAccount.balance - amount;
              if (amount > 0 && verifyBalance >= 0) {
                  savingsAccount.balance -= amount;
              }
          },
          printAccountSummary: function () {
              var message = "Welcome!" + " \n" + "Your balance is currently $" + savingsAccount.balance + " and your interest rate is " + savingsAccount.interestRatePercent + "%.";
              return message;
          },
      };

      console.log(savingsAccount.printAccountSummary());




    </script>

    <script type="text/javascript">
      
    var facebookProfile = {

      name: "heavymossman",
      friends: 637, 
      messages: ["Hello, I am posting on my soap box", "Hello this is another post about the end of times", "I am so negative on faecbook, here is a kitten", "Do not blame islam!"],
      postMessage: function newMessage(add){
        var newMessage = facebookProfile.messages;
        newMessage.push(add);
        return newMessage;
      },
      deleteMessage: function delMessage(del){
        var delMessage = facebookProfile.messages;
        delMessage.splice(del, 1);
        return delMessage;     
      },
      addFriend: function newFriend() {
        var newFriend = facebookProfile.friends;
        facebookProfile.friends = newFriend + 1
        return facebookProfile.friends;
      },
      removeFriend: function lessFriend() {
        var lessFriend = facebookProfile.friends;
        facebookProfile.friends = lessFriend - 1
        return facebookProfile.friends;
      },
    };

    console.log(facebookProfile.removeFriend());


    </script>

    <script type="text/javascript">
      
      var donuts = [
        { type: "Jelly", cost: 1.22 },
        { type: "Chocolate", cost: 2.45 },
        { type: "Cider", cost: 1.59 },
        { type: "Boston Cream", cost: 5.99 }
      ];

      donuts.forEach(function(donut){

        var newDonut = "";

        newDonut = newDonut + donut.type + " donuts cost $" + donut.cost + " each";
      
        console.log(newDonut)

      });


    </script>

    <script type="text/javascript">
      
    //jQUERY

    var awesomeThoughts = "My name is Michael and I am AWESOME!"; 

    var funThoughts = awesomeThoughts.replace("AWESOME", "FUN!"); // replaces the word awesome with fun in the previous var

    $("#main").append(funThoughts);

    console.log(funThoughts);


    var myArray = ["Awesomeness", "Bracing for impact", "Hiberating", "Bodypopping",]

    $("#main1"). append(myArray[2]);

    // This will increment the last item of the array by 1

    var myNumberArray = [2,3,4,5,6,7,8,1]; 


    var newNumbArray = myNumberArray[myNumberArray.length - 1] + 1;


    console.log(newNumbArray);


    </script>

    <script type="text/javascript">
      
    var name = "cAmEROn PittMAN";

    var finalname = name.split(" "); 

    var firstName = finalname[0].toLocaleLowerCase();

    firstLetter = firstName[0].toUpperCase(); 

    firstName = firstName.substr(1);

    var finalFirstName = firstLetter + firstName;

    var lastName = finalname[1].toUpperCase();

    var finalName = finalFirstName + " " + lastName;

    console.log(finalName);



    </script>

    <script type="text/javascript">
      
      var name = "AlbERt EINstEiN";

      function nameChanger(oldName) {
          var finalName = oldName;
          
          finalName = name.split(" ");

          var firstName = finalName[0].toLocaleLowerCase();
          
          var firstLetter = firstName[0].toUpperCase(); 

          firstName = firstName.substr(1); // the rest of the word minus the first string or capital

          var finalFirstName = firstLetter + firstName;

          var lastName = finalName[1].toUpperCase();

          finalName = finalFirstName + " " + lastName;
          
          console.log(finalName)
          // Don't delete this line!
          return finalName;
      };

      // Did your code work? The line below will tell you!
      console.log(nameChanger(name));




    </script>

    <script type="text/javascript">
      
    // BETTER SOLUTION TO THE ABOVE: 

    var name = "michael OSUllivan";

    function nameChanger(oldName) {
    
      var finalName = oldName;

      var names = oldName.split(" ");
      names[1] = names[1].toUpperCase();
      names[0] = names[0].slice(0,1).toUpperCase() + names[0].slice(1).toLowerCase();
      finalName = names.join(" "); //array.join([chars]) lets us put array elements together into a single string. Each element will be separated by the optional chars. In this case, we want a space between the two names, so we made the chars a single space, " ". With that, we've joined "Albert" and "Einstein" to form "Albert EINSTEIN"!

      return finalName;
    }

    console.log(nameChanger(name));


    </script>

    <script type="text/javascript">
      
      var featuredArticle, thirdArticle; 

     // featuredArticle = $("li").removeClass("featured");

    //  featuredArticle = $( "li" ).toggleClass("featured", false)

        featuredArticle = $("li.featured").next().addClass("featured"); // this takes the first li item called features and stores the next ite, below, then adds the class features to hte item below it

        thirdArticle = $("li.featured").prev().toggleClass("featured", false); // this line then stores the prevous list item, and remove the class features from it. 


      console.log(featuredArticle)

    </script>


    <script type="text/javascript">

    var fixHeader, firstitem, link; 

    fixHeader = $('.nav-list') //select the nav items

    firstitem = fixHeader.children().first(); //selects the first item of the children  of the nav

    link = firstitem.find('a'); //find the links

    link.attr('href', '#1') //then change the attribute of hte link and add in href adn #1

    

    </script>

    <script type="text/javascript">
      
    //turn all Aritcle list titles to 20px using jQuery

    var articleItems, articleTitles; //set empty vars

    articleItems = $('.article-item'); // assign the items from HTML into a variable

    articleTitles = articleItems.find('header') // look for the header tags in our variable

    articleTitles.css('font-size', '40px'); // edit the css of the header tags inline. 


    </script>

    <script type="text/javascript">
      
      //Change text in input field, and watch it update the H1 tags below

      $('#input').on('change', function() {
          var val;
          val = $('#input').val(); 

          var h1 = $("div"); 

          h1 = h1.find('h1');

          h1.text(val); //this updates the content of the HTML tag with the contents from the update variable - very cool. 

          console.log(h1)
      });



    </script>

    <script type="text/javascript">

    // find the ul from the first item and then remove it
      
      var articleItems;

      articleItems = $('.article-item').find('ul').remove();

      console.log(articleItems); 

    </script>


    <script type="text/javascript">
      
    //ADD DOM ELEMENTS

   var family2 = $('<div id=family2><h1>Family2</h1></div>').insertAfter("#family1"); // this takes the first part of the arugment (HTML) and then inserts it after the next elements, so like reverse jQuery process

   family2.append('<div id="bruce"><h2>Bruce</h2></div>');

   $('#bruce').append('<div id="madison"><h3>Madison</h3></div>');

   $('#bruce').append('<div id="hunter"><h3>Hunter</h3></div>');

    </script>

    <script type="text/javascript">

    // This script counts the total characters within a p tag and then displays the total amount of characters in that paragraph at the end. 

      function someFunction() {

      var para, somethingelse;

      para = $('p').each(function(){

      var length = $(this).text().length; 

      length = "<em>" + " " + length + " characters are in this paragraph" + "</em>"; // just adding a space in front fo the final number

      var dispay = $(this).append(length);

    })

    }

    $(someFunction) // the above function will make sure thA function passed into the jQuery object runs on document.ready, which occurs after the DOM has been loaded.



    </script>

    <script type="text/javascript">

    /*
For this quiz, use jQuery to set up an event listener. Your event listener must:
    1. listen to the #my-button element
    2. listen for a `click` event
    3. perform the following actions when the button is clicked:
        a. remove the #my-button element from the DOM
        b. add the `success` class to the body
*/
      
      $("#my-button").click(function(){
        $("#my-button").remove();

        $('body').addClass("success");

      });

      //Clicking on the #myAnchor link will log the message to the console, but it will also navigate to that element's href attribute - potentially redirecting to a new page. The event object can be used to prevent the default action:

      $( '#myAnchor' ).on( 'click', function( evt ) {
          evt.preventDefault();
          console.log( 'You clicked a link!' );
      });

    </script>

    <script type="text/javascript">
        
      // THE KEYWORD THIS!


      var fn = function(a,b){

        output = a + b
        return output;

      }

      console.log(fn(1,1))


    </script>

    <script type="text/javascript">
      
    var fn = function(one, two) {
      console.log(this, one,two); 
    }; 

    var r={}, g={}, b={};

    console.log(fn(g,b))





    </script>


     <script type="text/javascript">
      
      //HTML 5 Meme Generator and Game



      var d = document.querySelector("#d"); 
      var ctx = d.getContext("2d");

      ctx.fillStyle = "red";

      ctx.strokeRect(50,50,100,100); // so the row arguments are where x where y then size, which can be either numbers or variables


      ctx.beginPath(); 
      ctx.moveTo(75, 75);
      ctx.lineTo(125,125);

      ctx.moveTo(125, 125);
      ctx.lineTo(125,75);
      ctx.lineTo(75,75);

      ctx.fill()// this will draw the movements we maede with the move to and line to functions

      //ctx.fill(), ctx.stroke() , ctx.strokeRect(), ctx.fillRect(), scale(x,y) multiplies the x and y values by a given factor so ctx.scale(2,3); translate(x,y) moves all subsequent draw commands by x number of pixels on horizontally and y pixels vertically.

      /* ctx.rotate(angleRadians) rotates an object a certain number of radians (generally) about its center. You may have learned about radians in school but here's a handy formula to convert a value from degrees to radians.

      radians = degrees * (Math.PI/180)

      Don't ask us why everything in Computer Graphics uses radians. We have no idea. :) */

      ctx.fillStyle = "blue";
      ctx.fillRect(0,0,50,50);

      // Save state with blue fill
      ctx.save();
      ctx.fillStyle = "#00FF00"; //can use hex or the names
      ctx.fillRect(100,100,20,20);
      // Restore to blue fill
      ctx.restore();

      ctx.fillRect(200,10,20,20);

      //strokeStyle
      // fillStyle, font, globalAlpha, lineWidth, lineCap, lineJoin, miterLimit, shadowOffsetX, shadowOffsetY, shadowBlur, shadowColor,globalCompositeOperation, textAlign, textBaseline


      ctx.font = '36px impact';
      ctx.textAlign = "center";

      ctx.fillStyle = "white";
      ctx.fillText("CANVAS MEMES!", d.width / 2, 200);//ctx.strokeText()
      ctx.fillStyle = "black";
      ctx.lineWidth = 3;
      ctx.strokeText('CANVAS MEMES!', d.width / 2, 200); //c.width / 2 places it exactly in the middle, so half of hte total length

      </script>


      <script type="text/javascript">
        
      //THE MEME GENERATER 

      var c = document.querySelector('#c');
      var ctx = c.getContext("2d");

      ctx.fillStyle = "grey";
      ctx.fillRect(0,0,c.width,c.height);


        function textChangeListener (evt) {
      var id = evt.target.id;
      var text = evt.target.value;
      
      if (id == "topLineText") {
        window.topLineText = text;
      } else {
        window.bottomLineText = text;
      }
      
      redrawMeme(window.imageSrc, window.topLineText, window.bottomLineText);
    }
    
    function redrawMeme(image, topLine, bottomLine) {


      // Get Canvas2DContext
      
      if (image != null){
      ctx.drawImage(image, 0, 0, c.width, c.height); // this draws the image object to the canvass and displays it based on the html paramenters
      }

      topLine = $("#topLineText").val();
      bottomLine = $("#bottomLineText").val();

      //Style of writing

      ctx.font = '30px impact';
      ctx.textAlign = "center";

    if (topLineText != null) {
      ctx.fillStyle = "white";
      ctx.fillText(topLine, c.width / 2, 40);//ctx.strokeText()
      ctx.fillStyle = "black";
      ctx.lineWidth = 3;
      ctx.strokeText(topLine, c.width / 2, 40); //c.width / 2 places it exactly in the middle, so half of hte total length
      }

    if (bottomLine != null) {
      ctx.fillStyle = "white";
      ctx.fillText(bottomLine, c.width / 2, 480);//ctx.strokeText()
      ctx.fillStyle = "black";
      ctx.lineWidth = 3;
      ctx.strokeText(bottomLine, c.width / 2, 480); //c.width / 2 places it exactly in the middle, so half of hte total length
    }
     


    }
    
    function saveFile() {
      window.open(document.querySelector('#c').toDataURL());
    }
    
    function handleFileSelect(evt) {
      var canvasWidth = 500;
      var canvasHeight = 500;
      var file = evt.target.files[0];
      
      
      
      var reader = new FileReader();
      reader.onload = function(fileObject) {
        var data = fileObject.target.result;
        
        // Create an image object
        var image = new Image();
        image.onload = function() {
          
          window.imageSrc = this;
          redrawMeme(window.imageSrc, null, null);
        }
        
        // Set image data to background image.
        image.src = data;
        console.log(fileObject.target.result);
      };
      reader.readAsDataURL(file)
    }
    
    window.topLineText = "";
    window.bottomLineText = "";
    var input1 = document.getElementById('topLineText');
    var input2 = document.getElementById('bottomLineText');
    input1.oninput = textChangeListener;
    input2.oninput = textChangeListener;
    document.getElementById('file').addEventListener('change', handleFileSelect, false);
    document.querySelector('button').addEventListener('click', saveFile, false);




      </script>

    

   


  <?php include 'footer.php'; ?>