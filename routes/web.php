<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trsm;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [trsm::class,'index']);

Route::get('/admin', [adminController::class,'admin']);
Route::get('/home', [trsm::class,'home']);
Route::get('/approve/{id}',[adminController::class,'approve']);
Route::get('/decline/{id}',[adminController::class,'decline']);

Route::get('/admintable', [adminController::class,'admintable']);
Route::get('/userleaveview', [adminController::class,'userleaveview']);

Route::get('/adminlogin', [trsm::class,'adminlogin']);
Route::post('/adminloginAction',[trsm::class,'adminloginAction']);



Route::get('/addleave',[adminController::class,'addleave']);
Route::post('/addleaveAction',[adminController::class,'addleaveAction']);
Route::get('/leaveview',[adminController::class,'leaveview']);

Route::get('/editleave/{id}',[adminController::class,'editleave']);
Route::post('/editleaveAction/{id}',[adminController::class,'editleaveAction']);

Route::get('/delete/{id}',[adminController::class,'delete']);

Route::get('/departmentadd',[adminController::class,'departmentadd']);
Route::post('/deptaddAction',[adminController::class,'deptaddAction']);

Route::get('/deptview',[adminController::class,'deptview']);
Route::get('/delete1/{id}',[adminController::class,'delete1']);

Route::get('/editdept/{id}',[adminController::class,'editdept']);
Route::post('/editdeptAction/{id}',[adminController::class,'editdeptAction']);

Route::get('/editprofile',[trsm::class,'editprofile']);
Route::post('/editprofileAction/{id}',[trsm::class,'editprofileAction']);



//Route::get('/profile',[trsm::class,'profile']);






Route::post('/loginAction',[trsm::class,'loginAction']);

Route::get('/applyleave',[trsm::class,'applyleave']);
Route::get('/contact',[trsm::class,'contact']);
Route::post('/contactAction',[trsm::class,'contactAction']);


Route::get('/viewcontact',[adminController::class,'viewcontact']);
Route::get('/about_us',[trsm::class,'about_us']);


Route::post('/applyAction',[trsm::class,'applyAction']);

Route::get('/register',[trsm::class,'register']);
Route::post('/regAction',[trsm::class,'regAction']);

