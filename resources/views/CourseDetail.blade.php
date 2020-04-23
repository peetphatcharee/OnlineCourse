@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <?php $i = 0; ?>
                        @foreach($Co as $key)
                <div class="card-header">รายการคอร์สอบรม  :{{$key->Ac_Name}}</div>

                <div class="card-body">
               
                <input type="hidden" value="{{$key->Ac_ID}}" name="Ac_ID">
    <div style="overflow:auto">   
                   <br> <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">รายละเอียดโครงการ</th>
                          <th scope="col">รายการลงทะเบียน</th>

                          @if (auth::user() != '')
                          
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php $i++?>

                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>
                            <strong>โครงการ &nbsp;:&nbsp;{{$key->Ac_Name}} </strong>
                          <br>สถานที่จัดโครงการ &nbsp;:&nbsp;{{$key->Ac_location}} 
                          <br>วันที่จัดโครงการ &nbsp;:&nbsp;{{$key->Ac_DateStart}} &nbspถึง&nbsp {{$key->Ac_DateFinish}}
                          <br>เวลาจัดโครงการ &nbsp;:&nbsp;{{$key->Ac_TimeStart}} &nbspถึง&nbsp {{$key->Ac_TimeFinish}}
                          <br>จำนวนที่รับ &nbsp;:&nbsp;{{$key->Ac_member}} 
                          <br>วิทยากร &nbsp;:&nbsp;{{$key->Ac_Organizer}} 
                          <br>เบอร์โทร &nbsp;:&nbsp;{{$key->Ac_Tel}} 
                          <br>E-mail &nbsp;:&nbsp;{{$key->Ac_Email}} 
                          <br>Facebook &nbsp;:&nbsp;{{$key->Ac_Facbook}}  
                          <br>Detail &nbsp;:&nbsp;{{$key->Ac_detail}}  
                          </td>
                         
                         <td><a href="./Course_ListReg{{$key->Ac_ID}}" class="btn btn-outline-info">รายชื่อ</a></td>
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
