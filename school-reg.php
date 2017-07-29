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

$(function(){

	var newTableRowCheckBox = '<td><input  type="checkbox" name="checkbox"></td>';

	


	var model = {
        init: function() {
            if (!localStorage.anything) {
                localStorage.anything = JSON.stringify([]);
            } //else {
            	//alert("MISSING HTML 5 WEBSTORAGE - UPGRADE BROWSER BITCH!")
            //}
        },
        addName: function(name) { //mark here is the object, the specific mark or I guess, this.mark = mark
            var data = JSON.parse(localStorage.anything);
            data.push(name);
            localStorage.anything = JSON.stringify(data);
        },
        returnModel: function() {
            return JSON.parse(localStorage.anything);
        }
    };

    var octopus = {

    	addStudentName: function(markStr) {
    		model.addName({
    			content: markStr,
    			number: 4
    		});
    		view.render();
    	},

    	getMarks: function(){
    		return model.returnModel();
    	},


    	init: function(){
    		model.init();
    		view.init();
    	}

    };

    var view = {
    	init: function(){
    		this.tempMark = $('#tableNameOutput');
    		var btn = $('#studentNameSend');
    		var StudentNameinPut = $('#studentNameEnter');

    		// This will be the tick bit
    		

    		btn.click(function(e){
                octopus.addStudentName(StudentNameinPut.val());
                StudentNameinPut.val('');
                e.preventDefault();
            });
            view.render();
    	},

    	render: function(){
    		var htmlStr = '';
    		octopus.getMarks().forEach(function(mark2){
    			htmlStr += '<tr><th scope="row">' + mark2.content + newTableRowCheckBox + newTableRowCheckBox + newTableRowCheckBox + newTableRowCheckBox + '<td>' + mark2.number + '</td>' + '</tr>';
    		});		

    		this.tempMark.html( htmlStr );

        	$allCheckboxes = $('tbody input');
        	n = 4;
    		
        	console.log($allCheckboxes)

        	$($allCheckboxes).change(function(){
		        if($(this).is(':checked')) {
		        	n = n - 1
		            console.log(n);
		            
		        } else {
		        	n =  n + 1
		            console.log(n)
		            
		        }
		    });
    		

    	}
    };




    octopus.init();


});//final closure




</script>




 <?php include 'footer.php'; ?>