<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialCursoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-curso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpolicial_curso') ?>

    <?= $form->field($model, 'idpolicial') ?>

    <?= $form->field($model, 'idcurso') ?>

    <?= $form->field($model, 'instituicao') ?>

    <?= $form->field($model, 'inicio') ?>

    <?php // echo $form->field($model, 'fim') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
