// component that renders a single product
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
                    <a href='javascript:void(0);'
                        onClick={() => this.props.changeAppMode('readOne', this.props.product.id)}
                        className='btn btn-info m-r-1em'> View
                    </a>
                    <a href='javascript:void(0);'
                        onClick={() => this.props.changeAppMode('update', this.props.product.id)}
                        className='btn btn-primary m-r-1em'> Edit
                    </a>
                    <a
                        onClick={() => this.props.changeAppMode('delete', this.props.product.id)}
                        className='btn btn-danger'> Delete
                    </a>
                </td>
            </tr>
        );
    }
}