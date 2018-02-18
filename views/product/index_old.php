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

    <div id="content"></div>

    <?php /*
    echo GridView::widget([
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
            ]); */ ?>
    
</div>

<script type='text/babel'>

const header = (
      <div>
        <h1><?= Html::encode($this->title) ?></h1>
        {/*<?php // echo $this->render('_search', ['model' => $searchModel]); ?>*/}
        <p>
            <?= Html::a('Create Product', ['create'], ['className' => 'btn btn-success']) ?>
        </p>
        {/* <h2>It is {new Date().toLocaleTimeString()}.</h2> */}
      </div>
    );




class ProductRow extends React.Component {

    constructor(props) {
        super(props);
    
    }

    render() {
        return (
            <tr>
                <td>{this.props.product.name}</td>
                <td>{this.props.product.is_active}</td>
                <td>
                    <a href='#'
                        className='btn btn-info m-r-1em'> Read One
                    </a>
                    <a href='#'
                        className='btn btn-primary m-r-1em'> Edit
                    </a>
                    <a
                        className='btn btn-danger'> Delete
                    </a>
                </td>
            </tr>
        );
    }
}

class ProductsTable extends React.Component {

    constructor(props) {
        super(props);
       
    //    console.log(this.props.products);
        
        
    }

    render() {
        
        return(
            1
        );
        // console.log(this.state.products);
        
        /* 
        
        var rows = this.state.products.map(function(product, i) {
            return (
                <ProductRow
                    key={i}
                    product={product}
                    />
            );
        }.bind(this));
        
        return(
            !rows.length
                ? <div className='alert alert-danger'>No products found.</div>
                :
                <table className='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {rows}
                    </tbody>
                </table>
        ); 

        */
    }
}

class Main extends React.Component {
  
    constructor(props) {
        super(props);
        this.state = {products: []};
    }
    componentDidMount() {

        this.serverRequest = $.get("<?php echo Yii::$app->homeUrl
?>product/all", function (products) {
            this.setState({
                products: products
            });
        }.bind(this));
    }

    componentWillUnmount() {
        this.serverRequest.abort();
    }
    render() {
        // console.log(this.state.products);
        var filteredProducts = this.state.products;
        console.log(filteredProducts);
        return (
            <div>
                {header}
                 <ProductsTable products={filteredProducts}   />
            </div>
    );
  }
}

ReactDOM.render(
    <Main/>,
    document.getElementById('content')
);

</script>
