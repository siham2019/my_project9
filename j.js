
function show(n) {
if (n===2) {

document.getElementById('img').style.backgroundImage="url('df.jpg')";
var g=document.getElementsByTagName('h4');
g[0].innerHTML="le chef de groupe peut proposer planning d'examen";
document.getElementById('et').style.display="none";
document.getElementById('dff').style.display="";
var y=document.getElementsByClassName('m');
y[0].style.backgroundColor="gray";
y[1].style.backgroundColor="white";
}
if (n===1) {

document.getElementById('img').style.backgroundImage="url('h.jpg')";
var g=document.getElementsByTagName('h4');
g[0].innerHTML="connaitre emploi et salle d'examen";

document.getElementById('et').style.display="";
document.getElementById('dff').style.display="none";
var y=document.getElementsByClassName('m');
y[0].style.backgroundColor="white";
y[1].style.backgroundColor="gray";
}

}
var i=2;
showSlides();
function showSlides() {
show(i);
i--;
if (i==0) {
	i=2;
}
 setTimeout(showSlides, 4000);
}

