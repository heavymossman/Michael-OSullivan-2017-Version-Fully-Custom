<?php include 'header.php'; ?>

	<div class="container mt-2">

		<div class="row">

			<div class="col-md-12 p-2">

				<h1>School Register Application</h1>

					
					<div class="row mt-3">
						<div class="col-md-12">
							<h3>Udacity Attendance 2.0</h3>
							<div class="row mt-2">
								<div class="col-md-3">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Week
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Week 1</a>
											<a class="dropdown-item" href="#">Week 2</a>
											<a class="dropdown-item" href="#">Week 3</a>
											<a class="dropdown-item" href="#">Week 4</a>
											<a class="dropdown-item" href="#">Week 5</a>
											<a class="dropdown-item" href="#">Week 6</a>
											<a class="dropdown-item" href="#">Week 7</a>
											<a class="dropdown-item" href="#">Week 8</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Day
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Monday</a>
											<a class="dropdown-item" href="#">Tuesday</a>
											<a class="dropdown-item" href="#">Wednesday</a>
											<a class="dropdown-item" href="#">Thursday</a>
											<a class="dropdown-item" href="#">Friday</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">

									
									<input class="form-control" placeholder="Enter New Student Name" id="studentNameEnter">

								</div>
								<div class="col-md-3">

									<button  class="btn btn-succes" id="studentNameSend">Submit</button>
								
								</div>
							</div>
							<div class="row mt-2">

								<div class="col-md-12">

								<p>TEMP OUTPUTAREA:</p>
								<p id="tempArea"></p>

								<table class="table">
									
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Week 1</th>
											<th>Week 2</th>
											<th>Week 3</th>
											<th>Week 4</th>
											<th>Days Missed</th>
										</tr>
									</thead>
									<tbody id="tableNameOutput"><form>
										
									</form></tbody>
								</table>

								<p id="tempOutput"></p>

								</div>

							</div>
						</div>
					</div>

			</div>


		</div>


	</div>




<?php include 'footer-bootstrap.php'; ?>

<script type="text/javascript">
	
//SCRIPT GOES HERE


	//FEATURES WE NEED

	// Add New Student
	// Delete Student
	// Edit Student Name
	// Enter Week 1 Attendance
	// Enter Week 2 Attendance
	// Calculate each students missed days
	// Calculate total amount of students and the class average attendance
	// Save via HTML 5 local.storage
	// BONUS: Set total amount of weeks and allow up to 42 weeks to be added and the system handles it, including a add new week button, so teacher can click it at the beginning of each new week


	// Display Students 
	var students = {

		students:[

			{
				name:'Michael',
				week1: 5,
				week2: 3,
				totalAttendance: 0
			},
			{
				name:'Nicola',
				week1: 5,
				week2: 5,
				totalAttendance: 0
			},
			{
				name:'Lewis',
				week1: 2,
				week2: 3,
				totalAttendance: 0
			},
			{
				name:'Coco',
				week1: 1,
				week2: 2,
				totalAttendance: 0
			}
		],

		addNewStudent: function (name, week1, week2){
			this.students.push({
				name: name,
				week1: week1,
				week2: week2,
				totalAttendance: 0
			});

		students.init();

		},

		deleteStudent: function(position){
			this.students.splice(position, 1);
			students.init();
		},

		editStudentName: function(position, name){
			this.students[position].name = name;
			students.init();
		},

		totalAttendance: function(i){
			for (var i = 0; i < students.students.length; i++){

				//10 days is tht total school days, so we deduct the total vs the amount of days missed as final app must display days missed
				var totalStudentDays = 10;
				this.students[i].totalAttendance = totalStudentDays - (this.students[i].week1 + this.students[i].week2);	
			};

			console.log("Total Students " + students.students.length)
		},

		init: function (){
			this.totalAttendance();

			console.log(students.students);
			display.displayStudents()
		}

	};

	var display = {

		displayStudents: function(){

			var outPut = document.getElementById('tempArea');

			for (var i = 0; i < students.students.length; i++){

				var studentName = studentName + " " + students.students[i].name + "'s " + "total days Missed: " + students.students[i].totalAttendance + "<br />";

				var newStudent = studentName.replace("undefined", " "); //output was showing undefined for first item, so temp just removed the letters from the string, little cheat I know!

				$(outPut).html(newStudent);
			}

		}
	};

	display.displayStudents()


	//Add a new student CONSTRUCTOR
	
	

	//new students.addNewStudent("PETER", 2, 2);

	//var dave = new Student("Kevin", 5, 5);
	//var deleteMe = new Student("DICKHEAD", 0, 0);

	

	//students.students.push(dave);
	//students.students.push(deleteMe);


	// Add new Student
	

	//Edit Student Name
	students.students[0].name = "Moss";
	students.students[0].week2 = 4;

	//Delete Student
	//students.students.splice(5,1)

	// Function works out the total attendance of the selected student
	function attendance(position){

		var position = position;

		var newAttendance = students.students[position].week1 + students.students[position].week2

		students.students[position].totalAttendance = newAttendance;

	}


	

	

	//Loads attendance function with the parameter the positon in the array


	//attendance(0);
	//attendance(1);
	//attendance(2);
	//attendance(3);
	//attendance(4);

	students.init();

	






</script>




 <?php include 'footer.php'; ?>