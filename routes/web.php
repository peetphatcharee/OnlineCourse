<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');  

Route::get('form_addcourse','CourseController@getForm'); //หน้าเพิ่มคอร์ส
Route::post('add','CourseController@postForm');
Route::get('/CourseList', 'CourseController@getCourse');//หน้าแสดงรายการคอร์ส 1
Route::get('/CourseDetail{id}', 'CourseController@getCourse2');//หน้าแสดงรายการคอร์ส 2 เพิ่มเติม

Route::get('edit{id}','CourseController@getEdit');//แก้ไขคอร์ส
Route::post('update','CourseController@updateForm');//ทำการอัพเดตคอร์ส

Route::get('del{id}','CourseController@del');//ลบคอร์ส

Route::get('add_register{id}','CourseController@getRe'); //หน้าลงทะเบียน
Route::post('add_re','CourseController@postRe');

Route::get('/RegisterList', 'CourseController@getCo_Re');//แสดงข้อมูลคอร์ส หน้า ลงทะเบียน
Route::get('/RegisterDetail{id}', 'CourseController@getCo_Re2');//แสดงข้อมูลคอร์ส หน้า ลงทะเบียน 2

Route::get('/ListReg{id}', 'CourseController@getListReg');//แสดงรายชื่อการลงทะเบียน

Route::get('form_editregister{id}_{ac}','CourseController@getedit_re');//แก้ไขชื่อการลงทะเบียน
Route::post('update_re','CourseController@updateForm_re');//ทำการอัพเดตชื่อการลงทะเบียน

Route::get('re_del{id}_{ac}','CourseController@del_re');//ลบรายการลงทะเบียน

Route::get('/Course_ListReg{id}', 'CourseController@getRe_Co');//แสดงรายชื่อการลงทะเบียน หน้า 

