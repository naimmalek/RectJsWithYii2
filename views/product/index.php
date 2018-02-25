<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\Productsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
?>

<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/delete_product.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/update_product.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/read_one_product.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/create_product.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/product_table_row.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/product_table.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/read_products.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/top_actions.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/main.component.js"></script>

<div class="product-index">
    <div class="page-header">
        <h1>Loading...</h1>
    </div>
    <div id="content">Loading</div>
</div>