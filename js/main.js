
function play(playID) {
    stop();
//Determining the whole element.
//Element gets printed in the terminal.
var songId = playID;
    console.log(songId);
 
//Putting the mp3 source in variable.
var songname = $(songId).attr("songname");
// var songNumber = $(songId.attr("nummer"));

 
    $("#pausebutton").prop('disabled', false);
    $("#stopbutton").prop('disabled', false);

//Audio element in variable.
var play = document.getElementById("audio");
 
if(play.currentTime != 0)
    {
        play.play();
    }
 
else
    {
        document.getElementById("audio").setAttribute('src', 'audio/'+ songname);
        play.play();
    }

    $("#playheading").text("Playing");
}
 
function pause(status) {
 
var kip = status;
    console.log(kip);
 
var pause = document.getElementById("audio");
var numberId = $(kip).attr("number");
 
    console.log(numberId);
 

 
if(pause.paused)
    {
        pause.play();
        $("#pausebutton").text("Pause Audio");
    }
else {
        pause.pause();
        $("#pausebutton").text("Resume");
    }
}
 
function stop() {
    $("#playheading").text("Play");
var stop = document.getElementById("audio");
    stop.pause();
    stop.currentTime = 0;
}

 
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
