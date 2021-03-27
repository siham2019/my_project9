function ajax_request(event,id,p2,p1,t,d) {
  var str ;
	var id = document.getElementById(id);
	var section = document.getElementById("section");
	var xhttp = new XMLHttpRequest();
	    if (d) {
	    	for (var j = section.length-1; j >=0; j--) {
        	     section.remove(j);
               }
               str = "choisir un section";
        xhttp.open("GET","gg.php?id="+event.target.value);

	    }
       else if(t){
         var groupe = document.getElementById("groupe");
         for (var j = groupe.length-1; j >=0; j--) {
            	groupe.remove(j);
         }
         str = "choisir un groupe";
         xhttp.open("GET","gg.php?id="+event.target.value+"&t="+t);

        }
       else{
       		var groupe = document.getElementById("groupe");

            for (var j = groupe.length-1; j >=0; j--) {
        	    groupe.remove(j);
            }
         	for (var j = section.length-1; j >=0; j--) {
        	   section.remove(j);
            }
       	       var option= document.createElement("option");
              option.text = "selectionner groupe";
              groupe.add(option);
               var option1= document.createElement("option");
              option1.text = "selectionner section";
              section.add(option1);
               xhttp.open("GET","gg.php?id="+event.target.value);

       }

xhttp.onload = function (){
        var h = JSON.parse(xhttp.response);
        if(t || d)
         {
          var option= document.createElement("option");
                       option.text = str;
                       id.add(option);
        }
        for (var i = 0; i < h.length; i++) {
	       var option = document.createElement("option");
              option.text = h[i][p1];
              option.value = h[i][p2];
               id.add(option);
            }

         }
xhttp.send();
}