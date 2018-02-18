<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\Productsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'hover'=>true,
        // 'hover'=>false,
        'striped'=>false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
                'label'=>'Status',
                'attribute'=>'is_active', 
                'vAlign'=>'middle',
                'format'=>'raw',
                'value'=>function($model){

                    if($model->is_active == 'Y'){
                        $html = "<a class='label btn btn-success' href='javascript:void(0)'>Active</a>";
                    }else{
                        $html = "<a class='label btn btn-danger' href='javascript:void(0)'>Inactive</a>";
                    }
                    return $html;
                }
            ],
            // 'is_deleted',
            // 'created_by',
            //'created_date',
            //'updated_by',
            //'updated_date',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => false,
                'vAlign'=>'middle',
            ],
        ],
    ]); ?>
</div>
