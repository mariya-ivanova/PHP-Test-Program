// set the date we're counting down to
var target_date = new Date().getTime()+ 90000;
 
// variables for time units
var days, hours, minutes, seconds;
 
// get tag element
var countdown = document.getElementById("countdown");
 
// update the tag with id "countdown" every 1 second
setInterval(function () {

    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    // do some time calculations

	if(seconds_left>0){	
		minutes = parseInt(seconds_left / 60);
		seconds = parseInt(seconds_left % 60);
     
		// format countdown string + set tag value
		countdown.innerHTML = minutes + "m, " + seconds + "s";  
	}
	
}, 1000);