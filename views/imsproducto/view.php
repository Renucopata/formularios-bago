<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ImsProducto $model */

$this->title = $model->CODIMS;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ims Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ims-producto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'CODIMS' => $model->CODIMS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'CODIMS' => $model->CODIMS], [
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
            'CODPRODUCTO',
            'CT',
            'PRODUCTO',
            'CIUDAD',
            'PRESENTACION',
            'CODIMS',
            'LAB',
            'UTRIM20',
            'UTRIM19',
            'UTRIM18',
            'UTRIM17',
            'UTRIM16',
            'UTRIM15',
            'UTRIM14',
            'UTRIM13',
            'UTRIM12',
            'UTRIM11',
            'UTRIM10',
            'UTRIM09',
            'UTRIM08',
            'UTRIM07',
            'UTRIM06',
            'UTRIM05',
            'UTRIM04',
            'UTRIM03',
            'UTRIM02',
            'UTRIM01',
            'VTRIM20',
            'VTRIM19',
            'VTRIM18',
            'VTRIM17',
            'VTRIM16',
            'VTRIM15',
            'VTRIM14',
            'VTRIM13',
            'VTRIM12',
            'VTRIM11',
            'VTRIM10',
            'VTRIM09',
            'VTRIM08',
            'VTRIM07',
            'VTRIM06',
            'VTRIM05',
            'VTRIM04',
            'VTRIM03',
            'VTRIM02',
            'VTRIM01',
            'UMES24',
            'UMES23',
            'UMES22',
            'UMES21',
            'UMES20',
            'UMES19',
            'UMES18',
            'UMES17',
            'UMES16',
            'UMES15',
            'UMES14',
            'UMES13',
            'UMES12',
            'UMES11',
            'UMES10',
            'UMES09',
            'UMES08',
            'UMES07',
            'UMES06',
            'UMES05',
            'UMES04',
            'UMES03',
            'UMES02',
            'UMES01',
            'VMES24',
            'VMES23',
            'VMES22',
            'VMES21',
            'VMES20',
            'VMES19',
            'VMES18',
            'VMES17',
            'VMES16',
            'VMES15',
            'VMES14',
            'VMES13',
            'VMES12',
            'VMES11',
            'VMES10',
            'VMES09',
            'VMES08',
            'VMES07',
            'VMES06',
            'VMES05',
            'VMES04',
            'VMES03',
            'VMES02',
            'VMES01',
            'FLAG',
            'LANZAMIENTO',
        ],
    ]) ?>

</div>
