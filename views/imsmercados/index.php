<?php

use app\models\ImsMercados;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ImsMercadosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Ims Mercados');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-mercados-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ims Mercados'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGOIMS',
            'MERCADO',
            'PRESENTACION',
            'PRODUCTOS',
            'CANTIDAD',
            'DESCUENTO',
            [
                'attribute' => 'LINEA',
                'value' => function($model){
                    
                }
            ],
            //'LINEA',
            //'JEFEDEPRODUCTO',
            //'UNIDADES',
            //'F10',
            //'F11',
            //'F12',
            //'F13',
            //'F14',
            //'F15',
            //'F16',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ImsMercados $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'CODIGOIMS' => $model->CODIGOIMS]);
                 }
            ],
        ],
    ]); ?>


</div>
