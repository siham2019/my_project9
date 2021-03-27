
$(document).ready(function () {
  $("#level").change(function () {
    var id_n= $(this).val();
    alert(id_n);
$("#group").find('option').not(':first').remove();
   $('#section').find('option').not(':first').remove();
   $.ajax({
        url: 'data.php',
        type: 'post',
        data: {request: 1, id_nf: id_n},
        dataType: 'json',
        success: function(e){

          var len = e.length;

          for( var i = 0; i<len; i++){
            var id = e[i]['ids'];
            var name = e[i]['noms'];

            $("#section").append("<option value='"+id+"'>"+name+"</option>");

          }
        },
      error:  function(xhr, status, error){
        var errorMessage = xhr.responseText + ': ' + xhr.statusText
        alert('Error - ' + errorMessage);
    }
      });
  });
//second ***********************************************************************
$("#section").change(function () {
  var id_s= $(this).val();    alert(id_s);

  $("#group").find('option').not(':first').remove();

  $.ajax({
       url: 'data.php',
       type: 'post',
       data: {request:2, id_section: id_s},
       dataType: 'json',
       success: function(e){

         var len = e.length;

         for( var i = 0; i<len; i++){
           var id = e[i]['idg'];
           var name = e[i]['nomg'];

           $("#group").append("<option value='"+id+"'>"+name+"</option>");

         }
       },
     error:  function(xhr, status, error){
       var errorMessage = xhr.responseText + ': ' + xhr.statusText
       alert('Error - ' + errorMessage);
   }
     });

//**********************************************************
   });
});
