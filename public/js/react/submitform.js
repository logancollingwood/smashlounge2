var ReactCSSTransitionGroup = React.addons.CSSTransitionGroup;

var SubmitForm = React.createClass({
  getInitialState: function() {
    return {url: '', type: '', title: '', data: '', desc: '', source: '', submitted: false, error: false};
  },

  _updateInputValue(e) {
    this.setState({email: e.target.value});
  },

  render: function() {
    var text = this.state.submitted ? 'Thank you!  Expect a follow up at '+email+' soon!' : 'Enter your email to request early access:';
    var style = this.state.submitted ? {"backgroundColor": "rgba(26, 188, 156, 0.4)"} : {};
    return (
      <div>
        {this.state.submitted ? null :
          <div className="overall-input">
              <ReactCSSTransitionGroup transitionName="example" transitionAppear={true}>
                  <input type="email" className="input_field" onChange={this._updateInputValue} ref="email" value={this.state.email} />

                  <div className="button-row">
                      <a href="#" className="button" onClick={this.saveAndContinue}>Request Invite</a>
                  </div> 
              </ReactCSSTransitionGroup>
          </div>                            
        }
      </div>
    )
  },

  saveAndContinue: function(e) {
    e.preventDefault()

    if(this.state.submitted==false) {
        email = this.refs.email.getDOMNode().value
        this.setState({email: email})
        this.setState({submitted: !this.state.submitted});

        request = $.ajax({ 
              url: "/gif", 
              type: "post", 
              data: 'email=' + email + '&_token={{ csrf_token() }}',
              data: {'email': email, '_token': $('meta[name=_token]').attr('content')},
              beforeSend: function(data){console.log(data);},
              success:function(data){},  
        });


        setTimeout(function(){
             this.setState({submitted:false});
        }.bind(this),5000);

    }

  }
});

React.render(<SubmitForm/>, document.getElementById('form'));