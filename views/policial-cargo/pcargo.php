<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialCargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-cargo-pcargo">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcargo')->dropDownList($listCargo) ?>

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
