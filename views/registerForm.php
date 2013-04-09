<html>
<head>
	<script type="text/javascript" src="../controller/sha512.js"></script>
<script type="text/javascript" src="../js/form.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$("#direccion").click(function(e){
		e.preventDefault();
		$.ajax({
			url:"http://maps.googleapis.com/maps/api/geocode/json?address="+$("#calle").val()+"&sensor=false",
			dataType:"json",
			success: function(json){
				console.log(json["results"].length);
				for(var i=0;i<json["results"].length;i++){
					console.log(json["results"][i]["formatted_address"]);
					dir = json["results"][i]["formatted_address"].split(",");
					console.log(dir);
					$("#direcciones").append("<div id='calle'><address><strong>"+json["results"][i]["formatted_address"]+"</strong><br></address></div>");
				}
				$("#direcciones").css({visibility:"visible"});
			}
			});
		$("#calle").hover(function(){
			alert("click!!");
		});
	});
	});
</script>
</head>
<body>
	<div id="registerForm" class="container">
	<div class="span5" style="line-height">
	<form>	
		<fieldset>
			<label>Nombre</label>
			<input type="text" placeholder="Introduzca Nombre"><br/>
			<label>Apellidos</label>
			<input type="text" placeholder="Introduzca Apellidos">
			<label>Direccion</label>
			<input type="text" id="calle" placeholder="Introduzca Direccion">
			<button id="direccion" class="btn btn-success"value="">Check</button>
			<div id="direcciones"  style="visibility:hidden ;font-size:11px; border:0.5px; box-shadow:-2px -2px -4px -5px #ccc;padding-top:10px">
			
			</div>
		</fieldset>
</form>
	</div>
	</div>
	
</body>
</html>