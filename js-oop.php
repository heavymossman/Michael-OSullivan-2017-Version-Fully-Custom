<?php include 'header.php'; ?>


	<div class="container mt-3">


		<div class="row">

			<div class="col-md-12">

				<h1>Welcome to JavaScript Object Orientated Programming</h1>
				<hr>

				<div id="object1">

				</div>
				<hr />

				<div id="object2">

				</div>

				<div class="pt-3">
					
					<input type="text" name="text" class="form-control" id="enterGuess"><button class="btn btn-success" onclick="SecretCode()">SecretCode!</button>

					<p id="guessOutput"></p>

				</div>

			</div>


		</div>


	</div>







<?php include 'footer-bootstrap.php'; ?>


<script type="text/javascript">
	
	var customer = {

		name: "Tom Smith", 
		speak: function() {
			return "My name is " + this.name; 
		}, 

		address: {
			street: "123 Main Street Baby",
			city: "London", 
			postcode: "WC1A YourMum", 
			email: "anything@anything.com"
		}
	};


	$('#object1').html(customer.name)

	$('#object1').append(" " + "lives at " + customer.address.street + "<br />" + "His e-mail is: " + customer.address.email);

	$('#object1').append("<br>" + customer.speak());

	// Add items to our var customer 

	customer.address.country = "UK";

	$('#object1').append("<br>" + "Customer lives in " + customer.address.country); 

	// CONSTRUCTORS BABY 

	//Create the function to handle the data first, then add in the data or in this case people after

	function Person(name, street, status, telephone) {
		this.name = name; 
		this.street = street; 
		this.status = status;
		this.telephone = telephone;

		this.info = function(){
			return "My name is " + this.name + " and I live on " + this.street;
		}
	}

	//adding new property to the constructor 

	Person.prototype.personListName = "Special Person List";

	//Adding in the data and people

	var MossMan = new Person ("Michael O'Sullivan", "123 Main Street", "its complicated", "0789511248")

	$('#object2').html(MossMan.info())

	// Find out if something is true or not

	$('#object2').append("<br> Michael is a person " + (MossMan instanceof Person))


	Person.prototype.showpersonListName = function() {
		return "<br>" + this.name + " is on the list called : " + this.personListName + "<br>";
	}

	// displaying the new property we added above

	$('#object2').append(MossMan.showpersonListName())

	var steve = new Person ("Steve Stamp", "45 Brixton Fanny", "Engaged", "079432165")


	// Displays all properties via a For Loop of the var steve

	for(var i in steve) {
		$('#object2').append("<br >" + i + " : " + steve[i])
	}


	// This will search through an array and check if the value searching for is in the array

	Array.prototype.inArray = function inArray(value) {
		for (i = 0; i < this.length; i++) {
			if (this[i] === value) {
				return true;
			}
		} return false;
	}


	// Sample Array below

	var sampleArray = [1,2,3,4,5]; 

	$('#object2').append("<br />" + sampleArray + "<br />");

	//use the function above and search for the number 3 in the array and return if true or false - any number in the ()

	$('#object2').append("<br /> 3 in array " + sampleArray.inArray(3) + "<br>"); 
	$('#object2').append("30 in array " + sampleArray.inArray(30) + "<br>");


	// Secret code stuff which is really just variables outside of the global scope

	function SecretCode() {

		var num = $('#enterGuess').val();

		console.log(num)

		var secretNum = 78;

		var lower, higher, success;

		lower = "Incorrect, try a lower number";
		higher = "Incorrect, try a higher number";
		success = "YES!! OH MY GOD!!! YOU GUESSED IT RIGHT, LIKE, WOW!";

			if (num > secretNum){
				$('#guessOutput').html(lower);
				console.log(lower);
			} else if (num < secretNum){
				$('#guessOutput').html(higher);
				console.log(higher);
			} else {
				$('#guessOutput').html(success);
				console.log(success);
			}
	}

	function CatConstructor(name, id, command, image, startingClicks) {

        this.name = name;
        this.id = id;
        this.command = command;
        this.image = image;
        this.startingClicks = startingClicks;

        this.showCats = function(){

          return "Cat ID: " + this.id + "<br>" + this.name + "<br>" + "<img class='img-fluid' src='" + this.image + "'>" + "<br>" + this.command + "<br>" + "Total clicks on cat = " + this.startingClicks;
        }
       
      }

	


</script>





  <?php include 'footer.php'; ?>