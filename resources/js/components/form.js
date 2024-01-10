
import ReactDOM from 'react-dom';

import React, { Component, useState,useEffect } from 'react';

import axios from 'axios';

import Greeting from './Greeting.js'


function Form() {
  const [datasup, setData] = useState([]);
  const [fromcity,setFromcity]=useState([]);
  const [search,setSearch]=useState('');
const serinput = document.querySelector('#search')
const navbarNavreact = document.querySelector('#navbarNavreact')
// const navbarNav = document.querySelector('#navbarNav')
// const btnnoneS = document.querySelector('#btnnoneS')
  useEffect(()=>{
    getPost();
    serinput.addEventListener('keyup', function(){
      setSearch(serinput.value);
      console.log(serinput.value);
      navbarNavreact.style.display='none';
    })
    setSearch(serinput.value);
  },[])
const getPost = async()=>{
  await axios.get('/sendrequest',{
    method:'Get',
    headers: { 'Content-Type': 'application/json' ,
},
  })
  .then(
     response => {
      setData(response.data)
      console.log(JSON.stringify(response.data))
    } 
      )
  .catch(error => {
      console.log("ERROR:: ",error);
      
      });
}
useEffect(()=>{
  setFromcity(datasup.filter(i=> i.title.includes(search.toLowerCase())))
  if(search.length <= 0){
    navbarNavreact.style.display='flex';
  }
},[search,datasup])
  return (
<> 
{/* <input name='search' onChange={(e)=> setSearch(e.target.value)} /> */}
{/* className="navbar-nav" */}
<div   style={search.length > 0 ?{ display:' block',backgroundColor:'#fff', borderRadius:'10px'}: { display:'none'}}>
{fromcity.map((e,index)=>(
<div style={{width:'80%',textAlign:'center', margin:"auto", justifyContent:'space-around', alignItems:'center', flexDirection:'column-reverse'}}>
<Greeting key={index} uri={e.slug} name={e.title}/>
</div>
//  <h>{e.title}</h>
))}
</div>
</>
  )
}
export default Form;

ReactDOM.render(<Form />, document.getElementById('exampled'))