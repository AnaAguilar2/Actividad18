<!DOCTYPE HTML>
<html>
<head>
	<title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
	<section class="hero is-primary">
	    <div class="hero-body">
	        <div class="container">
	          <h1 class="title">Universidad de Colima</h1>
	          <h2 class="subtitle">Facultad de Telemática</h2>
        	</div>
      	</div>
    </section>

<!-- Cuerpo del documento -->
<div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth"> 
              <?php 
                $nombre=$_POST["nombre"];
                $email=$_POST["email"];
                if(strlen($nombre)>0 && strlen($email)>0){
                    echo "<p>Nombre: ".$_POST['nombre']."</p>";
                    echo "<p>Email: ".$_POST['email']."</p>";
                }
                else{
                    echo "<p class=notification is-danger>Error en el envío de informacion </p>";
                }
              ?>
    		    </div>
        </div>
    </div>

    
    <!-- pié de página -->
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">José Nabor</a>. 
        </p>
      </div>
    </footer>
</body>
</html>