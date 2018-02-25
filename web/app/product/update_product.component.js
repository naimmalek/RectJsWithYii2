
class UpdateProductComponent extends React.Component {    
    
    constructor(props) {
        super(props);
        
        this.state = {
            id: 0,
            name: '',
            price: 0,
            successUpdate: null
        };

        this.onNameChange = this.onNameChange.bind(this);
        this.onPriceChange = this.onPriceChange.bind(this);
        this.onSave = this.onSave.bind(this);
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

    componentWillUnmount() {
        this.serverRequest.abort();
    }

    onNameChange(e) {
        this.setState({name: e.target.value});
    }
    onPriceChange(e) {
        this.setState({price: e.target.value});
    }

    onSave(e){
 
        var productId = this.props.productId;
        // data in the form
        var form_data={
            name: this.state.name,
            price: this.state.price,
        };
     
        // submit form data to api
        $.ajax({
            url: "http://localhost/RectJsWithYii2/web/product/update?id="+productId,
            type : "GET",
            contentType : 'application/json',
            data : form_data,
            success : function(response) {
                
                response = $.parseJSON(response);
                console.log(response);
                // api message
                this.setState({successUpdate: response['message']});
                
            }.bind(this),
            error: function(xhr, resp, text){
                // show error to console
                console.log(xhr, resp, text);
            }
        });
     
        e.preventDefault();
    }

    render() {
 
        $('.page-header h1').text('Create Product');

        return (
        <div>
            {
     
                this.state.successUpdate == 1 ?
                    <div className='alert alert-success'>
                        Product updated successfully.
                    </div>
                : null
            }
            {
     
                this.state.successUpdate == 2 ?
                    <div className='alert alert-danger'>
                        Unable to save product. Please try again.
                    </div>
                : null
            }
     
            <a href='javascript:void(0)'
                onClick={() => this.props.changeAppMode('read')}
                className='btn btn-primary margin-bottom-1em'> View Products
            </a>
     
     
            <form onSubmit={this.onSave}>
                <table className='table table-bordered table-hover'>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input
                            type='text'
                            className='form-control'
                            value={this.state.name} 
                            required 
                            onChange={this.onNameChange} />
                        </td>
                    </tr>
     
                    <tr>
                        <td>Price ($)</td>
                        <td>
                            <input
                            type='number'
                            step="0.01"
                            className='form-control'
                            value={this.state.price} 
                            required 
                            onChange={this.onPriceChange}/>
                        </td>
                    </tr>
     
                    <tr>
                        <td></td>
                        <td>
                            <button type='submit' 
                            className='btn btn-primary'>Save</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        );
    }

}