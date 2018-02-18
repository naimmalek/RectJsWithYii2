window.CreateProductComponent = React.createClass({
    
    
    // initialize values
getInitialState: function() {
    return {
        categories: [],
        selectedCategoryId: -1,
        name: '',
        description: '',
        price: '',
        successCreation: null
    };
},
 
// on mount, get all categories and store them in this component's state
componentDidMount: function() {
    this.serverRequest = $.get("http://localhost/api/category/read.php", function (categories) {
        this.setState({
            categories: categories.records
        });
    }.bind(this));
 
    $('.page-header h1').text('Create product');
},
 
// on unmount, stop getting categories in case the request is still loading
componentWillUnmount: function() {
    this.serverRequest.abort();
},
 
// handle form field changes here

});