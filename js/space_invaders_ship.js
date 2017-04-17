function ship() {
	this.x = width/2;

	this.show = function() {
		fill(255);
		rectMode(CENTER);
		rect(this.x, height-50, 50, 70, 100);

	};

	this.move = function (dir) {
		this.x += dir+5;
	}
}