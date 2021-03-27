  function function_name(c,g) {
 
       var x = document.getElementById(g).options;
     
for (var i = 0; i < x.length; i++) {
 
  if(x[i].text == c)
  	console.log(x[i].text);
    x[i].selected = i;
  }

}