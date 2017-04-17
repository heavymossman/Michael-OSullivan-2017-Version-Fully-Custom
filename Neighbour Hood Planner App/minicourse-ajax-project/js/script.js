
function loadData() {

    var $body = $('body');
    var $wikiElem = $('#wikipedia-links');
    var $nytHeaderElem = $('#nytimes-header');
    var $nytElem = $('#nytimes-articles');
    var $greeting = $('#greeting');

    // clear out old data before new request
    $wikiElem.text("");
    $nytElem.text("");

    // load streetview

    // YOUR CODE GOES HERE!

    var street = $('#street').val();

    var city = $('#city').val();

    var address = street + " " + city;

    

    var streetView = "https://maps.googleapis.com/maps/api/streetview?&size=600x400&location=";

    console.log('<img src="' + streetView + street + "," + city + '">');

    $greeting.text('Okay, you would like to live at ' + street + ", " + city);


    $( 'body' ).append( '<img class="bgimg" src="' + streetView + street + "," + city + '">' );


    //NYT Ajax or Ajaj requests


    // Built by LucyBot. www.lucybot.com
    var url = "https://api.nytimes.com/svc/search/v2/articlesearch.json"; //sets the API link
    url += '?' + $.param({ //adds in the required features
      'api-key': "3443d4dc0f9262dd0afb37576c4dd826:13:75060679",
      'q': address, //search query
      'sort': "newest", //how is sorted
      'hl': "true" //highlight the matching search term in the output
    });
    $.ajax({
      url: url,
      method: 'GET',
    }).done(function(result) {

        $nytHeaderElem.text('New York Times Articles About ' + address); //this just updates the welcome message

        results = result.response.docs; // sets the parameter result to new variable results, response is top level from NYT as is docs. 
        console.log(results)

        if (results == 0) {
            $nytHeaderElem.text("Sorry, NO NYT Articles could not be loaded for the search: " + address + ". Please search again.");
        } //Display error is there is no results returned from the NYT API

        for (var i = 0; i < results.length; i++){   // for loop to cycle through all the indivudal output articles from API and add in HTML
            var result = results[i]; // could use this here as well, selects the CURRENT item in the cycle
            $nytElem.append('<li class="article">' + 
                '<a target="_blank" href="' + result.web_url + '">' + result.headline.main + '</a>' + 
                '<p>' + result.snippet + '</p>' + 
                '<p>Article Published On:<strong>' + result.pub_date + '</strong></p>' +
                '</li>');};


      console.log(result);
    }).fail(function(err) {
        $nytHeaderElem.text("Sorry, NYT Articles could not be loaded due to a technical reason"); //ERROR message if API fails 
        throw err;
    });

    //Error handling for JSONP

    var wikiRequestTimeout = setTimeout(function(){
        $wikiElem.text("failed to get wikipedia resources, tech error"); 
    }, 8000); // so this handles the errors - if the api doesn't return within 8 seconds, then display this above error message. 
     
    $.ajax({
            url: "https://en.wikipedia.org/w/api.php?action=opensearch&search=" + city + "&format=json&callback=wikiCallback",  
            dataType: "jsonp",
            success: function (response) {

               var articleList = response[1]; //Response was found in the NETWORK tab of the wikipedia article API, 1 was an array called 1 where the articles were stored

               console.log("Article List: " + articleList)

               for (var i = 0; i < articleList.length; i++) {

                    articleStr = articleList[i]; 
                    var url = 'http://en.wikipedia.org/wiki/' + articleStr; 
                    $wikiElem.append('<li><a target="_blank" href="' + url + '">' + 
                        articleStr + '</a></li>');
               };

               clearTimeout(wikiRequestTimeout); //clear the timeout error call

            },
            error: function (errorMessage) {

            }
    });



    return false;



};

$('#form-container').submit(loadData);


