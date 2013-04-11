<!doctype html>
<html lang="es">
<head>
	<script type="text/javascript" src="../controller/sha512.js"></script>
<script type="text/javascript" src="../js/form.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/css">
	fieldset {
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
	$("#direccion").click(function(e){
		alert("cliiick");
		e.preventDefault();
		var query = "http://maps.googleapis.com/maps/api/geocode/json?address="+$("#calle").val()+"%20"+$("#numero").val()+"%20"+$("#poblacion").val()+"&sensor=true";
		console.log(query);
		var linea;
		$.ajax({
			url:"http://maps.googleapis.com/maps/api/geocode/json?address="+$("#calle").val()+"%20"+$("#numero").val()+"%20"+$("#poblacion").val()+"&sensor=true",
			dataType:"json",
			success: function(json){
				console.log($("#direcciones").css("visibility"));
				if($("#direcciones").css("visibility")=="hidden"){
					console.log("entra");
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
					document.getElementById("direcciones").innerHTML="<select>"+linea+"</select>";

			}
		}
			});
		
	});
	$("#submit").click(function(e){
		alert("procesar formulario");
		e.preventDefault();
		$.ajax({
			url:"../controller/process.php?calle="+$("#calle").val()+"&num="+$("#numero").val()+"&piso="+$("#piso").val()
		});
	});
	});

</script>
</head>
<body class="hero-unit">
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <ul class="breadcrumb">
  <li><a href="#">Home</a> <span class="divider">/</span></li>
  <li><a href="#">Library</a> <span class="divider">/</span></li>
  <li class="active">Data</li>
</ul>
	<div class="container">
		<div class="row">
			<form action="../controller/process.php" method="POST">
			<div class="span3">
				<label>Nombre</label>
				<input type="text"  id="nombre" style="height:30px;s" placeholder="Introduzca Nombre"><br/>
				<label>Apellidos</label>
				<input type="text" id="apellidos" style="height:30px;" placeholder="Introduzca Apellidos">
				<label style="height: 30px;">Direccion</label>
			<input style="float:left; height:30px;" type="text" id="calle" placeholder="Introduzca Direccion">
			<div class="input-prepend input-append">
				<span style="height: 30px" class="add-on">Numero</span>
				<input type="text" id="numero" style="height:30px; width:50px " class="input-mir" placeholder="">
				<span style="height: 30px" class="add-on">Piso</span>
				<input type="text" id="piso" style="height:30px; width:60px; -moz-border-radius-bottomright: 4px;-moz-border-radius-topright:4px" class="input-mir" placeholder="">
				<label>Poblacion</label>
				<input type="text"  style="height:30px; width:175px; border-radius:4px;" id="poblacion" placeholder="Introduzca Nombre"><br/>
			</div>
			<button id="direccion"  class="btn btn-success" value="">Check</button>
			<div id="direcciones"  style="visibility:hidden">
			
			</div>
			</div>
		<div class="offset1 span5">
			<label>Correo Electronico</label>
				<input type="text"  style="height:30px;" id="email" placeholder="Introduzca Nombre"><br/>
				<label>Telefono</label>
				<input type="text"  style="height:30px;" id="telefono" placeholder="Introduzca Nombre"><br/>
				<button id="submit" type="submit" style="height:150px; width:150px; alignment-adjust: center; margin-top:35px; margin-left:25px" class="btn btn-primary"value="">Enviar</button>
			</form>
				
			
		</div>
		<div class="span2">
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
  				<li><a tabindex="-1" href="#">Action</a></li>
  				<li><a tabindex="-1" href="#">Another action</a></li>
  				<li><a tabindex="-1" href="#">Something else here</a></li>
  				<li class="divider"></li>
  				<li><a tabindex="-1" href="#">Separated link</a></li>
  			</ul>
		</div>
		
		</div>
	</div>
</body>
</html>