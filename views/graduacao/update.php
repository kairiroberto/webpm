<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Graduacao */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Graduacao',
]) . $model->idgraduacao;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graduacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgraduacao, 'url' => ['view', 'id' => $model->idgraduacao]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="graduacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
