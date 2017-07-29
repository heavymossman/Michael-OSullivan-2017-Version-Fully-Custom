<?php include 'header.php'; ?>



  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
          <h1>Simple JS Exercises</h1>
          <p></p>
          <hr>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
         
          <h4>Task One - Display Current Day</h4>
          <p>Write a JavaScript program to display the current day and time in the following format.</p>
          <p>Sample Output : Today is : Friday.</p>
          <p>Current time is : 4 PM : 50 : 22</p>

          <h4>Answer</h4>

          <p>Output: <span id="time"></span></p>

          <button class="btn btn-secondary" onclick="displayTime()">Refresh</button>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Button to Print Page</h4>
          <p></p>
          <button class="btn btn-secondary" onclick="printPage()">Print</button>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Get Current Date</h4>
          <p>Write a JavaScript program to get the current date</p>
          <p>Expected Output : mm-dd-yyyy, mm/dd/yyyy or dd-mm-yyyy, dd/mm/yyyy</p>
          <h4>Answer</h4>
          <p>Output: <strong><span id="dateOutput"></span></strong></p>
          <hr>
      </div>
    </div>

     <div class="row py-1">
      <div class="col-md-12">
          <h4>All lengths of a Triangle Calculator</h4>
          <p>Write a JavaScript program to find the area of a triangle where lengths of the three of its sides are 5, 6, 7.</p>
          <h4>Answer for basic OOP Traiange with base and height var</h4>
          <label>Base</label>
          <input type="text" id="base" class="form-control">
          <label>Height</label>
          <input type="text" id="height" class="form-control">
          <button class="btn btn-secondary" onclick="runProgram()">Calculate</button>
          <p class="py-1">Output: <strong><span id="triangleOut"></span></strong></p>
          <h4>Answer if three static sides of triangle (5,6,7)</h4>
          <p>Decided to use the Heron's formula for this</p>
          <p class="py-1">Output: <strong><span id="triangleOut2"></span></strong></p>
          <hr>
      </div>
    </div>

 



    <div class="row py-1">
      <div class="col-md-12">
          <h4>OUTSTANDING:String Manipulation</h4>
          <p>Write a JavaScript program to rotate the string 'w3resource' in right direction by periodically removing one letter from the end of the string and attaching it to the front</p>
          <h4>Answer</h4>
          <button onclick="runStringFunction()">Run</button>
          <p>Original String: <strong><span id="string">w3resource</span></strong></p>
          <p>Output: <strong><span id="stringMan"></span></strong></p>
          <hr>
      </div>
    </div>


    <div class="row py-1">
      <div class="col-md-12">
          <h4>Find a Leap Year</h4>
          <p>Write a JavaScript program to determine whether a given year is a leap year in the Gregorian calendar.</p>
          <h4>Answer</h4>
          <p>Please enter any 4 digit year, for example; 2000 or 1958</p>
          <input type="text" id="yearInput">
          <button onclick="leapYear()">Check</button>
          <p>Output: <strong><span id="leapYearOutcome"></span></strong></p>
          <hr>
      </div>
    </div>


    <div class="row py-1">
      <div class="col-md-12">
          <h4>Find when the 1st of February lands on a Monday</h4>
          <h4>Answer</h4>
          <p>Output: <strong><span id="dateOupCalender"></span></strong></p>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Guess the number</h4>
          <p>Write a JavaScript program where the program takes a random integer between 1 to 10, the user is then prompted to input a guess number. If the user input matches with guess number, the program will display a message "Good Work" otherwise display a message "Not matched".</p>
          <h4>Answer</h4>
          <label>Your Guess</label>
          <input type="text" id="guessNumberInput">
          <button onclick="guessNumber()">Check</button>
          <p>Output: <strong><span id="guessNumberOutput"></span></strong></p>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>How many days until Xmas?</h4>
          <p>Write a JavaScript program to calculate days left until next Christmas.</p>
          <h4>Answer</h4>
          <p>Output: <strong><span id="daysTilXmas"></span></strong></p>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Basic calculator</h4>
          <p>Write a JavaScript program to calculate multiplication and division of two numbers (input from user)</p>
          <input type="text" id="calA">
          <input type="text" id="calB">
          <button onclick="runMultiply()">Multiply</button><button onclick="runDivide()">Divide</button>
          <h4>Answer</h4>
          <p>Output: <strong><span id="calculator"></span></strong></p>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Temperatures Calculator</h4>
          <p>Write a JavaScript program to convert temperatures to and from celsius, fahrenheit.</p>
          <h4>Answer</h4>
          <p><input id="c" onkeyup="convert('C')"> degrees Celsius°</p>
          <p><input id="f" onkeyup="convert('F')"> degrees Fahrenheit°F</p> 
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Current Website Information</h4>
          <p>Write a JavaScript program to get the website URL (loading page)</p>
          <h4>Answer</h4>
          <p>Current URL: <span id="url"></span></p>
          <p>Current Domain: <span id="domain"></span></p>
          <p>Secured: <span id="secure"></span></p>
          <hr>
      </div>
    </div>

    <div class="row py-1">
      <div class="col-md-12">
          <h4>Reverse a Number</h4>
          <p>Write a JavaScript function that reverses a number.</p>
          <h4>Answer</h4>
          <p>Example x = <span id="reverseNumber">32243</span></p>
          <p>Output: <span id="reverseNumberOutput"></span></p>
          <hr>
      </div>
    </div>


  </div> <!--container-->

   <?php include 'footer-bootstrap.php'; ?>
   
  

  <script type="text/javascript">
    
    //Display Current Day

    function displayTime() {

      var allDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"] // Day outputs an integar, so use array to replace number with name

      var d = new Date(); //New data class

      var actualDay = allDays[d.getDay()] //checks which day it is 0-6 then matches its to the arrow items, and prints the correct array name

      var day = "<strong>Today is " + actualDay + "</strong>"

      $('#time').html(day);

      var currentTime = $('<p>Current time is: <strong><span id="currentTime"></span></strong></p>').insertAfter("#time"); //insert the new HTML to handle the time output

      var localeTime = d.toLocaleTimeString('en-UK'); //This just prints the local time set as a parameter en-UK - this then displays AM/PM and the current time as a string

      $('#currentTime').html(localeTime) //finally get the id and then print the string

    }
    window.onload = displayTime(); // load the function on page load


  </script>

  <script type="text/javascript">
    
  // Print Window Contents button

    function printPage() {
      window.print();
    }


  </script>

  <script type="text/javascript">

    var date, month, year, sp, finalDate; 

    var d = new Date();

    date = d.getDate(); 
    month = d.getMonth() + 1; 
    year = d.getFullYear();
    sp = "/"; 

    finalDate = date + sp + month + sp + year; 

      
    $('#dateOutput').html(finalDate)


  </script>
 
 <script type="text/javascript">
   
  //Area of a trangle 

  function findArea(base,height) {

    var area = (base * height) / 2
    return area;
  }
  
  function runProgram() {

    var base, height; 

    base = $("#base").val();

    height = $("#height").val();

    $('#triangleOut').html(findArea(base,height) + "cm2")
  }

  // Area of traingle with 3 sides known

  function triangleArea(a,b,c) {

    var s = (a+b+c) / 2;
    var area = s * (s - a) * (s - b) * (s - c);
    return Math.sqrt(area).toFixed(2);

  }

  $('#triangleOut2').html(triangleArea(5,6,7))

 </script>

 <script type="text/javascript">
   
 // Changing a stringm removing last character and adding it to the front, until the word is rewritten 

  var str = $('#string').text(); //gets the value of the id string which is a span in the HTML;

  var res = str.split("");


  function runStringFunction(){

    var last, middle, oldString, finalPaint; 

    oldString = res;

    console.log(oldString)

    last = res[res.length-1];

    var outputArray = []; 

    outputArray.push(last);

    console.log("Last: " + last)

    outputArray.toString();

    $('#stringMan').html(outputArray)

    $('#string').html(oldString)

  }



 </script>


 <script type="text/javascript">
   
    // Find out if the year is a leapyear for a given year

    function leapYear(year){

      var isLeapYear; 

      year = $('#yearInput').val();

      if ( (0 == year % 4) && (0 != year % 100) || (0 == year % 400) ){
        isLeapYear = "Yes, this is a leap year"
      } else {
        isLeapYear = "NO! This is NOT a leapyear idiot!"
      }

      var finalOutput = "OK, you entered " + year + ", " + isLeapYear

      if (year != null) {
      $('#leapYearOutcome').html(finalOutput)
      }
    }

    console.log(year);

 </script>


 <script type="text/javascript">
   
    // Find out the first 1st of January that is on a Sunday


    for (var yearTing = 2014; yearTing <= 2050; yearTing++) {
        var d = new Date(yearTing, 1, 1); // (year, month, day))
        if ( d.getDay() === 1 ) { //if the day is Sunday, i.e 0 
            console.log("1st of Feburary falling on a Monday will happen in the year "+yearTing);
            $('#dateOupCalender').html(yearTing) 
            }
        }


 </script>

 <script type="text/javascript">
   
   var correct, incorrect; 

   correct = "Good Work, you got it right! ";
   incorrect = "Not matched, try again MORON! "; 

  function guessNumber(){

    var computerNumber, userNumber; 

    computerNumber = Math.floor((Math.random() * 10) + 1); //createsa random number between 1 and 10

    userNumber = $('#guessNumberInput').val(); 

    if(computerNumber == userNumber) {
      $('#guessNumberOutput').html(correct + "Computer guessed " + computerNumber);
    } else {
      $('#guessNumberOutput').html(incorrect + "Computer guessed " + computerNumber);
    }

  }

 </script>

 <script type="text/javascript">

   
   
    function daysTilXmas(){

      var oneDay = 24*60*60*1000; //works out the value of one day 

      d = new Date(); // Sets todays date to countdown from -  To test the Christmas eve and Xmas Day conditions enter the date as parameters (year, month, day)

      var year = d.getFullYear(); // Get the current year

      var xmasDate = new Date(year,11,25) // Setting countdown start, which is Xmas, CURRENT year. 

      var daysLeft = Math.abs(xmasDate.getTime() - d.getTime());
      var diffDay = Math.ceil(daysLeft / oneDay)

      if (diffDay == 1){
        finalStyleOutput = "There is only " + diffDay + " one day til Xmas Day! - Its Christmas EVE!"
      } else if (diffDay == 0) {
        finalStyleOutput = "There are " + diffDay + " days til Xmas Days! ITS Christmas - DRINK!"
      } else {
        finalStyleOutput = "There are only " + diffDay + " days til Xmas Day!"
      }

      return finalStyleOutput // the correct output 

    }


    $('#daysTilXmas').html(daysTilXmas()); // prints the final output



 </script>
 
 <script type="text/javascript">
   
  // Calculator 


  function multiply(a,b){
    var answer = a * b;
    return answer; 
  }

  function divide(a,b){
    var answer = a / b;
    return answer; 
  }

  function runMultiply(){

    var a, b;

    a = $('#calA').val(); 
    b = $('#calB').val(); 

    console.log(a + b)

    $('#calculator').html(multiply(a,b));
  }

  function runDivide(){

    var a, b;

    a = $('#calA').val(); 
    b = $('#calB').val(); 

    $('#calculator').html(divide(a,b));
  }


 </script>

 <script type="text/javascript">
   
    // Temperature Calculator 

        function convert(degree) {
          var x;
          if (degree == "C") {
              x = document.getElementById("c").value * 9 / 5 + 32;
              document.getElementById("f").value = Math.round(x);
          } else {
              x = (document.getElementById("f").value -32) * 5 / 9;
              document.getElementById("c").value = Math.round(x);
          }
        }



 </script>

 <script type="text/javascript">
   
    // Webasite URL Information 

    function findStuffOut(){

      var url, domain; 

      url = window.location.href;

      domain = window.location.hostname;

      secure = window.location.protocol;

      console.log(secure)

      if (secure == 'http:'){
        $('#secure').html("This domain is not secured, it is returning " + secure)
      } else {
         $('#secure').html("Yes, this is a HTTPS domain and is therefore secured")
      }

      $('#url').html(url);

      $('#domain').html(domain)

    }

    window.onload = findStuffOut();


 </script>

 <script type="text/javascript">
   
 //REVERSE NUMBER

    function reverseNumber(){

      var x = $('#reverseNumber').text(); //store number from HTML 

      x = x.split(""); //Turn into an array each letter

      var revese = x.reverse(); // reverse the array

      var finaloutputReverse = x.join(""); // turn it back into a string

      console.log(x) //text

      $('#reverseNumberOutput').html(finaloutputReverse); //output results to HTML

    }

    window.onload = reverseNumber();

 </script>

 <script type="text/javascript">
   
 //It's bonus time in the big city! The fatcats are rubbing their paws in anticipation... but who is going to make the most money?

//Build a function that takes in two arguments (salary, bonus). Salary will be an integer, and bonus a boolean.

//If bonus is true, the salary should be multiplied by 10. If bonus is false, the fatcat did not make enough money and must receive only his stated salary.

//Return the total figure the individual will receive as a string prefixed with '£' (JS and Java) or '$' (C#, C++, Ruby, Clojure, Elixir, PHP and Python).

  
  function bonusCal(salary, bonus){

    var salary = salary;
    var bonus = bonus;

    if (bonus === true) {
      salary = salary * 10;
    } else {
      salary = salary;
    }

    salary = "£" + salary

    return salary;
  }



  console.log(bonusCal(2833, true));





 </script>




 <?php include 'footer.php'; ?>