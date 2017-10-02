console.log("WORKING")

var ViewModel = function() {

	var catName = 'Tabby';

	this.clickCount = ko.observable(0); //0 is the default setting for this event listeners
	this.name = ko.observable(catName);
	this.imgSrc = ko.observable('https://i.pinimg.com/736x/2e/18/ab/2e18ab3f71b73c6719b04c81625bb922--cat-cute-cute-pets.jpg');
	this.imgAttribution = ko.observable('https://i.pinimg.com/736x/2e/18/ab/2e18ab3f71b73c6719b04c81625bb922--cat-cute-cute-pets.jpg');

	this.incrementCounter = function() {
		this.clickCount(this.clickCount() + 1);


	};
}

ko.applyBindings(new ViewModel());