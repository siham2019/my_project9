
function showtab(a) {
	alert("mok");
	var u=document.getElementsByClassName('az');
	var t=document.getElementsByTagName('button');
	if (a===2) {
		u[0].style.visibility="visible";
		u[0].style.height="266px";
	 t[a].style.color='gray';
window.location="crud2mod.php";

	}

}

function show(a) {
	var u=document.getElementsByClassName('az');
	if (a===1) {

      u[0].style.visibility="visible";
      u[0].style.height="266px";
      u[1].style.visibility="hidden";
      u[1].style.height="0";
	}
	if (a===2) {

      u[1].style.visibility="visible";
      u[1].style.height="130px";
      u[0].style.visibility="hidden";
      u[0].style.height="0";
	}
}
