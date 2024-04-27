<?php

namespace App\Http\Controllers;
use App\Models\register;
use App\Models\userleave;
use App\Models\adcontact;
use App\Models\adminlogin;

use Illuminate\Http\Request;

class trsm extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/frontend.index');
        //
    }
   

    public function contact()
    {
        return view('/frontend.contact');
    
    }

    public function contactAction(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $mobilenumber=$request->input('mobilenumber');
        $message=$request->input('message');
       
        
        
       

        $data=[
           
            'name'=>$name,
            'email'=>$email,
            'mobilenumber'=>$mobilenumber,
            
            'message'=>$message
           

        ];
        adcontact::insert($data);
        
       return redirect('/');
    }

    
    public function profile()
    {
        return view('/frontend.profile');
    
    }
    public function home()
    {
        return view('/frontend.home');
    
    }

    public function adminlogin()
    {
        return view('/frontend.adminlogin');
    
    }

    public function adminloginAction(Request $request){

    
        $username=$request->input('username');
         $password=$request->input('password');
        
         // 
         $sub=adminlogin::where('username',$username)->where('password',$password)->first();
 
         if(isset($sub))
         {
             $request->session()->put(array('sessionid'=>$sub->id));
             //echo "success";
             return redirect('/admin');
         }
         else{
             return redirect('/admin')->with('error','invalid username and password');
         }
     }


    
    public function about_us()
    {
        return view('/frontend.about_us');
    
    }


    public function register(){
        return view('/frontend.register');
    }
    public function regAction(Request $request)
    {
        $empid=$request->input('empid');
        $name=$request->input('name');
        $department=$request->input('department');
        $position=$request->input('position');
       
        
        $username=$request->input('username');
        $password=$request->input('password');

        $data=[
            'empid'=>$empid,
            'name'=>$name,
            'department'=>$department,
            'position'=>$position,
            
            'username'=>$username,
            'password'=>$password

        ];
        register::insert($data);
        
       return redirect('/');
    }

    
    public function loginAction(Request $request){

    
        $username=$request->input('username');
         $password=$request->input('password');
        
         // 
         $sub=register::where('username',$username)->where('password',$password)->first();
 
         if(isset($sub))
         {
            // $request->session()->put(array(['sessionname'=>$sub->name,'sessionempid'=>$sub->empid]));
            $request->session()->put(array('sessionid'=>$sub->id));
            //echo "success";
             $request->session()->put('name',$sub['name']);
             //$request->session()->put('empid',$sub['empid']);
             //$request->session()->put(array('sessionname'=>$sub->name));
             //echo "success";
             return redirect('editprofile');
         }
         else{
             return redirect('/')->with('error','invalid username and password');
         }
     }

     public function applyleave(){
        return view('/frontend.applyleave');
    }


    public function applyAction(Request $request)
    {
        $name=$request->input('name');
        $leavetype=$request->input('leavetype');
        $fromdate=$request->input('fromdate');
        $todate=$request->input('todate');
       
        
        $description=$request->input('description');
       

        $data=[
           
            'name'=>$name,
            'leavetype'=>$leavetype,
            'fromdate'=>$fromdate,
            
            'todate'=>$todate,
            'description'=>$description

        ];
        userleave::insert($data);
        
       return redirect('/');
    }

    public function editprofile()

    {
        $var=session('sessionid');
        $data['result']=register::where('id',$var)->get();

        return view('frontend.editprofile',$data);
    }
    public function editprofileAction(Request $request,$id){
        $empid=$request->input('empid');
        $name=$request->input('name');
        $department=$request->input('department');
        $position=$request->input('position');
       
        
        $username=$request->input('username');
        $password=$request->input('password');

        $data=[
            'empid'=>$empid,
            'name'=>$name,
            'department'=>$department,
            'position'=>$position,
            
            'username'=>$username,
            'password'=>$password

        ];
        register::where('id',$id)->update($data);
        //echo "success";
       return redirect('/');
    }


    



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
