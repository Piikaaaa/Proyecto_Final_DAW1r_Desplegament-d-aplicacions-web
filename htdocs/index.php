<?php
// Configuración base de datos
$host = "sql211.infinityfree.com";
$user = "if0_39000541";
$pass = "mm5683VM";
$db = "if0_39000541_juegos";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$sql = "SELECT id, titulo, caratula, plataforma, genero, anio FROM juegos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Juegos de Ordenador con Carátula</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
    body {
        background: #e7ebda;
    }
    .card {
        transition: transform 0.2s ease;
        cursor: pointer;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .search-container {
        max-width: 500px;
        margin: auto;
        margin-bottom: 30px;
    }
    .card-img-top {
        height: 180px;
        object-fit: cover;
        border-bottom: 1px solid #dee2e6;
    }
    .detalles {
        display: none;
    }
</style>
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4 text-center">Lista de juegos de PC</h2>

    <div class="search-container">
        <input type="text" id="searchInput" class="form-control form-control-lg" placeholder="Buscar juegos por título, plataforma o género..." />
    </div>

    <div class="row" id="juegosContainer">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $titulo = htmlspecialchars($row['titulo']);
                $plataforma = htmlspecialchars($row['plataforma']);
                $genero = htmlspecialchars($row['genero']);
                $anio = htmlspecialchars($row['anio']);
                $caratula = !empty($row['caratula']) ? htmlspecialchars($row['caratula']) : 'https://via.placeholder.com/300x180?text=Sin+Imagen';

                echo <<<CARD
                <div class="col-md-6 col-lg-4 mb-4 juego-card" data-info="$titulo $plataforma $genero $anio">
                    <div class="card shadow-sm h-100">
                        <img src="$caratula" alt="Carátula de $titulo" class="card-img-top" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">$titulo</h5>
                            <button class="btn btn-sm btn-outline-primary mb-2 toggle-detalles">Ver detalles</button>
                            <div class="detalles">
                                <p class="card-text mb-1"><strong>Plataforma:</strong> $plataforma</p>
                                <p class="card-text mb-1"><strong>Género:</strong> $genero</p>
                                <p class="card-text"><small class="text-muted">Año: $anio</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                CARD;
            }
        } else {
            echo '<p class="text-center">No hay juegos disponibles.</p>';
        }
        $conn->close();
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function(){
    // Filtro de búsqueda
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".juego-card").filter(function() {
            $(this).toggle($(this).data('info').toLowerCase().indexOf(value) > -1);
        });
    });

    // Mostrar/Ocultar detalles con efecto fade
    $(".toggle-detalles").on("click", function() {
        $(this).next(".detalles").fadeToggle();
    });
});
</script>
</body>
</html>
