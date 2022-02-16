var my = document.querySelector("#aud");
my.currentTime = 25;
var kok = document.querySelector("#kokak");
var count=true;

kok.addEventListener("click", function(){
    if(count){
        document.querySelector(".dancer").style.display = "initial";
        my.play();
        
        count=false;
    }else{
        document.querySelector(".dancer").style.display = "none";
        my.pause();
        count=true;
    }
})

var menubtn = document.querySelector("#menu");
var sw = false;
var men = document.querySelector("#men");
menubtn.addEventListener("click", showMenu);
function showMenu() {
    if(sw){
        document.querySelector("#menu-list").style.display = "none";
        men.src = "https://img.icons8.com/material-outlined/48/000000/menu--v1.png";
        sw=false;
    }else{
        document.querySelector("#menu-list").style.display = "block";
        men.src = "https://img.icons8.com/material-outlined/48/000000/delete-sign.png";
        sw=true;
    }
}

var cform = document.querySelector("#closeform");
var rform = document.querySelector("#register");

cform.addEventListener("click", function() {
    rform.style.display = "none";
    var a = document.querySelector("#body"),
        b = document.querySelector("#kokak");

    a.style.filter = "blur(0px)" ,b.style.filter = "blur(0px)";
    a.style.pointerEvents = "all";
    b.style.pointerEvents = "all";
})

var tform = document.querySelector("#closeform2");
var t2form = document.querySelector(".terms");

tform.addEventListener("click", function() {
    t2form.style.display = "none";
    var a = document.querySelector("#body"),
        b = document.querySelector("#kokak");

    a.style.filter = "blur(0px)" ,b.style.filter = "blur(0px)";
    a.style.pointerEvents = "all";
    b.style.pointerEvents = "all";
})
document.querySelector("#b").addEventListener("click", function() {
    t2form.style.display = "block";
    showMenu();
    pointerX();
})

document.querySelector("#a").addEventListener("click", function() {
    rform.style.display = "block";
    showMenu();
    pointerX();
})

function pointerX() {
    var a = document.querySelector("#body"),
        b = document.querySelector("#kokak");

    a.style.filter = "blur(10px)" ,b.style.filter = "blur(10px)";
    a.style.pointerEvents = "none";
    b.style.pointerEvents = "none";
}