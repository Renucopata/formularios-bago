<?php
use yii\helpers\Html;


/** @var yii\web\View $this */

$this->title = 'Mercados competencia';

/* 'style' => 'background-color: #8b008b; color: white;' to customize button color*/
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="web/assets/formImg1.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de mercado</h5>
                        <?= Html::a('Actualizar mercado', ['site/about'], ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="web/assets/cropped-bago-icon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Formulario 2</h5>
                        <?= Html::a('Llenar formulario', ['site/contact'], ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="web/assets/cropped-bago-icon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Formulario 3</h5>
                        <?= Html::a('Llenar formulario', ['site/history'], ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
