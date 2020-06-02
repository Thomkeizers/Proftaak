function play(playID) {
    stop();
    //Determining the whole element.
    //Element gets printed in the terminal.
    var songId = playID;
    console.log(songId);

    //Putting the mp3 source in variable.
    var songname = $(songId).attr("songname");
    
    //Audio element in variable.
    var play = document.getElementById("audio");

    document.getElementById("audio").setAttribute('src', 'audio/'+ songname);
    play.play();

    alert("hallo");


    let isPaused = play.paused;
    
    if(isPaused != true){
        $(".content__tabledata__wrapper-line1").css("animation", "lineOne 1.8s infinite");
        $(".content__tabledata__wrapper-line2").css("animation", "lineTwo 2s infinite");
        $(".content__tabledata__wrapper-line3").css("animation", "lineThree 1.5s infinite");
        $(".content__tabledata__wrapper-line4").css("animation", "lineFour 1.9s infinite");
        $(".content__tabledata__wrapper-line5").css("animation", "lineFive 1.4s infinite");
        $(".content__tabledata__wrapper-line6").css("animation", "lineSix 1.7s infinite");
        $(".content__tabledata__wrapper-line7").css("animation", "lineSeven 1.8s infinite");
    }
    else 
    {
      alert("Hallo");
    }
    
}

function pause() 
{
    alert("This is not how it should work ")
    alert("dit werkt niet");
}

