<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\Productsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
// $this->params['breadcrumbs'][] = $this->title;

/*
 <script src="<?php echo Yii::$app->homeUrl
?>app/product/read_products.component.js"></script>
<script src="<?php echo Yii::$app->homeUrl
?>app/main.component.js"></script>
*/

?>
<div class="product-index">

    <div id="content"></div>
    
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
                <td>{this.props.product.price}</td>
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
        this.state = {data: this.props.products};
        
    }

    render() {
        // var p = this.props.products;
        // console.log(this.props.products);
        // return this.props.products;
        return(this.state.data);
        /*
        console.log(this.state.data);
        var rows = this.state.data.map(function(product, i) {
            // console.log(i);
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
?>/product/all", function (res) {
            this.setState({
                products: res,
            });
        }.bind(this));
    }

    componentWillUnmount() {
        this.serverRequest.abort();
    }

    render() {
            
        var filteredProducts = this.state.products;
        console.log(filteredProducts);

        return (
            <div>
                {/*header*/}
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
