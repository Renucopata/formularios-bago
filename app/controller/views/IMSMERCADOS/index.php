<?php

use app\models\IMSMERCADOS;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Imsmercados');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imsmercados-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Imsmercados'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGOIMS',
            'MERCADO',
            'PRESENTACION',
            'PRODUCTOS',
            'CANTIDAD',
            //'DESCUENTO',
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
                'urlCreator' => function ($action, IMSMERCADOS $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'CODIGOIMS' => $model->CODIGOIMS]);
                 }
            ],
        ],
    ]); ?>


</div>
