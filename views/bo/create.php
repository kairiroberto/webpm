<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bo */

$this->title = Yii::t('app', 'Create Bo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
