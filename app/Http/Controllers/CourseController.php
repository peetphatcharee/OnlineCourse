<?php

namespace App\Http\Controllers;
use App\onlinecourse as Co;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
  
	public function getForm()
    {
   
        return view('form_addcourse');//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
	}
	public function postForm(Request $req)//เพิ่มคอร์ส
    {
		
        $data = array("Ac_Name"=>$req->input("Ac_Name"),
		"Ac_location"=>$req->input("Ac_location"),
		"Ac_DateStart"=>$req->input("Ac_DateStart"),
		"Ac_DateFinish"=>$req->input("Ac_DateFinish"),
		"Ac_TimeStart"=>$req->input("Ac_TimeStart"),
		"Ac_TimeFinish"=>$req->input("Ac_TimeFinish"),
		"Ac_member"=>$req->input("Ac_member"),
		"Ac_Organizer"=>$req->input("Ac_Organizer"),
		"Ac_Tel"=>$req->input("Ac_Tel"),
		"Ac_Email"=>$req->input("Ac_Email"),
		"Ac_Facbook"=>$req->input("Ac_Facbook"),
		"Ac_detail"=>$req->input("Ac_detail"));

        $insert = Co::postCo($data);
        return redirect('CourseList');
	}
	public function getCourse(){//แสดงรายการคอร์ส

        $Co = Co::getAll();
        //dd($Ac);

    	 $data = array('Co'=>$Co); 

    		return view('CourseList',$data);

	}
	public function getCourse2($id){//แสดงหน้ากิจกรรม2 ของ นศ

		// dd('fghjhgf');
		$Co = Co::getAll_Course2($id);//แสดงรายละเอียดของแต่ละกิจกรรม 
		   
		 $data = array('Co'=>$Co);     	
		return view('CourseDetail',$data);
		
		}
		public function getEdit($id) //แก้ไขคอร์ส
    {
		// dd($data);
        $activity = Co::select($id);
        // // $type = Ac::getType();
        $data = array('activity'=>$activity ,
				   );
		//dd($data)
        return view('form_editcourse',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
       
    }
    public function updateForm(Request $req) //ทำการอัพเดตคอร์ส
    {
		//dd($data);
		$Ac_ID = $req->input('Ac_ID');
        $Ac_Name = $req->input('Ac_Name');
		$Ac_location = $req->input('Ac_location');
		$Ac_DateStart = $req->input('Ac_DateStart');
        $Ac_DateFinish = $req->input('Ac_DateFinish');
        $Ac_TimeStart = $req->input('Ac_TimeStart');
		$Ac_TimeFinish = $req->input('Ac_TimeFinish');
		$Ac_member = $req->input('Ac_member');
        $Ac_Organizer = $req->input('Ac_Organizer');
        $Ac_Tel = $req->input('Ac_Tel');
		$Ac_Email = $req->input('Ac_Email');      
		$Ac_Facbook = $req->input('Ac_Facbook');
		$Ac_detail = $req->input('Ac_detail');

        $data = array("Ac_ID"=>$Ac_ID,
					"Ac_Name"=>$Ac_Name,		
					"Ac_location"=>$Ac_location,
					"Ac_DateStart"=>$Ac_DateStart,
					"Ac_DateFinish"=>$Ac_DateFinish,
					"Ac_TimeStart"=>$Ac_TimeStart,
					"Ac_TimeFinish"=>$Ac_TimeFinish,
					"Ac_member"=>$Ac_member,
					"Ac_Organizer"=>$Ac_Organizer,
					"Ac_Tel"=>$Ac_Tel,
					"Ac_Email"=>$Ac_Email,
					"Ac_Facbook"=>$Ac_Facbook,
					"Ac_detail"=>$Ac_detail);


        $insert = Co::updateCo($data,$Ac_ID);
        return redirect('CourseList');
	}
	public function del($id)//ลบกิจกรรม
    {
		
		$activity = Co::del($id);
		$register = Co::delac_re($id);

		//dd($activity);
        return redirect("CourseList");
       
	}
	public function getRe($id)//ลงทะเบียน
    {
		$idac=$id;
		$nameac=DB::table('activity')->where('Ac_ID',$idac)
        ->first(); //"Ac_Name"
		$data = array("id"=>$idac,"name"=>$nameac);
	
        return view('form_addregister',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
	}
	public function postRe(Request $req)//ลงทะเบียน
    {	
		
        $data = array("reg_name"=>$req->input("reg_name"),
					"reg_status"=>$req->input("reg_status"),
					"reg_address"=>$req->input("reg_address"),
					"reg_Tel"=>$req->input("reg_Tel"),
					"reg_Email"=>$req->input("reg_Email"),
					"reg_Facbook"=>$req->input("reg_Facbook"),
					"Ac_ID"=>$req->input("Ac_ID"));

        $insert = Co::postRe($data);
		return redirect('RegisterList');
	}
	public function getCo_Re(){//แสดงข้อมูลคอร์ส หน้า ลงทะเบียน

		$Co = Co::getAll_CoRe();
		//dd($Ac);

		 $data = array('Co'=>$Co); 

			return view('RegisterList',$data);
	  
		
	}
	public function getCo_Re2($id){//แสดงข้อมูลคอร์ส หน้า ลงทะเบียน2

		// dd('fghjhgf');
		$Co = Co::getAll_Re2($id);//แสดงรายละเอียดของแต่ละกิจกรรม 
		   
		 $data = array('Co'=>$Co);     	
		return view('RegisterDetail',$data);
		
		}
		public function getListReg($id){//แสดงรายชื่อการลงทะเบียนที่แก้ไขได้

			$a=Co::getAll_Reg_first($id);//แสดงหัวว่ากิจกรรมไหน
			$Co = Co::getAll_Reg($id);
			$data = array('Co'=>$Co,'name'=>$a,'Ac_ID'=>$id); 
			//dd($data);
			return view('ListReg',$data);
		   
		}
		public function getedit_re($id,$ac)//แก้ไขชื่อการลงทะเบียน
    {
		//dd($id);
		
        $register = Co::select_re($id,$ac);
		$data =array('register'=>$register,
					 'act_id'=>$ac);
		//dd($data);
        return view('form_editregister',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
       
    }
    public function updateForm_re(Request $req)//บันทึกลง database
    {
	
		$id = $req->input('id');
		$act_id = $req->input('act_id');
		//  dd($id);
        $reg_name = $req->input('reg_name');
		$reg_status = $req->input('reg_status');
		$reg_address = $req->input('reg_address');
		$reg_Tel = $req->input('reg_Tel');
		$reg_Email = $req->input('reg_Email');
		$reg_Facbook = $req->input('reg_Facbook');
		

        $data = array("id"=>$id,
					"reg_name"=>$reg_name,
					"reg_status"=>$reg_status,
					"reg_address"=>$reg_address,
					"reg_Tel"=>$reg_Tel,
					"reg_Email"=>$reg_Email,
					"reg_Facbook"=>$reg_Facbook);

					//dd($data);
        $insert = Co::updateRe($data,$id);
        return redirect("ListReg$act_id");
	}

	public function del_re($id,$ac)//ลบการลงทะเบียน
    {
		// dd($id);
        $register = Co::del_re($id);
        return redirect("ListReg$ac");
       
	}
	public function getRe_Co($id){//แสดงการลงทะเบียน หน้า admin

		$a=Co::getAll_Reg_first($id);//แสดงหัวว่ากิจกรรมไหน
        $Co = Co::getAll_Reg($id);
    	$data = array('Co'=>$Co,'name'=>$a,'Ac_ID'=>$id); 
		return view('Course_ListReg',$data);
	}
}

