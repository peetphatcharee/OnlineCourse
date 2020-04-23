@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
              
                <div class="card-header">รายการลงทะเบียน : {{$name->Ac_Name}}</div>

                <div class="card-body">
               
                
    <div style="overflow:auto">   
                   <br> <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">รายละเอียดการลงทะเบียน</th>
                          <th>สถานะ</th>
                          <th>วัน/เวลาลงชื่อ</th>
                          <th></th>
                          <th></th>
                         
                         
                          <!-- @if (auth::user() != '')
                          <th></th>
                          <th></th>
                          @endif -->

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach($Co as $key)
                        <?php $i++?>

                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>ชื่อ-นามสกุล :&nbsp;{{$key->reg_name}} 
                            <br>ที่อยู่ :&nbsp;{{$key->reg_address}}    
                            <br>เบอร์โทร :&nbsp;{{$key->reg_Tel}}   
                            <br>Email :&nbsp;{{$key->reg_Email}}  
                            <br>Facebook :&nbsp;{{$key->reg_Facbook}}                </td>
                          <td>{{$key->reg_status}}</td>
                          <td>{{$key->created_at}}</td>
                          <td><a href ="form_editregister{{$key->id}}_{{$Ac_ID}}" class="btn btn-secondary"><img src="<?php echo asset('img/edit.png' );  ?> " width="20" height="20" >&nbsp;แก้ไข</a></td>
                          <td><a href ="re_del{{$key->id}}_{{$Ac_ID}}" class="btn btn-danger"><img src="<?php echo asset('img/delete.png' );  ?> " width="20" height="20" >&nbsp;ลบ</a></td> 
                           
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
