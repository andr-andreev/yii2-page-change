<?php

use app\widgets\ActionColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => SerialColumn::class,
                'headerOptions' => [
                    'width' => 40,
                ],
            ],
            'title',
            [
                'class' => ActionColumn::class,
                'headerOptions' => [
                    'width' => 170,
                    'class' => 'text-center'
                ],
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
