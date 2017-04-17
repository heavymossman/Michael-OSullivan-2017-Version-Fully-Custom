// Space Invaders JS Main

var ship;

function setup() {
	createCanvas(800, 600);
	ship = new ship(); 
}

function draw() {
	background(51);
	ship.show();
}

function keyPressed() {
	if (keyCode === RIGHT_ARROW) {
		ship.move(1)
	} else if (keyCode === LEFT_ARROW) {
		ship.move(-1)
	}
}