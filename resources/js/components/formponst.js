
import ReactDOM from 'react-dom';

import React, { Component, useState, useEffect } from 'react';
import { Head, useForm, usePage, Link } from '@inertiajs/inertia-react';

import axios from 'axios';

import Greeting from './Greeting.js'


function Formponst() {
  const [descrip, setDescription] = useState('');
  const [title, setTitle] = useState('');
  const [imag, setImag] = useState(null);
  const [progress, setProgresse] = useState(0);
  const serinput = document.querySelector('#search')
  const navbarNavreact = document.querySelector('#navbarNavreact')
  // const navbarNav = document.querySelector('#navbarNav')
  // const btnnoneS = document.querySelector('#btnnoneS')
  useEffect(() => {
    // const fi = document.getElementById('file').item(1);
    // console.log(fi)
    console.log(imag)

  }, [imag])

//   const { data, setData, errors, post, progress } = useForm({
//     title:"",
//     description:"",
//     image_path:null,
// });

function handleSubmit(e) {
  e.preventDefault();
  post("print.store");

  setData("title", "")
  setData("description", "")
  setData("image_path", null)
}
function getPost (e)  {
    e.preventDefault();

    const formData = new FormData();
    formData.append('title', title);
    formData.append('description', descrip);
    
      formData.append('image_path', imag);
  
  const form={
    title:title,
    description:descrip,
    image_path:imag,
  }
 axios.post('/print',form,{
      headers: {
        'Content-Type': 'multipart/form-data',
      },
      // onUploadProgress:({ loaded, total }) => setProgresse({progress: loaded/total})
    })
      .then(
        response => {
          console.log(JSON.stringify(response.data))
        }
      )
      .catch(error => {
        console.log("ERROR:: ", error);

      });
  }




  return (

    <form onSubmit={getPost}>
      <input className='form-control text-center' placeholder="ادخل العنوان" name='title'
        id="title" onchange={(e) => setDescription(e.target.value)} />
      <textarea classname="form-control text-center" style={{textAlign:"center",width:"100% ",margin:"auto"}} name='description' id="exampleFormControlTextarea1" rows="3"
        placeholder="اكتب الوصف المناسب" pattern="^{3,16}$" required="true" onchange={(e) => setTitle( e.target.value)}></textarea>

<div className="flex items-center justify-center w-full"
        style={{ width: '70%', overflow: "hidden", margin: "auto" }}>
        <div for="dropzone-file"
          className="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
          <div className="flex flex-col items-center justify-center pt-5 pb-6">
            <svg aria-hidden="true" style={{height:"100px", margin:"auto",width:"80%"}}
              className="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
              </path>
            </svg>
            <p className="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
              className="font-semibold">Click to upload</span> or drag and drop</p>
            <p className="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
              (MAX. 800x400px)</p>
            <p id="size"></p>
          </div>
          <input id="file" name='image_path' type="file" className="hidden" onChange={(e) => setImag(e.target.value)} />
        </div>
        <div className="progress" >
          <div className="progress-bar progress-bar-striped progress-bar-animated bg-success"  style={{width:progress}}>{progress}</div>
        </div>
      </div>
      <div className="modal-footer">
        <button type="button" className="btn btn-secondary"
          id="conteinermodleclos">Close</button>
        <button type='submit' id="example"
          className="btn btn-primary buttonprint" >نشر</button>
      </div>

    </form>
  )
}
export default Formponst;

ReactDOM.render(<Formponst />, document.getElementById('formpost'))