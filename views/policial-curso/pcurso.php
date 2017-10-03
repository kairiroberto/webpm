<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialCurso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcurso')->dropDownList($listCurso) ?>

    <?php
    echo
    $form->field($model, 'idpolicial')->widget(Select2::classname(), [
        'data' => $listPolicial,
        'language' => 'pt-BR',
        'options' => ['placeholder' => 'Selecione os policiais ...', 'multiple' => true],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>

    <?= $form->field($model, 'instituicao')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'horas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
