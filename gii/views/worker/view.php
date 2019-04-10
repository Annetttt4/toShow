<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Workers */
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Worker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="workers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'вы правда хотите удалить элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'famila',
            'name',
            'lastname' ,
            'position',
            'skils',
            // ['attribute' => 'skilsName','label' => 'Skills', 'value'=>'skils0.name'],
           
            'salary' ,

        ],
    ]) ?>

</div>
