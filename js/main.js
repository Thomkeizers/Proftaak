
function play(playID) {
//Determining the whole element.
//Element gets printed in the terminal.
var songId = playID;
    //Determining the whole element.
    //Element gets printed in the terminal.
    var songId = playID;
    console.log(songId);
 
    //Putting the mp3 source in variable.
    var songname = $(songId).attr("songname");
    // var songNumber = $(songId.attr("nummer"));


    //Audio element in variable.
    var play = document.getElementById("audio");


    //Putting the mp3 source in variable.
    var songname = $(songId).attr("songname");
    
    //Audio element in variable.
    var play = document.getElementById("audio");

    //Setting the source of audio element before playing it.
    document.getElementById("audio").setAttribute('src', 'audio/'+ songname);
    play.play();

    //Starting the wave animation with Jquery

    $(".content__tabledata__wrapper-line1").css("animation", "lineOne 1.8s infinite");
    $(".content__tabledata__wrapper-line2").css("animation", "lineTwo 2s infinite");
    $(".content__tabledata__wrapper-line3").css("animation", "lineThree 1.5s infinite");
    $(".content__tabledata__wrapper-line4").css("animation", "lineFour 1.9s infinite");
    $(".content__tabledata__wrapper-line5").css("animation", "lineFive 1.4s infinite");
    $(".content__tabledata__wrapper-line6").css("animation", "lineSix 1.7s infinite");
    $(".content__tabledata__wrapper-line7").css("animation", "lineSeven 1.8s infinite");   
}

function pauzeren() 
{
    //Stoping the animation with Jquery.

    $(".content__tabledata__wrapper-line1").css("animation", "lineOne 1.8s none");
    $(".content__tabledata__wrapper-line2").css("animation", "lineTwo 2s none");
    $(".content__tabledata__wrapper-line3").css("animation", "lineThree 1.5s none");
    $(".content__tabledata__wrapper-line4").css("animation", "lineFour 1.9s none");
    $(".content__tabledata__wrapper-line5").css("animation", "lineFive 1.4s none");
    $(".content__tabledata__wrapper-line6").css("animation", "lineSix 1.7s none");
    $(".content__tabledata__wrapper-line7").css("animation", "lineSeven 1.8s none");
}

function resume()
{
    //resuming the animation after pause.
    $(".content__tabledata__wrapper-line1").css("animation", "lineOne 1.8s infinite");
    $(".content__tabledata__wrapper-line2").css("animation", "lineTwo 2s infinite");
    $(".content__tabledata__wrapper-line3").css("animation", "lineThree 1.5s infinite");
    $(".content__tabledata__wrapper-line4").css("animation", "lineFour 1.9s infinite");
    $(".content__tabledata__wrapper-line5").css("animation", "lineFive 1.4s infinite");
    $(".content__tabledata__wrapper-line6").css("animation", "lineSix 1.7s infinite");
    $(".content__tabledata__wrapper-line7").css("animation", "lineSeven 1.8s infinite");
}

function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
}

