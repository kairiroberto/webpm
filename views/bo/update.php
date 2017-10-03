<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bo',
]) . $model->idbo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbo, 'url' => ['view', 'id' => $model->idbo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
