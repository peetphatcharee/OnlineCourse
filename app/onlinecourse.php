<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class onlinecourse extends Model
{
    public static function postCo($data){//เพิ่มคอร์ส
        return DB::table('activity')
        ->insert($data); //
    }
    public static function getAll(){//หน้าแสดงรายการคอร์ส
        return DB::table('activity')
        // ->join('branch','branch.branch_id','profressor.branch_id')
        ->get();
    }
    public static function getAll_Course2($id){//หน้าแสดงรายการคอร์สหน้า เพิ่มเติม
        return DB::table('activity')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม
       
        ->get();
    }
    public static function select($id)//แก้ไขคอร์ส
    {
        return DB::table('activity')
        ->where('Ac_ID',$id)
        ->first();
    }
    public static function updateCo($data,$Ac_ID)//อัพเดตคอร์ส

    {
      
        return DB::table('activity')
        ->where('Ac_ID',$Ac_ID)
        ->update($data);
    }
    public static function delac_re($id){//ลบทั้งคอร์สและลงทะเบียน
        return DB::table('register')
        //->join('student','student.id','activity.id')
        ->where('Ac_ID',$id)
        ->delete();
    }
    public static function del($id){//ลบกิจกรรม
        return DB::table('activity')
        //->join('student','student.id','activity.id')
        ->where('Ac_ID',$id)
        ->delete();
    }
    public static function postRe($data){//ลงทะเบียน
        return DB::table('register')
        ->insert($data); //
    }
    public static function getRe(){//ลงทะเบียน
        return DB::table('register')
      
        ->get();//get รับค่ามาทั้งหมด

    }
    public static function getAll_CoRe(){//แสดงข้อมูลคอร์ส หน้า ลงทะเบียน
        return DB::table('activity')
        ->get();
    }
    public static function getAll_Re2($id){//แสดงข้อมูลคอร์ส หน้า ลงทะเบียน 2
        return DB::table('activity')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม
       
        ->get();
    }

    public static function getAll_Reg($id){//แสดงรายชื่อการลงทะเบียน
        return DB::table('register')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม
       
        ->get();
    }
    public static function getAll_Reg_first($id){//หน้าแสดงรายชื่อ การลงทะเบียน จะแสดงหัวว่าเป็นลงทะเบียนคอร์สอะไร
        return DB::table('activity')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม

        ->get()->first();
    }
    public static function select_re($id,$ac)//แก้ไขการลงทะเบียน
    {
        return DB::table('register')
        ->where('id',$id)
        ->where('Ac_ID',$ac)
        ->first();
    }
    public static function updateRe($data,$id)//อัพเดตการลงทะเบียน

    {
      
        return DB::table('register')
        ->where('id',$id)
        
        ->update($data);
    }
    public static function del_re($id){//ลบการลงทะเบียน
        return DB::table('register')
        ->where('id',$id)
        ->delete();
    }
    
}
