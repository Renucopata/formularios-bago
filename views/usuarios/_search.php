<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsuariosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_USUARIO') ?>

    <?= $form->field($model, 'NOMBRES') ?>

    <?= $form->field($model, 'APELLIDOS') ?>

    <?= $form->field($model, 'EMAIL') ?>

    <?= $form->field($model, 'USERNAME') ?>

    <?php // echo $form->field($model, 'PASSWORD') ?>

    <?php // echo $form->field($model, 'SESSION1') ?>

    <?php // echo $form->field($model, 'ID_DEPTO') ?>

    <?php // echo $form->field($model, 'CODVISIT') ?>

    <?php // echo $form->field($model, 'ESTADO') ?>

    <?php // echo $form->field($model, 'CREATE_AT') ?>

    <?php // echo $form->field($model, 'CREATE_BY') ?>

    <?php // echo $form->field($model, 'UPDATE_AT') ?>

    <?php // echo $form->field($model, 'UPDATE_BY') ?>

    <?php // echo $form->field($model, 'LAST_LOGIN') ?>

    <?php // echo $form->field($model, 'ID_CARGO') ?>

    <?php // echo $form->field($model, 'CODALM') ?>

    <?php // echo $form->field($model, 'AUTHKEY') ?>

    <?php // echo $form->field($model, 'ID_PUNTOVENTA') ?>

    <?php // echo $form->field($model, 'EMISION') ?>

    <?php // echo $form->field($model, 'ACCESS_TOKEN') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
