

//creating theses variables here to be available in the global scope
var height = 0
var width = 0
var lives = 1
var time = 80
var level = window.location.search

//Removing the character ? of string level
level = level.replace('?', '')

	switch(level) {
		case 'normal':
			leveltime = 3000
			break
			
		case 'dificil':
			leveltime = 2000
			break
					
		case 'chucknorris':
			leveltime = 1000
			break
	}

function adjustSizeGameStage() {
	/*The methods innerHeight and innerWidth of window object show the
	current height and width of the browser window*/
	height = window.innerHeight
	width = window.innerWidth
}

adjustSizeGameStage()

var chronometer = setInterval(function() {
	
	time -= 1
	
	if(time < 0) {
		clearInterval(chronometer)
		window.location.href = 'victory.html'
	}
	else {
		document.getElementById('chronometer').innerHTML = time
	}
}, 1000)

function randomicPosition() {

	//Removing the mosquito element by its ID (if Exists)
	if (document.getElementById('mosquito')) {
		document.getElementById('mosquito').remove()

		//Removing the life points
		if(lives > 3){
			window.location.href = 'game_over.html'
		}
		else {
			document.getElementById('life' + lives).src = "images/coracao_vazio.png"
			lives ++
		}
	}


	/*creating variables to attributing randomics value of x/y positions
	using the method random of Math object (Values 0.0 to 1.0) and
	Multiply by variables height and width and roundind the values
	*Decreasing 90px to better position of the element*/
	var positionX = Math.floor(Math.random() * width) - 90
	var positionY = Math.floor(Math.random() * height) - 90

	//Controling to the position don't be less than 0
	positionX = (positionX < 0) ? 0 : positionX
	positionY = (positionY < 0) ? 0 : positionY

	console.log(positionX, positionY)

	var mosquitoclass = randomicSize()

	//creating the HTML element referenced to a variable
	var mosquito = document.createElement('img')
	mosquito.src = 'images/mosquito.png'
	mosquito.className = ('mosquito' + mosquitoclass) + ' ' + randomicSide()
	mosquito.style.left = (positionX + 'px')
	mosquito.style.top = (positionY + 'px')	
	mosquito.style.position = 'absolute'
	mosquito.id = 'mosquito'
	
	//removing the mosquito after click
	mosquito.onclick = function() {
		this.remove()
	}

	//Inserting the element in the body
	document.body.appendChild(mosquito)
}

function randomicSize() {
	var mosquitoclass = Math.ceil(Math.random() *3)
	return mosquitoclass
}

function randomicSide() {
	var mosquitoside = Math.ceil(Math.random() *2)
	switch(mosquitoside){
		case 1:
			return 'sideA'

		case 2:
			return 'sideB'

	}
}