<div class="projects">

    <?php
    $proyectos = controladorBS::mostrarProyectos(null, null);
    foreach($proyectos as $key => $value) {
        if($value["direccion"] == "i")
        {
            echo '<div class="row proy-card">
                <div id="'.$value["id"].'" class="carousel slide ps-2" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#'.$value["id"].'" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#'.$value["id"].'" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#'.$value["id"].'" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="'.$url.'src/img/'.$value["imagen1"].'" class="">
                        </div>
                        <div class="carousel-item">
                        <img src="'.$url.'src/img/'.$value["imagen2"].'" class="">
                        </div>
                        <div class="carousel-item">
                        <img src="'.$url.'src/img/'.$value["imagen3"].'" class="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#'.$value["id"].'" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#'.$value["id"].'" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-text">
                    <h2 class="proy-title row">'.$value["titulo"].'</h2>
                    <p class="proy-text">
                    '.$value["descripcion"].'
                    </p>
                    <a href="#" class="proy-link" target="_blank">'.$value["link"].'</a>
                </div>
            </div>';
        }
        else{
            echo '<div class="row proy-card">
            <div class="card-text">
                <h2 class="proy-title row">'.$value["titulo"].'</h2>
                <p class="proy-text">
                '.$value["descripcion"].'
                </p>
                <a href="#" class="proy-link" target="_blank">'.$value["link"].'</a>
            </div>
                <div id="'.$value["id"].'" class="carousel slide ps-2" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#'.$value["id"].'" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#'.$value["id"].'" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#'.$value["id"].'" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="'.$url.'src/img/'.$value["imagen1"].'" class="">
                        </div>
                        <div class="carousel-item">
                        <img src="'.$url.'src/img/'.$value["imagen2"].'" class="">
                        </div>
                        <div class="carousel-item">
                        <img src="'.$url.'src/img/'.$value["imagen3"].'" class="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#'.$value["id"].'" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#'.$value["id"].'" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>';
        }
    }
    ?>
</div>