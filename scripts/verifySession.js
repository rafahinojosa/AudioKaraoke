$(document).ready(function(){
	
	// Acción para verificar que la sesión sigue activa
	 $.ajax({
		 url : "data/sessionService.php",
		type : "GET",
		dataType : "json",
		success : function(sessionJson){
			// $("#testsession").text(sessionJson.user + " " + sessionJson.Name);
			$("#e15").hide();
			$("#e60").html("Bienvenido " + sessionJson.Name);
			$("#e80").show
		},
		error : function(errorMessage){
			//alert(errorMessage.responseText);
			//window.location.replace("data/sqlogin.php");
		}
	 });
});