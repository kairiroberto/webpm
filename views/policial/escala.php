<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Policial */

$this->title = $model->idpolicial;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Voltar'), ['view', 'id' => $model->idpolicial], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idpolicial',
            'nome',
            'cpf',
            'matricula',
            'email',
            'admissao',
        ],
    ]) ?>
      
    <h1>Escala</h1>
        
    <?= GridView::widget([
        'dataProvider' => $provider1,
        //'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'data_ini',
            'local',
            'servico',
    
        ],
    ]); ?>
    
    
</div>
