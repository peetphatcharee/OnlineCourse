@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">แก้ไขการลงทะเบียน </div>

                <div class="card-body">
                    <form method="POST" action="update_re" >
                    @csrf
                    <input type="hidden" value="{{$register->id}}" name="id">
                    <input type="hidden" value="{{$act_id}}" name="act_id">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ-นามสกุล</label>
                        <div class="col-md-6">
                            <input id="reg_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                            name="reg_name"  value="{{$register->reg_name}}"> required autofocus>
                        </div>
                </div>

                

                
                <div class="form-group row">
                    <label for="price_id" class="col-md-4 col-form-label text-md-right">สถานะ</label>
                        <div class="col-md-6">
   
                            <select class="form-control" name="reg_status" value="{{$register->reg_status}}">
                            <option value="บุคคลทั่วไป">บุคคลทั่วไป</option>
                            <option value="บุคลากร">บุคลากร</option>
                            <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>                                
                            </select>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">ที่อยู่</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="reg_address"  value="{{$register->reg_address}}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="reg_Tel"  value="{{$register->reg_Tel}}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input id="name" type="Email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="reg_Email"  value="{{$register->reg_Email}}"  required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="reg_Facbook"  value="{{$register->reg_Facbook}}" required autofocus>
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
