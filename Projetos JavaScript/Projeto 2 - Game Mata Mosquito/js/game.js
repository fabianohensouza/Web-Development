

//creating theses variables here to be available in the global scope
var height = 0
var width = 0

function adjustSizeGameStage() {
	/*The methods innerHeight and innerWidth of window object show the
	current height and width of the browser window*/
	height = window.innerHeight
	width = window.innerWidth
	
	console.log(height, width)
}


