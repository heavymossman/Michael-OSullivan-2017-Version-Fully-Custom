<?php include 'header.php'; ?>

	<div class="container mt-2">

		<div class="row">

			<div class="col-md-12 p-2">

				<h1>School Register Application</h1>

					
					<div class="row mt-3">
						<div class="col-md-12">
							<h3>Udacity Attendance 3.0</h3>
						
							<br />
									<p><span id="totalWeeks"></span></p>

								
							<div class="row mt-2">

								<div class="col-md-3">

									<div class="form-group">
									    <label for="exampleSelect1">Attendance Week 1</label>
									    <input class="form-control" id="week1Input" type="number" min="0" max="5">
									      
									    
									</div>

								</div>

								<div class="col-md-3">

									<div class="form-group">
									    <label for="exampleSelect1">Attendance Week 2</label>
									    <input type="number" class="form-control" id="week2Input" min="0" max="5">
									      
									</div>

								</div>

								
								<div class="col-md-3">

									<label for="studentNameEnter">Enter Full Student Name</label>
									<input class="form-control" placeholder="Enter New Student Name" id="studentNameEnter">

								</div>

								<div class="col-md-3">
								<label for="studentNameSend">.</label><br>
									<button  class="btn btn-succes" id="studentNameSend">Submit</button>
								
								</div>
							</div>
							<div class="row mt-2">

								<div class="col-md-12">

								

								<table class="table" >
									
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Week 1</th>
											<th>Week 2</th>

											<th>Days Missed</th>
										</tr>
									</thead>
									<tbody id="tableNameOutput">
										
									</tbody>
								</table>

								

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

$(function() {	

	
	var studentsRegister = {

		students: [],

		addStudent: function(name,week1,week2){
			this.students.push({
				name: name,
				week1: week1,
				week2: week2
			})
			this.storage();
			this.init();
		},


		editStudentName: function(i,name){
			this.students[i].name = name;
		},

		deleteStudent: function(i){
			this.students.splice(i,1);
		},

		totalStudents: function(){
			var totalStudents = this.students.length;

			var editMe = document.getElementById('totalWeeks');

			editMe.innerHTML = "There are <strong>" + totalStudents + "</strong> students in our class";

		},

		storage: function(){
			localStorage.setItem("students", JSON.stringify(this.students));
			console.log("storage: " + this.students)
		},

		returnData: function(){

			var retrievedData = localStorage.getItem("students");
			var allStudents = JSON.parse(retrievedData);
			console.log(allStudents)
		},

		init: function(){
			this.returnData();
			view.outputStudents();
			console.log(this.students)
		}
	};


	var view = {

		outputStudents: function(){


			var studentTable = document.getElementById('tableNameOutput');
			studentTable.innerHTML = ''; //set to blank otherwise the list repeats itself! 
			

			for (var i = 0; i < studentsRegister.students.length; i++){

				var rows = document.createElement('tr'); //creates <tr></tr>

				var studentName = studentsRegister.students[i].name;
				var week1 = studentsRegister.students[i].week1;
				var week2 = studentsRegister.students[i].week2;
				var fixedStudentDays = globalDays
				var studentdays = fixedStudentDays - (week1 + week2);
				rows.id = i;
				rows.innerHTML = '<th scope="row">' + studentName  + '</th>' + '<td>' + week1 + '</td>' + '<td>' + week2 + '</td>'+ '<td>' + studentdays + '</td>';
				studentTable.appendChild(rows);
				
			}

		}
	}

	var handlers = {

		addNewStudent: function(){

			var sendButton = document.getElementById('studentNameSend');

			$(sendButton).click(function(){
			    var studentName = document.getElementById('studentNameEnter');
				var week1 = document.getElementById('week1Input');
				var week2 = document.getElementById('week2Input');
				studentsRegister.addStudent(studentName.value,week1.valueAsNumber,week2.valueAsNumber);
				studentName.value = '';
				week1.value = '0';
				week2.value = '0';

			});
		},

		totalSchoolDays: function(weeks){
			var weeks = weeks;
			var days = weeks*5;
			return days
		}
	}

	
	
	//studentsRegister.addStudent("nicola",1,5);

	var globalDays = handlers.totalSchoolDays(2)

	/*studentsRegister.addStudent("michael",2,3);
	studentsRegister.addStudent("nicola",5,5);
	studentsRegister.addStudent("delete yat",5,5);
	studentsRegister.addStudent("can not read",4,5); */

	//studentsRegister.deleteStudent(2);
	//studentsRegister.editStudentName(2,"paul henry");

	//studentsRegister.totalStudents();

	handlers.addNewStudent();

	studentsRegister.returnData()

	studentsRegister.init();
	

	

	//handlers.addNewStudent();
}());

</script>




 <?php include 'footer.php'; ?>