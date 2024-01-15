import React from "react";

import ReactDOM from 'react-dom';
import { Zoom } from "react-slideshow-image";
import "react-slideshow-image/dist/styles.css";


const SimpleSlider =()=> {


  
const images = [
    {image:'images/img_lights_wide.jpg',title:'caption'}
    ,{image:"images/img_mountains_wide.jpg",title:"caption text"}
    ,{image:'images/img_nature_wide.jpg',title:"caption style"},
    {image:"images/img_snow_wide.jpg",title:'numbertext caption'}
  ];
  return( 
  < >
  <h1>hllow</h1>
<div className="slide-container">

        <Zoom scale={0.4}>
          {
            images.map((each, index) => <img key={index} style={{width: "100%"}} src={each.image} />)
          }
        </Zoom>
      </div>       
  </>)};
export default SimpleSlider;
ReactDOM.render(<SimpleSlider />, document.getElementById('podcast'))