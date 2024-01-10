import { Component  } from "react";



class Greeting extends Component{
    render(){
        return( 
  
           
            <a  key={this.props.key} style={{textAlign:'center',}} href={`/print/${this.props.uri}`} >
                <h6 style={{fontFamily:'Tajawal', fontSize:'15px', color:'black'}}>{this.props.name}</h6>
                </a>
          
    
            )
    }
}
export default Greeting;