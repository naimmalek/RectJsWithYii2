// component for the whole products table
class ProductsTable extends React.Component {

    constructor(props) {
        super(props);
       
        // console.log(this.props.products);
        this.state = {products: []};
        
        
    }

    componentWillReceiveProps(nextProps) {
        // console.log(nextProps.products);
        this.setState({products: nextProps.products});
    }

    render() {
        var p = this.state.products;
        // var p = this.props.products;
        // console.log(this.props.products);
        
        var rows = $.map(p.records,function(product, i) {
            // console.log(i);
            return (
                <ProductRow key={i} product={product} changeAppMode={this.props.changeAppMode} />
            );
        }.bind(this)); 

        
        return(
                <table className='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price($)</th>
                            <th className='action-column'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {rows}
                    </tbody>
                </table>
        );
        
        
    }
}