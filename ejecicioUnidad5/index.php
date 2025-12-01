<?php include 'header.php'; ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">La Leyenda de los Elementos Celestiales</h1>
            
            <div class="p-4 bg-light rounded-3 shadow-sm mb-5">
                <p class="lead">
                    En una aldea lejana, cada año era guiado por un <strong>Elemento Celestial</strong> que influía en las cosechas, el clima y el destino de sus habitantes. El anciano maestro Li conocía el secreto para determinar qué elemento regía cada año.
                </p>
                <p>
                    Una noche, mientras las linternas flotaban sobre el río, el joven aprendiz Wen le preguntó:
                    <br><em>—Maestro Li, ¿cómo sabe usted qué elemento pertenece a cada año?</em>
                </p>
                <p>
                    El maestro sonrió y respondió:
                    <br><em>—El cielo sigue un ciclo perfecto de <strong>cinco elementos</strong>, y cada elemento dura <strong>dos años consecutivos</strong>. Tras los diez años, el ciclo comienza otra vez.</em>
                </p>
            </div>

            <hr>
            
            <h2 class="text-center mb-4">Los 5 Elementos</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                
                <div class="col">
                    <div class="card h-100 border-success mb-3 shadow-sm" style="max-width: 18rem;">
                        <div class="card-header bg-success text-white text-center fw-bold">Madera</div>
                        <img src="image/madera.png" class="card-img-top mt-3" alt="Elemento Madera" style="height: 120px; object-fit: contain;">
                        <div class="card-body text-success">
                            <h5 class="card-title text-center">Inicio del Ciclo</h5>
                            <p class="card-text text-center text-dark">Representa el crecimiento, la creatividad y la vitalidad de la primavera.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-danger mb-3 shadow-sm" style="max-width: 18rem;">
                        <div class="card-header bg-danger text-white text-center fw-bold">Fuego</div>
                        <img src="image/fuego.png" class="card-img-top mt-3" alt="Elemento Fuego" style="height: 120px; object-fit: contain;">
                        <div class="card-body text-danger">
                            <h5 class="card-title text-center">Energía Máxima</h5>
                            <p class="card-text text-center text-dark">Simboliza la pasión, la transformación y el dinamismo del verano.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-warning mb-3 shadow-sm" style="max-width: 18rem;">
                        <div class="card-header bg-warning text-dark text-center fw-bold">Tierra</div>
                        <img src="image/tierra.png" class="card-img-top mt-3" alt="Elemento Tierra" style="height: 120px; object-fit: contain;">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-center">Equilibrio</h5>
                            <p class="card-text text-center text-dark">Representa la estabilidad, la nutrición y el centro. Es la base sólida.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-secondary mb-3 shadow-sm" style="max-width: 18rem;">
                        <div class="card-header bg-secondary text-white text-center fw-bold">Metal</div>
                        <img src="image/metal.png" class="card-img-top mt-3" alt="Elemento Metal" style="height: 120px; object-fit: contain;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title text-center">Estructura</h5>
                            <p class="card-text text-center text-dark">Simboliza la determinación, la justicia y la cosecha del otoño.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-primary mb-3 shadow-sm" style="max-width: 18rem;">
                        <div class="card-header bg-primary text-white text-center fw-bold">Agua</div>
                        <img src="image/agua.png" class="card-img-top mt-3" alt="Elemento Agua" style="height: 120px; object-fit: contain;">
                        <div class="card-body text-primary">
                            <h5 class="card-title text-center">Sabiduría</h5>
                            <p class="card-text text-center text-dark">Representa la fluidez, la introspección y el descanso del invierno.</p>
                        </div>
                    </div>
                </div>

            </div> <div class="text-center mt-5 mb-5">
                <a href="calculadora.php" class="btn btn-outline-dark">Ir a consultar mi elemento </a>
            </div>

        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>