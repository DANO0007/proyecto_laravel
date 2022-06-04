<!DOCTYPE html>
<html>
<head>    
   <title>Menu</title>
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<body>
<div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center">
			<img src="image/corona.png" alt="" width="150" height="110" class="center">
                <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                <h5>Elección de la reina ITVO</h5>
				
            </div>
        </div>

<div class="menu-bar">    	
<ul>
	

	<li><a href="">Casilla</a>
		<div class="sub-menu-1">
			<ul>
				<li><a href="casilla">Listar</a></li>
				<li><a href="casilla/create">Registrar casilla</a></li>
				<li><a href="casilla/pdf" target="_blank" style="">PDF</a></li>
				<li><a href="preview" target="_blank">Grafica</a></li>
			</ul>
			
		</div>

	</li>

	<li><a href="">Candidato</a>
		<div class="sub-menu-1">
			<ul>
				<li><a href="candidato">Listar</a></li>
				<li><a href="candidato/create">Registrar candidato</a></li>
			</ul>
			
		</div>
	</li>
	<li><a href="">Elección</a>
		<div class="sub-menu-1">
			<ul>
				<li><a href="eleccion">Listar</a></li>
				<li><a href="eleccion/create">Registrar eleccion</a></li>
			</ul>
		</div>
	</li>
	<li><a href="">Votos</a>
		<div class="sub-menu-1">
			<ul>
				<li><a href="voto">Listar</a></li>
				<li><a href="voto/create">Registrar votos</a></li>
			</ul>
		</div>
	</li>
	<li><a href="">Sesión</a>
		<div class="sub-menu-1">
			<ul>
				<li><a href="login">Iniciar</a></li>
				<li><a href="logout" >Salir</a></li>
			</ul>
		</div>
	</li>


</ul>
</div>

</body>
</html>