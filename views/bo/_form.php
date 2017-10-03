<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Bo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo '<b>Data</b><br>' .
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'data',
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
    $form->field($model, 'hora')->widget(TimePicker::classname(), [
        'pluginOptions' => [
            'defaultTime' => '00:00:00',
            'showSeconds' => true,
            'showMeridian' => false,
            'minuteStep' => 1,
            'secondStep' => 5,
        ]
    ]);
    echo '<br>';
    ?>

    <?= $form->field($model, 'local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea() ?>
    
    <?= $form->field($model, 'viatura')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'pb')->textInput(['maxlength' => true]) ?>
    
    <?php
    echo
    $form->field($model, 'hora_trans')->widget(TimePicker::classname(), [
        'pluginOptions' => [
            'defaultTime' => '00:00:00',
            'showSeconds' => true,
            'showMeridian' => false,
            'minuteStep' => 1,
            'secondStep' => 5,
        ]
    ]);
    echo '<br>';
    ?>
    
    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'material')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
