<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialCurso */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Policial Curso',
]) . $model->idpolicial_curso;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpolicial_curso, 'url' => ['view', 'id' => $model->idpolicial_curso]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="policial-curso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = false; ?>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listCurso' => $listCurso,
        'criar' => $criar,
    ]) ?>

</div>
