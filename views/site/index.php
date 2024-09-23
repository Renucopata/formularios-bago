<?php
use yii\helpers\Html;


/** @var yii\web\View $this */

$this->title = 'Mercados competitivos';

/* 'style' => 'background-color: #8b008b; color: white;' to customize button color*/
?>
<div class="site-index">
    <div class="container">
        <div class="d-flex justify-content-end p-3">
            <?= Html::a('+ Crear mercado', ['imsmercados/index'], ['class'=>'btn btn-success btn-custom']) ?>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="web/assets/cropped-bago-icon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de mercado 1</h5>
                        <?= Html::a('Entrar al mercado', ['site/about'], ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="web/assets/cropped-bago-icon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de mercado 2</h5>
                        <?= Html::a('Entrar al mercado', ['site/contact'], ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="web/assets/cropped-bago-icon.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de mercado 3</h5>
                        <?= Html::a('Entrar al mercado', ['site/history'], ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
