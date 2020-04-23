@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ลงทะเบียนคอร์สอบรม  : {{$name->Ac_Name}}</div>

                <div class="card-body">
                    <form method="POST" action="add_re" >
                    @csrf
                    <input type="hidden" value={{$id}} name="Ac_ID">

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ-นามสกุล</label>
                            <div class="col-md-6">
                                <input id="reg_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="reg_name"  value="" required autofocus>
                            </div>
                    </div>

                    

                    
                    <div class="form-group row">
                        <label for="price_id" class="col-md-4 col-form-label text-md-right">สถานะ</label>
                            <div class="col-md-6">
       
                                <select class="form-control" name="reg_status">
                                <option value="บุคคลทั่วไป">บุคคลทั่วไป</option>
                                <option value="บุคลากร">บุคลากร</option>
                                <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>                                
                                </select>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">ที่อยู่</label>
                        <div class="col-md-6">
                            <input id="reg_address" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="reg_address"  value="" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>
                        <div class="col-md-6">
                            <input id="reg_Tel" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="reg_Tel"  value="" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            <input id="reg_Email" placeholder="name@example.com" type="Email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="reg_Email"  value="" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>
                        <div class="col-md-6">
                            <input id="reg_Facbook" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="reg_Facbook"  value="" required autofocus>
                        </div>
                    </div>

                    
                   

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    บันทึก
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
