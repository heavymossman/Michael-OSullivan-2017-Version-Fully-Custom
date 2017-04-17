




function submitAnswers(){



	var total = 5; // total number of questions
	var score = 0; // we will add onto this number

	//Get user input

	var q1 = document.forms["quizForm"]["q1"].value; // this is setting the input from q1 into a q1 varaible
	var q2 = document.forms["quizForm"]["q2"].value;
	var q3 = document.forms["quizForm"]["q3"].value;
	var q4 = document.forms["quizForm"]["q4"].value;
	var q5 = document.forms["quizForm"]["q5"].value;

	// Validation - will alert if users misses any question


	for (i = 1; i <= total; i++){
		
		if (eval('q' + i) == null || eval('q' + i) == "") { //the eval allows us to take the q and then add 1 to each q while cycling through
			alert("You missed question " + i)
			return false; //stops the form from submiting
		}
	}

	// Set correct answers

	var answers = ["a", "b", "c", "d", "a"];

	for (i = 1; i <= total; i++){
		if (eval('q' + i) == answers[i - 1]){
			score++
		}
	}


	// Display Results

	var results = document.getElementById("results");

	if (score <= 2){

	results.innerHTML = '<div class="results2">' + "<h3>" + "You scored " + score + " out of " + total + "</h3>" + " That is really shite" + '</div>';

	} else {
		results.innerHTML = '<div class="results1">' + "<h3>" + "You scored " + score + " out of " + total + "</h3>" + '</div>';
	}

	//alert("You scored " + score + "out of " + total);

	$("#button").on("click", function() {
    $("body").scrollTop(-110);
	});

	//console.log(results);

	return false; //stops the page from sending
}