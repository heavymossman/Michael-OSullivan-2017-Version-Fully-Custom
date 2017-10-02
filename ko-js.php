<?php include 'header.php'; ?>

	<div class="container mt-2">

		<div class="row">

			<div class="col-md-12 p-2">

				<h1>Knock Out JS</h1>

				    <ul id="cat-list"></ul>
				    <div id="cat">
				    	<h2 id="cat-level"></h2>
				        <h2 data-bind="text: name" id="cat-name"></h2>
				        <div data-bind="text: clickCount" id="cat-count"></div> <!-- text means the text you want to display -->
				        <img data-bind="click: incrementCounter, attr: {src: imgSrc}" id="cat-img" src="" alt="cute cat" class="img-fluid" width="50%">

				    </div>

				    <div>
				    	<h4>Nick Names Bitches</h4>
					    <ul data-bind="foreach: nickNames">

					    	<li data-bind="text: $data"></li>

					    </ul>

					</div>
					
			</div>

		</div>

	</div>



<?php include 'footer-bootstrap.php'; ?>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js'></script>

<script src="js/ko-cl-app.js"></script>

 <?php include 'footer.php'; ?>