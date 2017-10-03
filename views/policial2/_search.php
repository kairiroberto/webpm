<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Policial2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpolicial') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'matricula') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'admissao') ?>

    <?php // echo $form->field($model, 'nascimento') ?>

    <?php // echo $form->field($model, 'pai') ?>

    <?php // echo $form->field($model, 'mae') ?>

    <?php // echo $form->field($model, 'naturalidade') ?>

    <?php // echo $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'altura') ?>

    <?php // echo $form->field($model, 'cor') ?>

    <?php // echo $form->field($model, 'olhos') ?>

    <?php // echo $form->field($model, 'boca') ?>

    <?php // echo $form->field($model, 'nariz') ?>

    <?php // echo $form->field($model, 'rosto') ?>

    <?php // echo $form->field($model, 'instrucao') ?>

    <?php // echo $form->field($model, 'profissao') ?>

    <?php // echo $form->field($model, 'procedencia') ?>

    <?php // echo $form->field($model, 'exclusao') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
