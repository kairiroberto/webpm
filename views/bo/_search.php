<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idbo') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'local') ?>

    <?= $form->field($model, 'descricao') ?>
    
    <?= $form->field($model, 'viatura') ?>
    
    <?= $form->field($model, 'pb') ?>
    
    <?= $form->field($model, 'hora_trans') ?>
    
    <?= $form->field($model, 'bairro') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
