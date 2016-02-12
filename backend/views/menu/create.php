<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Menu */

$this->title = 'Create menu item';
$this->params['breadcrumbs'][] = ['label' => 'Menu items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>