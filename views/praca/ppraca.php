<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Praca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="praca-ppraca">

    <?php $form = ActiveForm::begin(); ?>
    
        <?= $form->field($model, 'idgraduacao')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    
        <?php 
            echo 
            $form->field($model, 'idpolicial')->widget(Select2::classname(), [
                'data' => $listPolicial,
                'language' => 'pt-BR',
                'options' => ['placeholder' => 'Selecione um policial ...'],
                'pluginOptions' => [
                    'allowClear' => false
                ],
            ]); 
        ?>
    
    <?= $form->field($model, 'numero_praca')->textInput(['maxlength' => true]) ?>
    
    <?php
    echo
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'inicio',
        'options' => ['placeholder' => 'Início'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <?php
    echo
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'fim',
        'options' => ['placeholder' => 'Fim'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
