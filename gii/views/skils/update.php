<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skills */

$this->title = 'Update Skills: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Skils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skills-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
