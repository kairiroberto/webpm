<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiariaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Esacalas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diaria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php $form = ActiveForm::begin(); ?>
    
    <?php
    echo
    $form->field($model, 'iddiaria')->widget(Select2::classname(), [
        'data' => $diarias,
        'value' => $diarias, 
        'language' => 'pt-BR',
        'options' => ['placeholder' => '', 'multiple' => true],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>
    
    <?php
    echo
    $form->field($model, 'idpolicial')->widget(Select2::classname(), [
        'data' => $listarPoliciais,
        'language' => 'pt-BR',
        'options' => ['placeholder' => 'Selecione os policiais ...', 'multiple' => true],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Create'), ['class' => 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
