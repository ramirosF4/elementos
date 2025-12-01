<?php include 'header.php'; ?>

<?php
$elemento = "";
$imagen = "";
$colorFondo = "";
$colorTexto = "";
$anio = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anio = $_POST['anio'];
    $resta = $anio - 4;
    $residuo = $resta % 10;

    if ($residuo == 0 || $residuo == 1) {
        $elemento = "Madera";
        $imagen = "image/madera.png";
        $colorFondo = "bg-success"; 
        $colorTexto = "text-success";
    } 
    
    elseif ($residuo == 2 || $residuo == 3) {
        $elemento = "Fuego";
        $imagen = "image/fuego.png";
        $colorFondo = "bg-danger"; 
        $colorTexto = "text-danger";
    } 
    
    elseif ($residuo == 4 || $residuo == 5) {
        $elemento = "Tierra";
        $imagen = "image/tierra.png";
        $colorFondo = "bg-warning"; 
        $colorTexto = "text-dark"; 
    } 
    
    elseif ($residuo == 6 || $residuo == 7) {
        $elemento = "Metal";
        $imagen = "image/metal.png";
        $colorFondo = "bg-secondary"; 
        $colorTexto = "text-secondary";
    } 
    
    elseif ($residuo == 8 || $residuo == 9) {
        $elemento = "Agua";
        $imagen = "image/agua.png";
        $colorFondo = "bg-primary"; 
        $colorTexto = "text-primary";
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        
        <div class="col-md-5">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Calculadora de elemeto /h4>
                </div>
                <div class="card-body">
                    <p>Ingresa un año para saber su elemento:</p>
                    <form action="calculadora.php" method="post">
                        <div class="mb-3">
                            <label for="anio" class="form-label">Año:</label>
                            <input type="number" class="form-control" name="anio" required value="<?php echo $anio; ?>">
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Calcular</button>
                        <button type="reset" class = "btn btn-dark w-100 ">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>

        <?php if ($elemento != "") { ?>
            
            <div class="col-md-5">
                <div class="card shadow text-center h-100">
                    <div class="card-header text-white <?php echo $colorFondo; ?>">
                        <h5>Resultado para: <?php echo $anio; ?></h5>
                    </div>
                    
                    <div class="card-body">
                        <h2 class="card-title fw-bold <?php echo $colorTexto; ?>">
                            <?php echo $elemento; ?>
                        </h2>

                        <img src="<?php echo $imagen; ?>" alt="<?php echo $elemento; ?>" class="img-fluid mt-3 mb-3" style="height: 150px; object-fit: contain;">

                        <p>Este es el elemento al que perteneces 🫡</p>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<?php include_once 'footer.php'; ?>