<?php

namespace App\Http\Controllers;
use App\Models\addleave;
use App\Models\deptadd;
use App\Models\userleave;
use App\Models\adcontact;
use App\Models\register;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        return view('admin.admin');
       
    }
    public function addleave(){
        return view('admin.addleave');
    }
    // public function viewcontact(){
    //     return view('admin.viewcontact');
    // }
    public function viewcontact()
    {
        $data['contents']=adcontact::get();
        return view('admin.viewcontact',$data);
    }

    
    public function addleaveAction(Request $request)
    {
        $serialno=$request->input('serialno');
        $leavetype=$request->input('leavetype');
       
       
       

        $data=[
           
            'serialno'=>$serialno,
            'leavetype'=>$leavetype,
            

        ];
        addleave::insert($data);
        
       return redirect('/');
    }
    public function leaveview()
    {
        $data['contents']=addleave::get();
        return view('admin.leaveview',$data);
    }

    public function deptview()
    {
        $data['contents']=deptadd::get();
        return view('admin.deptview',$data);
    }

    public function editleave($id)

    {
        $var=session('sessionid');
        $data['result']=addleave::where('id',$id)->get();

        return view('admin.editleave',$data);
    }
    public function editleaveAction(Request $request,$id){
        $serialno=$request->input('serialno');
        $leavetype=$request->input('leavetype');
        
        $data=[
            'serialno'=>$serialno,
            'leavetype'=>$leavetype
            
        ];
        addleave::where('id',$id)->update($data);
        //echo "success";
       return redirect('leaveview');
    }


    public function editdept($id)

    {
        $var=session('sessionid');
        $data['result']=deptadd::where('id',$id)->get();

        return view('admin.editdept',$data);
    }
    public function editdeptAction(Request $request,$id){
        $deptid=$request->input('deptid');
        $departmentname=$request->input('departmentname');
        
        $data=[
            'deptid'=>$deptid,
            'departmentname'=>$departmentname
            
        ];
        deptadd::where('id',$id)->update($data);
        //echo "success";
       return redirect('/departmentadd');
    }
    public function delete1($id){
        deptadd::where('id',$id)->delete();
        return redirect('leaveview');
     }




    public function delete($id){
        addleave::where('id',$id)->delete();
        return redirect('deptview');
     }

     public function departmentadd(){
        return view('admin.departmentadd');
    }
    public function deptaddAction(Request $request)
    {
        $deptid=$request->input('deptid');
        $departmentname=$request->input('departmentname');
       
       
       

        $data=[
           
            'deptid'=>$deptid,
            'departmentname'=>$departmentname,
            

        ];
        deptadd::insert($data);
        
       return redirect('departmentadd');
    }

     public function admintable()
     {
         $data['contents']=register::get();
        return view('admin.admintable',$data);
    }

    public function userleaveview()
    {
        $data['contents']=userleave::get();
       return view('admin.userleaveview',$data);
   }

   public function approve($id){
    userleave::where('status','applied')->where('id',$id)->update(['status'=>"approved"]);
    return redirect('userleaveview');

 }

 public function decline($id){
    userleave::where('status','applied')->where('id',$id)->update(['status'=>"declined"]);
    return redirect('userleaveview');
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
