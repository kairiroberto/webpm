<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiariaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diaria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddiaria') ?>

    <?= $form->field($model, 'data_ini') ?>

    <?= $form->field($model, 'hora_ini') ?>

    <?= $form->field($model, 'data_fin') ?>

    <?= $form->field($model, 'hora_fin') ?>

    <?php // echo $form->field($model, 'servico') ?>

    <?php // echo $form->field($model, 'local') ?>

    <?php // echo $form->field($model, 'qtd_policiais') ?>

    <?php // echo $form->field($model, 'valor') ?>

    <?php // echo $form->field($model, 'extra') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
