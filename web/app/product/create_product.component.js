class CreateProductComponent extends React.Component {    
    

    constructor(props) {
        super(props);
        this.state = {
            name: '',
            price: '',
            successCreation: null
        };

        this.onNameChange = this.onNameChange.bind(this);
        this.onPriceChange = this.onPriceChange.bind(this);
        this.onSave = this.onSave.bind(this);
        
    }

    onNameChange(e) {
        this.setState({name: e.target.value});
    }
    onPriceChange(e) {
        this.setState({price: e.target.value});
    }
     
    onSave(e){
 
        // data in the form
        var form_data={
            name: this.state.name,
            price: this.state.price,
        };
        var base_url = $('#base_url').val();
        // submit form data to api
        $.ajax({
            url: base_url+"/product/create",
            type : "GET",
            contentType : 'application/json',
            data : form_data,
            success : function(response) {
                
                response = $.parseJSON(response);
                console.log(response);
                // api message
                this.setState({successCreation: response['message']});
                // empty form
                this.setState({name: ""});
                this.setState({price: ""});
                
     
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
     
                this.state.successCreation == 1 ?
                    <div className='alert alert-success'>
                        Product created successfully.
                    </div>
                : null
            }
            {
     
                this.state.successCreation == 2 ?
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