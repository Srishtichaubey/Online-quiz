function check5(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
	var question5 = document.quiz.question5.value;
	var correct = 0;


	if (question1 == "HP") {
		correct++;
}
	if (question2 == "1995") {
		correct++;
}	
	if (question3 == "echo") {
		correct++;
	}
	if (question4 == "true") {
		correct++;
	}
	if (question5 == "OSP") {
		correct++;
	}
	
	var pictures = ["win.gif","win.gif", "meh.jpeg","meh.jpeg", "lose.gif","lose.gif"];
	var messages = ["Great job!","good", "That's just okay","Believe in yourself","You really need to do better","Try a little harder"];
	var score;

	if (correct == 0) {
		score = 5;
	}

	if (correct == 1) {
		score = 4;
	}

	if (correct == 2) {
		score = 3;
	}
	if (correct == 3 ) {
		score = 2;
	}
	
	if (correct == 4 ) {
		score = 1;
	}
	if (correct == 5 ) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";
	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
	document.getElementById("picture").src = pictures[score];
	}
	