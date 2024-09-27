<?php

use app\models\ImsProducto;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ImsProductoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Ims Productos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-producto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ims Producto'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?php $form = ActiveForm::begin(['action' => ['ims-producto/save-selection']]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => ['class' => \yii\bootstrap5\LinkPager::class],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIMS',
            'CT',
            'PRODUCTO',
            'CIUDAD',
            'PRESENTACION',     
            'LAB',
            ['class' => 'yii\grid\CheckboxColumn'],
        ],
    ]); ?>
<?= Html::submitButton('Save Selection', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>

</div>
