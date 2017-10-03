<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diaria */

$this->title = Yii::t('app', 'Create Diaria');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diarias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diaria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
