<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'Worker';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Workers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'famila',
            'name',
            'lastname' ,
            'position',
            //'skils',
            ['attribute' => 'skilsName','label' => 'Skills', 'value'=>'skils0.name'],
           
            'salary' ,

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
