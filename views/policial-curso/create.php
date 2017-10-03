<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PolicialCurso */

$this->title = Yii::t('app', 'Create Policial Curso');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-curso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = true; ?>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listCurso' => $listCurso,
        'criar' => $criar,
    ]) ?>

</div>
