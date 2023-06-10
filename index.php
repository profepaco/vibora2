<?php include('consulta.php')?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Snake</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="juego.html">Jugar</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="p-5 mb-4 bg-light">
            <div class="container-fluid py-3">
                
                <h1 class="display-5 fw-bold">Bienvenidos al Juego Snake</h1>
        
                <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla rem blanditiis dignissimos neque non necessitatibus culpa accusantium ipsa aspernatur, illo odit labore temporibus quis, perferendis expedita ea optio dicta sed?</p>
                <a href="juego.html" class="btn btn-primary btn-lg">Jugar</a>
            </div>
        </div>
        <div class="container-fluid text-center mb-4">
            <h2 class="display-6 py-4">Tabla de posiciones</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <table class="table table-striped table-responsive"> 
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Puntos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($listJugadores as $jugador){
                                    echo '<tr>';
                                    echo '<td>'.$jugador['id'].'</td>';
                                    echo '<td>'.$jugador['nombre'].'</td>';
                                    echo '<td>'.$jugador['puntos'].'</td>';
                                    echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-auto bg-dark py-3">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>   
</body>
</html>