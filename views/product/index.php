<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\Productsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
?>

<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/product_table_row.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/product_table.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/product/read_products.component.js"></script>
<script type="text/babel" src="<?php echo Yii::$app->homeUrl
?>app/main.component.js"></script>

<div class="product-index">
    <div id="content">Loading</div>
</div>

<script type='text/babel'>



</script>
