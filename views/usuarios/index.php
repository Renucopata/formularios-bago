<?php

use app\models\Usuarios;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\UsuariosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Usuarios');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Usuarios'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_USUARIO',
            'NOMBRES',
            'APELLIDOS',
            'EMAIL:email',
            'USERNAME',
            //'PASSWORD',
            //'SESSION1',
            //'ID_DEPTO',
            //'CODVISIT',
            //'ESTADO',
            //'CREATE_AT',
            //'CREATE_BY',
            //'UPDATE_AT',
            //'UPDATE_BY',
            //'LAST_LOGIN',
            //'ID_CARGO',
            //'CODALM',
            //'AUTHKEY',
            //'ID_PUNTOVENTA',
            //'EMISION',
            //'ACCESS_TOKEN',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Usuarios $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_USUARIO' => $model->ID_USUARIO]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
