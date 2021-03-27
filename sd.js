function ajax_request(event,id,p2,p1,t,d) {
	var id = document.getElementById(id);
	var section = document.getElementById("section");
	var xhttp = new XMLHttpRequest();
	    if (d) {
	    	for (var j = section.length-1; j >0; j--) {
        	     section.remove(j);
               }
        xhttp.open("GET","gg.php?id="+event.target.value);

	    }
       else if(t){
         var groupe = document.getElementById("groupe");
         for (var j = groupe.length-1; j >0; j--) {
            	groupe.remove(j);
         }
         xhttp.open("GET","gg.php?id="+event.target.value+"&t="+t);

        }
       else{
       		var groupe = document.getElementById("groupe");

            for (var j = groupe.length-1; j >0; j--) {
        	    groupe.remove(j);
            }
         	for (var j = section.length-1; j >0; j--) {
        	   section.remove(j);
            }
       	       xhttp.open("GET","gg.php?id="+event.target.value);

       }

xhttp.onload = function (){
        var h = JSON.parse(xhttp.response);
      
        for (var i = 0; i < h.length; i++) {
	       var option = document.createElement("option");
              option.text = h[i][p1];
              option.value = h[i][p2];
               id.add(option);
            }

         }
xhttp.send();
}