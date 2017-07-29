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
		$('#outputarea2').html("Displaying via a Function" + todos);
	}


	// A new items to list

	function addTodos(note){
		todos.push(note); 
		displayTodos(); // include this in hte function to reload it after each new item is added
	}

	addTodos(' + This is my new note');


	displayTodos();






</script>


<?php include 'footer.php'; ?>