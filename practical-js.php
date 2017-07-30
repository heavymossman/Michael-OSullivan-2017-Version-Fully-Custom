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
				<div id="outputarea7"></div>
				<hr />
				<p><strong>Version 8 - Getting data from inputs</strong></p>
				<div id="outputarea8"></div>
				<hr />
				<p><strong>Version 9 -  Escape from the console</strong></p>
				<div id="outputarea9"></div>
				<hr />
				<p><strong>Version 10 - Click to delete</strong></p>
				<div id="outputarea10"></div>
				<hr />
				<p><strong>Version 11 - Destroy all for loops</strong></p>
				<div id="outputarea11"></div>



			</div>
		</div>
	</div>








<?php include 'footer-bootstrap.php'; ?>

<script type="text/javascript">

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



</script>

<script type="text/javascript">
	
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


</script>

<script type="text/javascript">
	
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
		},

		changeTodo: function(i, edit){
			this.todos[i] = edit;
		},

		removeTodo: function(i){
			this.todos.splice(i, 1) //1 here means delete one item, so we do not need to make it a paramenter variable, but we could
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




</script>


<?php include 'footer.php'; ?>