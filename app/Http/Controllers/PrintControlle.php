<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Postprint;
use Image;

class PrintControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $files = Postprint::latest()->get();
      // return Inertia::render('FileUpload', compact('files'));
     
      return view('print.index')->with('posts',Postprint::get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    }
   
  
    // public function store(Request $request)
    // {
    //     if($request->hasFile('profile_image')) {
    //         //get filename with extension
    //         $filenamewithextension = $request->file('profile_image')->getClientOriginalName();
    
    //         //get filename without extension
    //         $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
    //         //get file extension
    //         $extension = $request->file('profile_image')->getClientOriginalExtension();
    
    //         $time = time();
    
    //         //filename to store
    //         $filenametostore = $filename.'_'.$time.'.'.$extension;
    
    //         //small thumbnail name
    //         $smallthumbnail = $filename.'_small_'.$time.'.'.$extension;
    
    //         //medium thumbnail name
    //         $mediumthumbnail = $filename.'_medium_'.$time.'.'.$extension;
    
    //         //large thumbnail name
    //         $largethumbnail = $filename.'_large_'.$time.'.'.$extension;
    
    //         //Upload File
    //         $request->file('profile_image')->storeAs('public/profile_images', $filenametostore);
    //         $request->file('profile_image')->storeAs('public/profile_images/thumbnail', $smallthumbnail);
    //         $request->file('profile_image')->storeAs('public/profile_images/thumbnail', $mediumthumbnail);
    //         $request->file('profile_image')->storeAs('public/profile_images/thumbnail', $largethumbnail);
    
    //         //create small thumbnail
    //         $smallthumbnailpath = public_path('storage/profile_images/thumbnail/'.$smallthumbnail);
    //         $this->createThumbnail($smallthumbnailpath, 150, 93);
    
    //         //create medium thumbnail
    //         $mediumthumbnailpath = public_path('storage/profile_images/thumbnail/'.$mediumthumbnail);
    //         $this->createThumbnail($mediumthumbnailpath, 300, 185);
    
    //         //create large thumbnail
    //         $largethumbnailpath = public_path('storage/profile_images/thumbnail/'.$largethumbnail);
    //         $this->createThumbnail($largethumbnailpath, 550, 340);
    
    //         return redirect('image')->with('success', "Image uploaded successfully.");
    //     }
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


       $request->validate([
        'title' => 'required',
        'description'=> 'required',
        'image_path' => 'required',
        'image_path' => 'required|mimes:jpg,png,jped|max:8048',
     
       ]);   
    // //    $imageSize = $request->file('image_path')->getSize();
    // //    $fil->size = number_format($imageSize / 1048576,2);

    $extension = $request->image_path->extension();
       $slug = Str::slug($request->title, time());

      //  $slug = Str::slug($request->title, uniqid());

       $newImageName = uniqid() . '-' . $slug . '.' . $extension;
      //  $newImageName = uniqid() . '-' . $slug . '.' . $request->image_path->extension();
      // Image::make($newImageName)->resize(320, 240)->save($newImageName);
       $request->image_path->move('images/imageprintpost',$newImageName);

    
   
      Postprint::create([
        'title'=> $request->input('title'),
         'slug'=> $slug,
          'description'=>$request->input('description'),
           'image_path'=>$newImageName, 
           'user_id'=> auth()->user()->id,
      ]);


      return redirect()->route('print.index');
  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {     
       return view("print.show")->with('post', Postprint::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if(empty($request->image_path)){
            $request->validate([
                'title' => 'required',
                'description'=> 'required',
               ]);         
          Postprint::where('slug',$slug)
          ->update([
            'title'=> $request->input('title'),
             'slug'=> $slug,
              'description'=>$request->input('description'),
               'user_id'=> auth()->user()->id,
          ]);
    
        }else{

        $request->validate([
            'title' => 'required',
            'description'=> 'required',
            'image_path' => 'required|mimes:jpg,png,jped|max:5048',
         
           ]);  


           $newImageName = uniqid() . '-' . $slug . '.' . $request->image_path->extension();
      $request->image_path->move(public_path('imageprintpost'),$newImageName);
   
      Postprint::where('slug',$slug)
      ->update([
        'title'=> $request->input('title'),
         'slug'=> $slug,
          'description'=>$request->input('description'),
           'image_path'=>$newImageName, 
           'user_id'=> auth()->user()->id,
      ]);
    }

      return redirect()->route('print.show', $slug)->with('message','تم التعديل على المنشور');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Postprint::where('slug',$slug)->delete();
        return redirect()->route('print.index')->with('message','تم حذف على المنشور');

    }
}
