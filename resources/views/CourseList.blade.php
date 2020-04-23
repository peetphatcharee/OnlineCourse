@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" >รายการคอร์สอบรม </div>

                <div class="card-body">
                <div align="right"> <a href="form_addcourse" class="btn btn-success"><img src="<?php echo asset('img/plus.png' );  ?> " width="20" height="20" >&nbsp;เพิ่มคอร์ส</a> </div>
                
    <div style="overflow:auto">   
                   <br> <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">รายละเอียดโครงการอบรม </th>
                         
                          
                         
                          @if (auth::user() != '')
                          <th></th>
                          <th></th>
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach($Co as $key)
                        <?php $i++?>
              
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>
                            <strong>โครงการ :&nbsp;{{$key->Ac_Name}} </strong>
                          <br>วิทยากร &nbsp;:&nbsp;{{$key->Ac_Organizer}} 
                          <br>วันที่จัดโครงการ :&nbsp;{{$key->Ac_DateStart}} &nbspถึง&nbsp {{$key->Ac_DateFinish}}
                          <br> <a href="CourseDetail{{$key->Ac_ID}}" class="btn btn-outline-info"><img src="<?php echo asset('img/icons8-info-64.png' );  ?> " width="20" height="20" >&nbsp;รายละเอียดเพิ่มเติม</a>
                          </td>
                         
                       
                           <td><a href ="edit{{$key->Ac_ID}}" class="btn btn-secondary"><img src="<?php echo asset('img/edit.png' );  ?> " width="20" height="20" >&nbsp;แก้ไข</a></td>
                          <td><a href ="del{{$key->Ac_ID}}" class="btn btn-danger"><img src="<?php echo asset('img/delete.png' );  ?> " width="20" height="20" >&nbsp;ลบ</a></td>   
                           </tr>
                        @endforeach

                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
