<?php include 'header.php'; ?>

	<div class="container mt-2">

		<div class="row">

			<div class="col-md-12 p-2">

				<h1>Practical JS Lessons</h1>
				<p>Class Taken: http://practicaljavascript.net</p>
				<p>Final Version: http://todomvc.com/examples/vanillajs/#/</p>
				<p><strong>Basic Requirements for the Project</strong></p>
				<ul>
					<li>Should have place to store todos</li>
					<li>Should have a way to display todos</li>
					<li>Should be able to add new todos</li>
					<li>Should be able to change a todo</li>
					<li>Should be able to delete a todo</li>
				</ul>

				<p><strong>Version 1 - Basic</strong></p>
				<div id="outputarea1"></div>
				<hr />
				<p><strong>Version 2 - Functions</strong></p>
				<div id="outputarea2"></div>
				<hr />
				<p><strong>Version 3 - Objects</strong></p>
				<div id="outputarea31"></div>
				<div id="outputarea3"></div>
				<hr />
				<p><strong>Version 4 - Booleans</strong></p>
				<div id="outputarea4"></div>
				<hr />
				<p><strong>Version 5 - Loops of Logic</strong></p>
				<div id="outputarea5"></div>
				<hr />
				<p><strong>Version 6 - Thinking in Code</strong></p>
				<div id="outputarea6"></div>
				<hr />
				<p><strong>Version 7 - HTML and the DOM</strong></p>
				<!--<button class="btn btn-lg btn-success" id="btn-displayTodos">Display todos</button>
				<button class="btn btn-lg btn-warning" id="btn-toggleAll">Toggle All</button> -->
				
				<hr />
				<p><strong>Version 8 - Getting data from inputs</strong></p>
				<!--<button class="btn btn-lg btn-success" onclick="handlers.displayTodos()">Display todos</button>-->
				<button class="btn btn-lg btn-warning" onclick="handlers.toggleAll()">Toggle All</button>
				
				<div class="row mt-1">
					<div class="col-md-12"><label>Add your Todo</label></div>
					<div class="col-md-10">
						
						<input type="text" name="" class="form-control" placeholder="Enter your todo item here" id="enterTodo">
					</div>
					<div class="col-md-2">
						<button class="btn btn-default btn-block" id="btn-enterTodo">SAVE</button>
					</div>
				</div>
				<div class="row py-2 mt-1">
					<div class="col-md-4">
						<input type="text" name="" class="form-control" placeholder="Enter new todo text" id="changeTodoText">
					</div>
					<div class="col-md-4">
						<input type="number" name="" class="form-control" placeholder="Which number todo would you like to change?" id="changeTodoPosition">
					</div>
					<div class="col-md-4">
						<button class="btn btn-info btn-block" onclick="handlers.changeTodo()">Change Todo</button>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-6">
						<!--<input type="number" name="" class="form-control" placeholder="Which number todo would you like to delete?" id="deleteTodoPosition"> -->
					</div>
					<div class="col-md-6">
						<!--<button class="btn btn-warning btn-block" onclick="handlers.deleteTodo()">Delete Todo</button>-->
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-6">
						<input type="number" name="" class="form-control" placeholder="Which number todo would you like to Mark Completed?" id="toggleTodoPosition">
					</div>
					<div class="col-md-6">
						<button class="btn btn-default btn-block" onclick="handlers.toggleTodo()">Mark as completed / uncompleted</button>
					</div>
				</div>
				<hr />
				<div id="outputarea8">
					<ul id="todoTaskList">
						
					</ul>
				</div>


			</div>
		</div>
	</div>








<?php include 'footer-bootstrap.php'; ?>

<!--<script type="text/javascript">

	// VERSION 1

	var todos = [
		"Item 1",
		"Item 2",
		"Item 3"
	];

	todos.push("Item 4"); //add items to the end of an array
	todos.push("Item 5");

	//Edit items in the array

	todos[0] = 'Item 1 now updated'; // update items in an arry

	todos.splice(1, 1)  //this is how to delete and item from an array. first number is array index item, and second number is how many items to remove. So 0,1 deletes the first item, 



	$('#outputarea1').html(todos);



</script> --?

<!--<script type="text/javascript">
	
	//VERSION 2

	var todos = [
		"Item 1",
		"Item 2",
		"Item 3"
	];

	todos.push("Item 4"); //add items to the end of an array
	todos.push("Item 5");

	//Edit items in the array

	todos[0] = 'Item 1 now updated'; // update items in an arry

	todos.splice(1, 1)  //this is how to delete and item from an array. first number is array index item, and second number is how many items to remove. So 0,1 deletes the first item, 


	// Display todo list
	function displayTodos(){
		$('#outputarea2').html("My Function Powered todo: " + todos);
	};


	// A new items to list

	function addTodos(note){
		todos.push(note); 
		displayTodos(); // include this in hte function to reload it after each new item is added
	};

	addTodos(' Item 6 ');

	// Function to change an todo item

	function changeTodo(i, edit) {
		todos[i] = edit;
		displayTodos();
	};

	changeTodo(1, ' Item 7 ');

	// Function to remove an item from the todolist

	function removeTodo(i){
		todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
	};

	removeTodo(1);


	displayTodos();


</script> -->

<!--<script type="text/javascript">
	
	//VERSION 3

	//This is just testing out the system, ignore. 

	var nameMessage = "Welcome back ";

	var myObject = {

		name: 'Michael',
		sayName: function(){ //this is a method, and object that is equal to a function is a method
			return this.name;
		}
	}

	$('#outputarea31').html(nameMessage + myObject.sayName() + ',');

	//this basically means this object, so any items within THIS object!

	// Version 3 Starts here

	var todoList = {
		
		todos: [
			"item 1 ",
			"item 2 ",
			"item 3 "
		],

		displayTodos: function(){
			$('#outputarea3').html(this.todos);
		},

		addTodos: function(note){
			this.todos.push(note);
			this.init();
		},

		changeTodo: function(i, edit){
			this.todos[i] = edit;
			this.init();
		},

		removeTodo: function(i){
			this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
			this.init();
		},

		init: function(){
			todoList.displayTodos();
		}
	};


	todoList.changeTodo(1, 'item 7 (new via Change) ');

	todoList.addTodos('item 4 (new via push) ');

	todoList.addTodos('item 5 (to be deleted) ');

	todoList.removeTodo(4); //deletes the 5th item in the array, the one above

	todoList.init();




</script> -->

<!--<script type="text/javascript">
	
	// VERSION 4


	var todoList = {
		
		todos: [],

		displayTodos: function(){
			$('#outputarea4').html("WORKING " + this.todos);
			console.log(this.todos)
		},

		addTodos: function(text){
			this.todos.push({
				todoText: text,
				completed: false
				});
			this.init();
		},

		changeTodo: function(i, text){
			//this.todos[i] = edit;
			this.todos[i].todoText = text // so here we set the object to todos, dot notion we select the todoText and we set it to the object of this function, which is the text or the change
			this.init();
		},

		removeTodo: function(i){
			this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
			this.init();
		},

		toggleCompleted: function(i){	
			var todo = this.todos[i]; //setting this as a variable saves us reuseing the long verson below twice. 
			todo.completed = !todo.completed; //! means the opposite, so if its starts as true, will turn it false, and vice versa
			this.init();
		},

		init: function(){
			todoList.displayTodos();
		}
	};

	todoList.addTodos('item 4 (new via push) ');

	todoList.toggleCompleted(0);

	todoList.init();

	


</script> -->

<!--<script type="text/javascript">
	
	//Version 5 - LOOOPS of LOGIC


	var todoList = {
		
		todos: [],

		displayTodos: function(){

			if (this.todos.length === 0){ // to find out if the index of the array is both an integar, and equal to 0
				console.log("Sorry you have no todo items remaining in your list ");
				$('#outputarea5').html("My Todos: " + '<br><p>Sorry you have no todo items remaining in your list</p>');
			} else { // since there are items in the array, lets print them out
				console.log("My Todos: ");
				for (var i = 0; i < this.todos.length; i++){
					// Here we are checking IF the completed status of the todo is true or false, set to false by default on the todo objects
					if (this.todos[i].completed === true){
						console.log('(X) ' + this.todos[i].todoText);
						$('#outputarea5').html("My Todos: " + '<br><p>(X) ' + this.todos[i].todoText + '</p>');
					} else {
						console.log('( ) ' + this.todos[i].todoText);
						$('#outputarea5').html("My Todos: " + '<br><p>( ) ' + this.todos[i].todoText + '</p>');
					}				
				}
			}
			
		},

		addTodos: function(text){
			this.todos.push({
				todoText: text,
				completed: false
				});
			this.init();
		},

		changeTodo: function(i, text){
			//this.todos[i] = edit;
			this.todos[i].todoText = text // so here we set the object to todos, dot notion we select the todoText and we set it to the object of this function, which is the text or the change
			this.init();
		},

		removeTodo: function(i){
			this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
			this.init();
		},

		toggleCompleted: function(i){	
			var todo = this.todos[i]; //setting this as a variable saves us reuseing the long verson below twice. 
			todo.completed = !todo.completed; //! means the opposite, so if its starts as true, will turn it false, and vice versa
			this.init();
		},

		init: function(){
			todoList.displayTodos();
		}
	};

	todoList.addTodos('item 4 (new via push) ');
	todoList.addTodos('Michael is so sexy ');

	todoList.toggleCompleted(1);

	todoList.init();







</script> -->

<!--<script type="text/javascript">
	

	//Version 6 - Thinking in Code


	var todoList = {
		
		todos: [],

		displayTodos: function(){

			if (this.todos.length === 0){ // to find out if the index of the array is both an integar, and equal to 0
				console.log("Sorry you have no todo items remaining in your list ");
				$('#outputarea6').html("My Todos: " + '<br><p>Sorry you have no todo items remaining in your list</p>');
			} else { // since there are items in the array, lets print them out
				console.log("My Todos: ");
				for (var i = 0; i < this.todos.length; i++){
					// Here we are checking IF the completed status of the todo is true or false, set to false by default on the todo objects
					if (this.todos[i].completed === true){
						console.log('(X) ' + this.todos[i].todoText + "completed status: " + this.todos[i].completed);
						$('#outputarea6').html("My Todos: " + '<br><p>(X) ' + this.todos[i].todoText + '</p>');
					} else {
						console.log('( ) ' + this.todos[i].todoText + "completed status: " + this.todos[i].completed);
						$('#outputarea6').html("My Todos: " + '<br><p>( ) ' + this.todos[i].todoText + '</p>');
					}				
				}
			}
			
		},

		addTodos: function(text){
			this.todos.push({
				todoText: text,
				completed: false
				});
			this.init();
		},

		changeTodo: function(i, text){
			//this.todos[i] = edit;
			this.todos[i].todoText = text // so here we set the object to todos, dot notion we select the todoText and we set it to the object of this function, which is the text or the change
			this.init();
		},

		removeTodo: function(i){
			this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
			this.init();
		},

		toggleCompleted: function(i){	
			var todo = this.todos[i]; //setting this as a variable saves us reuseing the long verson below twice. 
			todo.completed = !todo.completed; //! means the opposite, so if its starts as true, will turn it false, and vice versa
			this.init();
		},

		toggleAll: function(){
			var totalTodos = this.todos.length; //this gives us the total number of todos in the array
			var completedTodos = 0;

			//Get total number of COMPLETED todos from the todo array

			for (var i = 0; i < totalTodos; i++) {
				if (this.todos[i].completed === true) {
					completedTodos++;
				}
			};

			if (completedTodos === totalTodos){ //If the totalTodos matches the total number of completed todos, we know they are all set to true, i.e completed
				for (var i = 0; i < totalTodos; i++){ //this for loop goes over each item and sets its completed booleon to false,
					this.todos[i].completed = false;
					
				}
			} else {
				for (var i = 0; i < totalTodos; i++){
					this.todos[i].completed = true; //so the previous was if all is true, set to false, this then sets them all to true. if there is any other condition than all set to ture
				}
			}
			
			this.init();
		},

		init: function(){
			todoList.displayTodos();
		}
	};

	todoList.addTodos('item 4 (new via push) ');
	todoList.addTodos('item 5 ');
	todoList.addTodos('item 6 ');

	todoList.toggleCompleted(0);
	todoList.toggleCompleted(1);
	todoList.toggleCompleted(2);

	todoList.init();


</script> -->

<!--<script type="text/javascript">

	//Version 7 - HTML and the DOM
	
	$(function() {	// this will ensure the whole object runs on page load, meaning we do not need to invoke the inviduval functions
		


		var todoList = {
			
			todos: [],

			displayTodos: function(){
				//debugger; //very cool way to test your code in console.log
				if (this.todos.length === 0){ // to find out if the index of the array is both an integar, and equal to 0
					console.log("Sorry you have no todo items remaining in your list ");
					$('#outputarea7').html("My Todos: " + '<br><p>Sorry you have no todo items remaining in your list</p>');
				} else { // since there are items in the array, lets print them out
					console.log("My Todos: ");
					for (var i = 0; i < this.todos.length; i++){
						// Here we are checking IF the completed status of the todo is true or false, set to false by default on the todo objects
						if (this.todos[i].completed === true){
							console.log('(X) ' + this.todos[i].todoText + "completed status: " + this.todos[i].completed);
							$('#outputarea7').html("My Todos: " + '<br><p>(X) ' + this.todos[i].todoText + '</p>');
						} else {
							console.log('( ) ' + this.todos[i].todoText + "completed status: " + this.todos[i].completed);
							$('#outputarea7').html("My Todos: " + '<br><p>( ) ' + this.todos[i].todoText + '</p>');
						}				
					}
				}
				
			},

			addTodos: function(text){
				//debugger;
				this.todos.push({
					todoText: text,
					completed: false
					});
				this.init();
			},

			changeTodo: function(i, text){
				//this.todos[i] = edit;
				this.todos[i].todoText = text // so here we set the object to todos, dot notion we select the todoText and we set it to the object of this function, which is the text or the change
				this.init();
			},

			removeTodo: function(i){
				this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
				this.init();
			},

			toggleCompleted: function(i){	
				var todo = this.todos[i]; //setting this as a variable saves us reuseing the long verson below twice. 
				todo.completed = !todo.completed; //! means the opposite, so if its starts as true, will turn it false, and vice versa
				this.init();
			},

			toggleAll: function(){
				var totalTodos = this.todos.length; //this gives us the total number of todos in the array
				var completedTodos = 0;

				//Get total number of COMPLETED todos from the todo array

				for (var i = 0; i < totalTodos; i++) {
					if (this.todos[i].completed === true) {
						completedTodos++;
					}
				};

				if (completedTodos === totalTodos){ //If the totalTodos matches the total number of completed todos, we know they are all set to true, i.e completed
					for (var i = 0; i < totalTodos; i++){ //this for loop goes over each item and sets its completed booleon to false,
						this.todos[i].completed = false;
						
					}
				} else {
					for (var i = 0; i < totalTodos; i++){
						this.todos[i].completed = true; //so the previous was if all is true, set to false, this then sets them all to true. if there is any other condition than all set to ture
					}
				}
				
				this.init();
			},

			init: function(){
				todoList.displayTodos();
			},

			view: function(){
				var toggleBtn = $('#btn-toggleAll'); //this stores the button HTML in our variable
				toggleBtn.click(function() { //onclick we acitivate the toggleAll function
	                todoList.toggleAll();
	            });

	            var displayAllBtn = $('#btn-displayTodos'); //this stores the button HTML in our variable
				displayAllBtn.click(function() { //onclick we acitivate the toggleAll function
	                todoList.init();
	            });
			}
		};

		todoList.addTodos('item 4 (new via push) ');
		todoList.addTodos('item 5 ');
		todoList.addTodos('item 6 ');

		//todoList.toggleCompleted(0);
		//todoList.toggleCompleted(1);
		//todoList.toggleCompleted(2);

		todoList.init();
		todoList.view();

	})//Final master closure
</script> -->

<script type="text/javascript">

	//Version 8, 9, 10, 11 - Getting data from inputs
	

		

		var todoList = {
			
			todos: [],

			addTodos: function(text){
				//debugger;
				this.todos.push({
					todoText: text,
					completed: false
					});
				//this.init();
			},

			changeTodo: function(i, text){
				//this.todos[i] = edit;
				this.todos[i].todoText = text // so here we set the object to todos, dot notion we select the todoText and we set it to the object of this function, which is the text or the change
				//this.init();
			},

			removeTodo: function(i){
				this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
				//this.init();
			},

			toggleCompleted: function(i){	
				var todo = this.todos[i]; //setting this as a variable saves us reuseing the long verson below twice. 
				todo.completed = !todo.completed; //! means the opposite, so if its starts as true, will turn it false, and vice versa
				//this.init();
			},

			toggleAll: function(){
				var totalTodos = this.todos.length; //this gives us the total number of todos in the array
				var completedTodos = 0;

				//Get total number of COMPLETED todos from the todo array

				for (var i = 0; i < totalTodos; i++) {
					if (this.todos[i].completed === true) {
						completedTodos++;
					}
				};

				if (completedTodos === totalTodos){ //If the totalTodos matches the total number of completed todos, we know they are all set to true, i.e completed
					for (var i = 0; i < totalTodos; i++){ //this for loop goes over each item and sets its completed booleon to false,
						this.todos[i].completed = false;						
					}
				} else {
					for (var i = 0; i < totalTodos; i++){
						this.todos[i].completed = true; //so the previous was if all is true, set to false, this then sets them all to true. if there is any other condition than all set to ture
					}
				}
				
				//this.init();
			},

			init: function(){
				todoList.displayTodos();

			},

		};

		
	var handlers = { 

		toggleAll: function(){
			todoList.toggleAll();
			view.displayTodos();
		},

		addTodoText: function(){
			
			var btnEnterTodo = $('#btn-enterTodo');

			btnEnterTodo.click(function() {
				var todoTextInput = document.getElementById('enterTodo');
			    todoList.addTodos(todoTextInput.value); //we can actually take the value from here, OR from the line above
			    todoTextInput.value = ''; //This is awesome, it clears the input after you have entereed your todo
			    view.displayTodos();
			});

		},

		changeTodo: function(){
			var newTodoText = document.getElementById('changeTodoText');
			var changeTodoPosition = document.getElementById('changeTodoPosition');
			todoList.changeTodo(changeTodoPosition.valueAsNumber, newTodoText.value); //.value takes the item as a sring, valueAsNumber take it as an integar or number
			newTodoText.value = '';
			changeTodoPosition.value = '';
			view.displayTodos();
		},

		deleteTodo: function(arrayPosition){
			todoList.removeTodo(arrayPosition);
			view.displayTodos();
		},

		toggleTodo: function(){
			var toggleTodoPosition = document.getElementById('toggleTodoPosition');
			todoList.toggleCompleted(toggleTodoPosition.valueAsNumber);
			toggleTodoPosition.value = '';
			view.displayTodos();
		}

	};

	var view = {
		displayTodos: function(){

			var todosUl = document.getElementById('todoTaskList');
			todosUl.innerHTML = ''; //set this blank before the loop starts so it always taking a fresh set of data and not doubling up

			for (var i = 0; i < todoList.todos.length; i++){
					var todoLi = document.createElement('li'); //so whenever this variable is called, it will create a <li></li>
					var todo = todoList.todos[i];
					var todoTextWithCompletion = '';

					if (todo.completed === true){
						todoTextWithCompletion = '(X) ' + todo.todoText + ' ';
					} else {
						todoTextWithCompletion = '( ) ' + todo.todoText + ' ';
					};

					todoLi.id = i; //THIS IS AWESOME - it just sets the todoLi ID to the index of the array
					todoLi.textContent = todoTextWithCompletion; //you use textContent to set the value of a created element
					todoLi.appendChild(this.createDeleteBtn()); //this adds the button elemnts as a child of the list element, the this refers to this object.
					todosUl.appendChild(todoLi); //adds the LI children to the parent UL
			} 	

		},

		createDeleteBtn: function(){
			var deleteBtn = document.createElement('button'); //creates a new button each time variable deleteBtn is called
			deleteBtn.innerHTML = '<i class="fa fa-trash-o" aria-hidden="true"></i>'; //Using inner HTML here to add in the font awesome icone of the delete button
			deleteBtn.className = 'deleteButton btn my-1'; //adding the class deleteButton and btn to all delete buttons
			return deleteBtn;
		},

		setUpEventListeners: function(){
			var todosUl = document.getElementById('todoTaskList');

			todosUl.addEventListener('click', function(e){
				console.log(e.target.parentNode.id); //this allows us to access the parent node of the button, which is the LI element, and then view the ID - e could be anything

				var elementClicked = e.target; // so e is just the parameter we set in the function above, and target just gets the actually item clicked

				if (elementClicked.className === 'deleteButton btn my-1'){
					handlers.deleteTodo(parseInt(elementClicked.parentNode.id)); //So this line is running the handlers.deleteTodo function and passing in the array position as the variable, so the delete button knows which array item to delete. The parentNocde of the button is the li and we are taking this id to delete the right item - parseInt just turns strings into numbers as our arrayPosition is a number
				}
			});
		}
	};

	


	view.displayTodos();
	handlers.addTodoText();
	view.setUpEventListeners();

	// FUNCTIONS THAT TAKE FUNCTIONS - NOT PART OF THE TODO APP PROJECT!!!

	//THE RUN WITH DEBUGGER FUNCTION

	function runWithDebugger(ourFunction) {
		debugger;
		ourFunction()
	}

	//Set Timeout notes - The Alarm Clock


	/*function alarmClock() {
		setTimeout(function(){
			console.log("WAKE BLOODY UP");
		}, 4000);
	}

	alarmClock(); */

	// Learning the FOR EACH LOOPS TO REPLACE FOR LOOPS

	var students = ['Michael', 'Nikki', 'JerryMan'];

	function logName(anything){
		console.log(anything);
	};

	students.forEach(logName); //once you pass in a function it will run the function on each item in the array - ForEach is a function built onto Arrays in JS

	// ACCESS $0 from console to see the section you have selected via the ELements tab

	var h1Listener = document.querySelector('h1'); //listens for any h1 HTML elements and sets them to the variable

	h1Listener.addEventListener('click', function(){
		console.log('The H1 Elements Have Been Clicked BITCHES!')
	}); //using our H! variable we listen for clicks, and then console log the message per h1 click

	// Using the Return Statement

	function calculator(x,y){
		var answer = x * y; 
		return answer;
	};

	console.log(calculator(2,10));


</script>






<?php include 'footer.php'; ?>


