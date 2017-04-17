function header(){

	// Logo

	var logo = 'logo.png';

	$("#logo").replaceWith('<a class="navbar-brand" href="index.html" id="logo"><img src="' + logo + '"></a>');

	// Hero Headings

	var Headings = [
		
		"Web Engineer & Digital Campaigner",
		"Fighting for a fair Brexit",
		"Business for Brexit",
		"UK Economy is Growing"
	];

	var HTMLMainHeader = '%data%';

	var formattedMainHeader = HTMLMainHeader.replace("%data%", Headings[0]); //This is the main slogan on the homepage

	$("#mainHeader").append(formattedMainHeader);

	// Main Menu

	var menuItems = [
		"Home",
		"Github",
		"Complete Projects",
		"Blog",
		"Contact"
	];


	$(".menu-three").append(menuItems[2]); // Campaign Drop down Parent

	$(".menu-six").append(menuItems[5]); // Follow Us Drop down Parent

	$("#menu-one").replaceWith('<a class="nav-link" href="index.html" id="menu-one">' + menuItems[0] + '</a>');
	$("#menu-two").replaceWith('<a class="nav-link" href="https://github.com/heavymossman" id="menu-one" target="_blank">' + menuItems[1] + '</a>');
	$("#menu-four").replaceWith('<a class="nav-link" href="news.html" id="menu-one">' + menuItems[3] + '</a>');
	$("#menu-five").replaceWith('<a class="nav-link" href="contact.html" id="menu-one">' + menuItems[4] + '</a>');
	$("#menu-five").replaceWith('<a class="nav-link" href="#" id="menu-one">' + menuItems[5] + '</a>');

	var campaignDropdown = [
		
		"Labour Leave",
		"Snomee",
		"Diligence"
	];


	if (campaignDropdown.length > 0 ) {

		$("#campaignDropdown1").replaceWith('<a class="dropdown-item" href="no-single-market.html" id="campaignDropdown1">' + campaignDropdown[0] + '</a>');
		$("#campaignDropdown2").replaceWith('<a class="dropdown-item" href="#" id="campaignDropdown2">' + campaignDropdown[1] + '</a>');
		$("#campaignDropdown3").replaceWith('<a class="dropdown-item" href="#" id="campaignDropdown3">' + campaignDropdown[2] + '</a>');

	};


	var followUsDropdowqn = [

		"JS Reaction Tester",
		"Simple Quiz",
		"JS Image Slider",
		"Youtube Custom Search Engine - API/JSON",
		"Meme Generator",
		"JS URL Bookmarking App",
		"Should I buy this item?"
	];

	if (followUsDropdowqn.length > 0 ) {

		$("#followUsDropdowqn1").replaceWith('<a class="dropdown-item" href="reaction.html" id="followUsDropdowqn1">' + followUsDropdowqn[0] + '</a>');
		$("#followUsDropdowqn2").replaceWith('<a class="dropdown-item" href="jsquiz.html" id="followUsDropdowqn2">' + followUsDropdowqn[1] + '</a>');
		$("#followUsDropdowqn3").replaceWith('<a class="dropdown-item" href="simple-slider.html" id="followUsDropdowqn3">' + followUsDropdowqn[2] + '</a>');
		$("#followUsDropdowqn4").replaceWith('<a class="dropdown-item" href="YoutubeSearch.html" id="followUsDropdowqn4">' + followUsDropdowqn[3] + '</a>');
		$("#followUsDropdowqn5").replaceWith('<a class="dropdown-item" href="meme.html" id="followUsDropdowqn5">' + followUsDropdowqn[4] + '</a>');
		$("#followUsDropdowqn6").replaceWith('<a class="dropdown-item" href="bookmarker.html" id="followUsDropdowqn6">' + followUsDropdowqn[5] + '</a>');
		$("#followUsDropdowqn7").replaceWith('<a class="dropdown-item" href="shouldbuy.html" id="followUsDropdowqn7">' + followUsDropdowqn[6] + '</a>');
	};

};

header();



// Work Experience Section using dot noation

var work = {

	"jobs" : [

		{
			"employer" : "Labour Future",
			"title" : "Head of Digital",
			"location" : "Westminister, London", 
			"Dates" : "September 2016 - Present",
			"Description" : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
		},

		{
			"employer" : "Vote Leave",
			"title" : "Digital/Labour Coordinator",
			"location" : "Westminister, London", 
			"Dates" : "January 2016 - June 2016",
			"Description" : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
		},

		{
			"employer" : "Labour Future",
			"title" : "Head of Digital",
			"location" : "Westminister, London", 
			"Dates" : "September 2016 - Present",
			"Description" : "UPDATE THIS WHEN YOU HAVE TIME"
		},

		{
			"employer" : "Labour Future",
			"title" : "Head of Digital",
			"location" : "Westminister, London", 
			"Dates" : "September 2016 - Present",
			"Description" : "UPDATE THIS WHEN YOU HAVE TIME"
		}

	]
};

work.display = function() {


		var newEmployer = work.jobs[0].employer;

		newEmployer = "<a href='#'>" + newEmployer + "</a>";  

		var newTitle = work.jobs[0].title; 

		$("#employer1").append(newEmployer + " - " + newTitle);

		var newDates = work.jobs[0].Dates;

		var newLocation = work.jobs[0].location;

		$("#dates1").append(newDates + ", " + newLocation);

		var newDescription = work.jobs[0].Description;

		$("#description1").append(newDescription);

		var newEmployer1 = work.jobs[1].employer;

		newEmployer1 = "<a href='#'>" + newEmployer1 + "</a>";  

		var newTitle1 = work.jobs[1].title; 

		$("#employer2").append(newEmployer1 + " - " + newTitle1);

		var newDates1 = work.jobs[1].Dates;

		var newLocation1 = work.jobs[1].location;

		$("#dates2").append(newDates1 + ", " + newLocation1);

		var newDescription1 = work.jobs[1].Description;

		$("#description2").append(newDescription1);

};

work.display();

var biography = {

	"name" : "Michael O'Sullivan",
	"age" : 33, 
	"location" : "London", 
	"skills" : ["PHP", "Javascript", "HTML/CSS", "LESS", "Python"],
	"biopic" : "https://pbs.twimg.com/profile_images/491578108063936512/0ixtr84I_bigger.jpeg",
	"contacts" : {
		"mobile" : "07869666955",
		"email" : "email@michaelosullivan.london",
		"twitter" : "@heavymossman",
		"github" : "heavymossman"
	}
}



$("#bioName").append(biography.name);
$("#bioAge").append(biography.age);
$("#bioLoc").append(biography.location);


var newSkillsting = biography.skills.join(", "); //prints out the skills array but adds in a comma and space after each entry

$("#bioSkills").append(newSkillsting);

$("#contacts").append(biography.contacts);

$("#mobile").append(biography.contacts.mobile);


$("#bioPic").replaceWith('<img src="' + biography.biopic + '"class="img-fluid" id="bioPic">');


var education = {

	"schools" : [

		{
			"school" : "Open University", 
			"city" : "London",
			"majors" : "Politics, Philosophy and Economics",
			"minors" : "Politiical endeavours, campaigning, data science",
			"year" : 2017
		},

		{
			"school" : "Udacity, Standford University", 
			"city" : "Stanford, CA",
			"majors" : "Frontend Web Devlopment",
			"minors" : "Whatevers",
			"year" : 2017
		},

		{
			"school" : "Leeds Met University", 
			"city" : "Leeds",
			"majors" : "Music Production",
			"minors" : "Radio broadcasting, media dvelopment",
			"year" : 2005
		}

	],
	"onlinecourses" : [

		{
			"course" : "Javascript expert",
			"school" : "Udacity", 
			"year" : "2016-2017"
		}
	]
}


education.display = function() {

	for (whateves in education.schools) {

		var schoolEntry = '<div class="school-entry"></div>';

		var schooName = '<p>School: <strong> %data% </strong></p>';
		var schoolCity = '<p>City: <strong> %data% </strong></p>';
		var schoomMajor = '<p>Major:<strong> %data% </strong></p>';
		var schoolMinor = '<p>Minor: <strong> %data% </strong></p>';
		var schoolCompleted = '<p>Year completed: <strong> %data% </strong></p>';



		var formattedSchoolName = schooName.replace("%data%", education.schools[whateves].school);
		$(".school-entry").append(formattedSchoolName);

		var formattedSchoolCity = schoolCity.replace("%data%", education.schools[whateves].city);
		$(".school-entry").append(formattedSchoolCity);

		var formattedMajor = schoomMajor.replace("%data%", education.schools[whateves].majors);
		$(".school-entry").append(formattedMajor);


		var formattedMinor = schoolMinor.replace("%data%", education.schools[whateves].minors);
		$(".school-entry").append(formattedMinor);


		var formattedyear = schoolCompleted.replace("%data%", education.schools[whateves].year);
		$(".school-entry").append(formattedyear);



		var hr = '<hr>';

		$(".school-entry:last").append(hr);

	};

	for (whatever in education.onlinecourses) {

		var onlineCourses = '<div class="course-entry"></div>';

		var course = '<p>Course: %data% </p>';
		var school = '<p>School: %data% </p>';
		var year = '<p>Year: %data% </p>';



		console.log(formattedCourse)

		var onlineMessage = '<h2 class="py-1">Online Courses</h2>';

		$(".course-entry").append(onlineMessage);

		var formattedCourse = course.replace("%data%", education.onlinecourses[whatever].course);
		$(".course-entry").append(formattedCourse);


		$(".course-entry:last").append(hr);
	}
}

education.display(); 



// GOOGLE MAPS

 function initMap() {
        var uluru = {lat: 51.4963751, lng: -0.1305998};
        var usa = {lat: 37.4249706, lng: -122.1878931};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        var marker1 = new google.maps.Marker({
          position: usa,
          map: map
        });
}

for (contact in biography.contacts) {

	var details = '<p> <strong> %data% </strong></p>';

	var formattedContacts = details.replace("%data%", biography.contacts[contact]); 
	$(".contacts").append(formattedContacts);
} 


// Log user clicks in console

clickLocations = [];

function logClicks(x,y) {
  clickLocations.push(
    {
      x: x,
      y: y
    }
  );
  console.log('x location: ' + x + '; y location: ' + y);
}

$(document).click(function(loc) {
  var x = loc.pageX;
  var y = loc.pageY;

  logClicks(x,y);
});





var workNew = {
  "jobs": [
    {
      "employer": "Udacity",
      "title": "Course Developer",
      "location": "Mountain View, CA",
      "dates": "Feb 2014 - Current",
      "description": "Who moved my cheese cheesy feet cauliflower cheese. Queso taleggio when the cheese comes out everybody's happy airedale ricotta cheese and wine paneer camembert de normandie. Swiss mozzarella cheese slices feta fromage frais airedale swiss cheesecake. Hard cheese blue castello halloumi parmesan say cheese stinking bishop jarlsberg."
    },
    {
      "employer": "LearnBIG",
      "title": "Software Engineer",
      "location": "Seattle, WA",
      "dates": "May 2013 - Jan 2014",
      "description": "Who moved my cheese cheesy feet cauliflower cheese. Queso taleggio when the cheese comes out everybody's happy airedale ricotta cheese and wine paneer camembert de normandie. Swiss mozzarella cheese slices feta fromage frais airedale swiss cheesecake. Hard cheese blue castello halloumi parmesan say cheese stinking bishop jarlsberg."
    },
    {
      "employer": "LEAD Academy Charter High School",
      "title": "Science Teacher",
      "location": "Nashville, TN",
      "dates": "Jul 2012 - May 2013",
      "description": "Who moved my cheese cheesy feet cauliflower cheese. Queso taleggio when the cheese comes out everybody's happy airedale ricotta cheese and wine paneer camembert de normandie. Swiss mozzarella cheese slices feta fromage frais airedale swiss cheesecake. Hard cheese blue castello halloumi parmesan say cheese stinking bishop jarlsberg."
    },
    {
      "employer": "Stratford High School",
      "title": "Science Teacher",
      "location": "Nashville, TN",
      "dates": "Jun 2009 - Jun 2012",
      "description": "Who moved my cheese cheesy feet cauliflower cheese. Queso taleggio when the cheese comes out everybody's happy airedale ricotta cheese and wine paneer camembert de normandie. Swiss mozzarella cheese slices feta fromage frais airedale swiss cheesecake. Hard cheese blue castello halloumi parmesan say cheese stinking bishop jarlsberg."
    }
  ]
};

// Your code goes here! Let me help you get started

function locationizer(work_obj) {

	var allofThem = [];

	for (place in work_obj.jobs) {

		var loc = work_obj.jobs[place].location;

		allofThem.push(loc);
	}
	return allofThem;
}

// Did locationizer() work? This line will tell you!
console.log(locationizer(workNew));

/*


for (whatever in education.onlinecourses) {

		var onlineCourses = '<div class="course-entry"></div>';

		var course = '<p>Course: %data% </p>';
		var school = '<p>School: %data% </p>';
		var year = '<p>Year: %data% </p>';



		console.log(formattedCourse)

		var onlineMessage = '<h2 class="py-1">Online Courses</h2>';

		$(".course-entry").append(onlineMessage);

		var formattedCourse = course.replace("%data%", education.onlinecourses[whatever].course);
		$(".course-entry").append(formattedCourse);


		$(".course-entry:last").append(hr);
	}


*/