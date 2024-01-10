<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Models\Postprint;
class EditpasordController extends Controller
{

    public function getPost()
    {
        // gettype(mixed ,$postData) items attributes
        $postData = Postprint::all();

        // dd($postData);
        // return json_encode($postData);   
         return json_encode($postData);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        // $flawing = User::findOrFail($id);
        $token = $request->route()->parameter('token');

   
    
        return view('auth.edit')->with(['edit'=>User::where('id', $id)->first(),'token' => $token,]);
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
     *@param RegisterRequest $request
     * @param  \Illuminate\Http\  Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $password = Hash::make($request->password);
dd($request);

        // $use=  new PasswordReset();



        // $user->password = Hash::make($request->password);

        // $user->setRememberToken(Str::random(60));

        // $user->save();

      

        // $this->guard()->login($user);
    
        //    $password = Hash::make($request->password);
          
        //    User::where('id', $id)->update([
        //     'email' => $request->email,
        //     'username'=> $request->username,
        //     'password'=> $password,
        //    ]);
       

        // $user->setRememberToken(Str::random(60));

        // $user->save();

    
        // auth()->login($user);

        // return redirect()->route('welcome')->with('success', "Account successfully registered.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
