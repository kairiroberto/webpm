<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Policial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Policial',
]) . $model->idpolicial;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpolicial, 'url' => ['view', 'id' => $model->idpolicial]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="policial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'alterar' => true,
    ]) ?>

</div>
