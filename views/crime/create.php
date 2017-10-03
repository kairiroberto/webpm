<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Crime */

$this->title = Yii::t('app', 'Create Crime');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Crimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crime-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
