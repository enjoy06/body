var lastResponse = '';
setInterval(function(){ 
  $.ajax({
    type: "GET",
    url: "https://primarrynas.eu.org/adriansyah/data.php",
    dataType: "html",
    success: function(response) {
      if (lastResponse && response !== lastResponse) {
        var audio = document.getElementById('jaran');
        audio.play();
        $("#iyo").load("https://primarrynas.eu.org/adriansyah/data.php");
      }
      lastResponse = response
    }
  });
},5000);

$(document).ready(function(){
    $("#iyo").load("https://primarrynas.eu.org/adriansyah/data.php");
});