<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Workers */

$this->title = 'Create Workers';
$this->params['breadcrumbs'][] = ['label' => 'Worker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
