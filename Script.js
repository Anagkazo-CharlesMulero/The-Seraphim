const header = document.querySelector("header");
window.addEventListener("scroll", function(){
    header.classList.toggle ("sticky", window.scrollY > 100);
});

function clock(){
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    var midday;

    hours = updateTime(hours);
    minutes = updateTime(minutes);
    seconds = updateTime(seconds);
    var name = "Chuck";

    midday = (hours >= 12) ? "PM" : "AM";

    document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds + midday;

    var time = setTimeout (function(){
            clock();
    }, 1000);

    if (hours > 12){
        var greeting = "GOOD MORNING, <span>Get Some Coffee.</span>";

    }
    if (hours >= 12 &&  hours <= 18){
        var greeting = "GOOD AFTERNOON, <span>Lunch?</span>";
    }
    if (hours >= 18 && hours <= 24){
        var greeting= "GOOD EVENING, <span>You're Gonna Make It!</span"; 
    }
    document.getElementById("greeting").innerHTML = greeting;
}

function updateTime(k){
if (k < 10){
    return "0" + k;
}else{return k;}
}

clock();

var i = 0;
var images = [];
var time = 5000;

images[0] = 'Chuck1.jpg';
images[1] = 'Happhy-birthday-Nyakwawa-4.jpg';
images[2] = 'Ignite-the-fire-copy2.jpg';
images[3] = 'Cornelius.jpg';

function changeImg(){
    document.slide.src = images[i];

    if(i < images.length - 1)
    {
        i++;}
        else{i=0;
    }
    setTimeout("changeImg()", time);
}

window.onload = changeImg;

