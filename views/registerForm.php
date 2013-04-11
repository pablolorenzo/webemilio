<html>
<head>
	<script type="text/javascript" src="../controller/sha512.js"></script>
<script type="text/javascript" src="../js/form.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript">
	/*
	$(document).ready(function(){
	$("#direccion").click(function(e){
		
		e.preventDefault();
		var linea;
		$.ajax({
			url:"http://maps.googleapis.com/maps/api/geocode/json?address="+$("#calle").val()+"&sensor=true",
			dataType:"json",
			success: function(json){
				console.log($("#direcciones").css("visibility"));
				if($("#direcciones").css("visibility")=="hidden"){
					for(var i=0;i<json["results"].length;i++){
						console.log(json["results"][i]["formatted_address"]);
						dir = json["results"][i]["formatted_address"].split(",");
						console.log(dir);
						linea=linea+"<option>"+json["results"][i]["formatted_address"]+"</option>";
					}
					$("#direcciones").css({visibility:"visible"});
					$("#direcciones").append("<select>"+linea+"</select>");
				}
			else{
				for(var i=0;i<json["results"].length;i++){
						console.log(json["results"][i]["formatted_address"]);
						dir = json["results"][i]["formatted_address"].split(",");
						console.log(dir);
						linea=linea+"<option>"+json["results"][i]["formatted_address"]+"</option>";
					}
					document.getElementById("direcciones").innerHTML("<select>"+linea+"</select>");

			}
		}
			});
		
	});
	});
*/
</script>
</head>
<body>
	<div id="registerForm" class="container">
	<form>	
		<fieldset>
			<div class="span6">
			<label>Nombre</label>
			<input type="text"  style="height:30px;s" placeholder="Introduzca Nombre"><br/>
			<label>Apellidos</label>
			<input type="text"  style="height:30px;" placeholder="Introduzca Apellidos">
			<div id="dir" style="position:absolute;">
			<label>Direccion</label>
		</div>
		<div class="span5">
			<input style="float:left;position:relative;" type="text" id="calle" placeholder="Introduzca Direccion">
			<div class="input-prepend input-append">
				<span class="add-on">Numero</span>
				<input type="text" id="calle" style="height:30px; width:50px " class="input-mir" placeholder="">
				<span class="add-on">Piso</span>
				<input type="text" id="calle" style="height:30px; width:60px" class="input-mir" placeholder="">
			</div>
		</div>
			<button id="direccion"  class="btn btn-success"value="">Check</button>
			<div id="direcciones"  style="visibility:hidden">
			
			</div>
		</div>
		</fieldset>
</form>
	</div>
	
</body>
</html>