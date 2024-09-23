<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\IMSMERCADOS $model */

$this->title = $model->CODIGOIMS;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imsmercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="imsmercados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'CODIGOIMS' => $model->CODIGOIMS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'CODIGOIMS' => $model->CODIGOIMS], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CODIGOIMS',
            'MERCADO',
            'PRESENTACION',
            'PRODUCTOS',
            'CANTIDAD',
            'DESCUENTO',
            'LINEA',
            'JEFEDEPRODUCTO',
            'UNIDADES',
            'F10',
            'F11',
            'F12',
            'F13',
            'F14',
            'F15',
            'F16',
        ],
    ]) ?>

</div>
