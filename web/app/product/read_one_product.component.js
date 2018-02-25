class ReadOneProductComponent extends React.Component {    
    

    constructor(props) {
        super(props);
        this.state = {
            id: 0,
            name: '',
            price: 0,
        };

    }

    componentDidMount() {

        var productId = this.props.productId;
        this.serverRequest = $.get("http://localhost/RectJsWithYii2/web/product/view?id="+productId, 
        function (res) {
            res = $.parseJSON(res);
            this.setState({
                id: res.id,
                name: res.name,
                price:res.price,
            });
        }.bind(this));
    }
     
    render() {
 
        $('.page-header h1').text('Product Details');

        return (
            <div>
            <a href='javascript:void(0)'
                onClick={() => this.props.changeAppMode('read')}
                className='btn btn-primary margin-bottom-1em'>
                Product List
            </a>
 
            <form onSubmit={this.onSave}>
                <table className='table table-bordered table-hover'>
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{this.state.name}</td>
                    </tr>
 
                    <tr>
                        <td>Price ($)</td>
                        <td>${parseFloat(this.state.price).toFixed(2)}</td>
                    </tr>
 
                    </tbody>
                </table>
            </form>
        </div>
        );
    }
}