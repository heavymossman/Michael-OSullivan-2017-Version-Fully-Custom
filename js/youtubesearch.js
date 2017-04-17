// Searchbar Handler - to make it animate 
$(function(){
	var searchField = $('#query');
	var icon = $('#search-btn');
	
	// Focus Event Handler
	$(searchField).on('focus', function(){
		$(this).animate({
			width:'90%'
		},400);
	});
	
	// Blur Event Handler
	$(searchField).on('blur', function(){
		if(searchField.val() == ''){
			$(searchField).animate({
				width:'45%'
			},400, function(){});
		}
	});
	
	$('#search-form').submit(function(e){
		e.preventDefault();
	});


});






function search() {

	// Clear Results so they are blank

	$('#results').html('');

	$('#buttons').html('');


	//Get Form Input

	q = $('#query').val();

	// Run GET Request  on Youtube API   //.get is a jQuery feature

	$.get (

		"https://www.googleapis.com/youtube/v3/search",{

			part: 'snippet, id',
			q: q, 
			type: 'video',
			home: true, 
			key:  'AIzaSyCoMsjsJH6wg6JoZTqABUfK6bXZ8fpxayM'},

		function(data) {

			var nextPageToken = data.nextPageToken; //data. allows us to access the data parameters, like title etc
			var prevPageToken = data.prevPageToken;

			// Log details
			console.log(data);

			$.each(data.items, function(i, item){

				var output = getOutput(item); 

				console.log(output)

				//Display Results

				$('#results').append(output);

			});


			var buttons = getButtons(prevPageToken, nextPageToken); 

			//Display the buttons 

			$('#buttons').append(buttons);
		}

	);

}

// Next Page Function 


function nextPage(){
	var token = $('#next-button').data('token');
	var q = $('#next-button').data('query');

	// Clear Results
	$('#results').html('');
	$('#buttons').html('');
	
	// Get Form Input
	q = $('#query').val();


	$.get (

		"https://www.googleapis.com/youtube/v3/search",{

			part: 'snippet, id',
			q: q,
			pageToken: token, 
			type: 'video',
			home: true, 
			key:  'AIzaSyCoMsjsJH6wg6JoZTqABUfK6bXZ8fpxayM'},

		function(data) {

			var nextPageToken = data.nextPageToken; //data. allows us to access the data parameters, like title etc
			var prevPageToken = data.prevPageToken;

			// Log details
			console.log(data);

			$.each(data.items, function(i, item){

				var output = getOutput(item); 

				console.log(output)

				//Display Results

				$('#results').append(output);

			});


			var buttons = getButtons(prevPageToken, nextPageToken); 

			//Display the buttons 

			$('#buttons').append(buttons);
		}

	);

}

// Prev Page Function 


function prevPage(){
	var token = $('#prev-button').data('token');
	var q = $('#prev-button').data('query');

	// Clear Results
	$('#results').html('');
	$('#buttons').html('');
	
	// Get Form Input
	q = $('#query').val();


	$.get (

		"https://www.googleapis.com/youtube/v3/search",{

			part: 'snippet, id',
			q: q, 
			pageToken: token,
			type: 'video',
			home: true, 
			key:  'AIzaSyCoMsjsJH6wg6JoZTqABUfK6bXZ8fpxayM'},

		function(data) {

			var nextPageToken = data.nextPageToken; //data. allows us to access the data parameters, like title etc
			var prevPageToken = data.prevPageToken;

			// Log details
			console.log(data);

			$.each(data.items, function(i, item){

				var output = getOutput(item); 

				console.log(output)

				//Display Results

				$('#results').append(output);

			});


			var buttons = getButtons(prevPageToken, nextPageToken); 

			//Display the buttons 

			$('#buttons').append(buttons);
		}

	);

}



// Build the results OUTPUT

function getOutput(item) {

	var videoId = item.id.videoId;

	var title = item.snippet.title;

	var description = item.snippet.description;

	var thumb = item.snippet.thumbnails.high.url;  // this gives us the high quality thumbnail

	var channelTitle = item.snippet.channelTitle;

	var videoDate = item.snippet.publishedAt;

	var videoURL = "https://www.youtube.com/watch?v=" + videoId; 

	var videoEmbed = "https://www.youtube.com/embed/" + videoId;

	console.log(videoURL)


	// Build the output STRING

	var output = '<div class="row py-1">' +

	'<div class="col-md-4">' +

		'<img src="'+thumb+'" class="img-fluid">' +  

	'</div>' + 

	'<div class="col-md-8">' + 

		'<h3><a class="various fancybox.iframe" href="'+videoEmbed+'">'+title+'</a></h3>' +

		'<p class="small">By <span class="cTitle">'+channelTitle+'</span> on '+videoDate+'</p>' + 

		'<p>'+description+'</p>' + 

		'<a href="'+videoURL+'" target="_blank">Link to video</a>' + 

	'</div>' + 

	'</div><!--row-->' + 

	'<div class="clearfix"></div>' + 

	''; // this ends our creation 

	return output;

}


// Build the buttons
function getButtons(prevPageToken, nextPageToken){

	if(!prevPageToken){
		var btnoutput = '<div class="button-container">'+'<button id="next-button" class="paging-button btn btn-secondary" data-token="'+nextPageToken+'" data-query="'+q+'"' +
		'onclick="nextPage();">Next Page</button>&nbsp;</div>';
	} else {

		var btnoutput = '<div class="button-container">'+
		'<button id="prev-button" class="paging-button btn btn-secondary" data-token="'+prevPageToken+'" data-query="'+q+'"' +
		'onclick="prevPage();">Prev Page</button>' +
		'&nbsp;<button id="next-button" class="paging-button btn btn-secondary" data-token="'+nextPageToken+'" data-query="'+q+'"' +
		'onclick="nextPage();">Next Page</button></div>';
	}
	
	return btnoutput;
}