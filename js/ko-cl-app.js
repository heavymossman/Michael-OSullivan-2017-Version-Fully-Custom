

var ViewModel = function() {

	var catName = 'Tabby';

	//LEVELS:

	

	this.clickCount = ko.observable(0); //0 is the default setting for this event listeners
	this.name = ko.observable(catName);
	this.imgSrc = ko.observable('https://i.pinimg.com/736x/2e/18/ab/2e18ab3f71b73c6719b04c81625bb922--cat-cute-cute-pets.jpg');
	this.imgAttribution = ko.observable('https://i.pinimg.com/736x/2e/18/ab/2e18ab3f71b73c6719b04c81625bb922--cat-cute-cute-pets.jpg');
	this.catLevel = ko.observable(0);
	this.nickNames = ko.observableArray(['Momo', 'Lewis', 'Cookie', 'Fluffy']);

	this.incrementCounter = function() {
		this.clickCount(this.clickCount() + 1);

	};



	this.catLevel = ko.computed(function(){

		if (this.clickCount() <= 10){

			$('#cat-level').html("Kitten");

		} else if (this.clickCount() <= 20){

			$('#cat-level').html("Young Cat");

		} else {

			$('#cat-level').html("Adult Cat");
		}

	}, this);

	


}

ko.applyBindings(new ViewModel());