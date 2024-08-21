<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Usuarios $model */

$this->title = $model->ID_USUARIO;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'ID_USUARIO' => $model->ID_USUARIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'ID_USUARIO' => $model->ID_USUARIO], [
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
            'ID_USUARIO',
            'NOMBRES',
            'APELLIDOS',
            'EMAIL:email',
            'USERNAME',
            'PASSWORD',
            'SESSION1',
            'ID_DEPTO',
            'CODVISIT',
            'ESTADO',
            'CREATE_AT',
            'CREATE_BY',
            'UPDATE_AT',
            'UPDATE_BY',
            'LAST_LOGIN',
            'ID_CARGO',
            'CODALM',
            'AUTHKEY',
            'ID_PUNTOVENTA',
            'EMISION',
            'ACCESS_TOKEN',
        ],
    ]) ?>

</div>
