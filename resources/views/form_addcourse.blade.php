@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มคอร์สอบรม') }}</div>

                <div class="card-body">
                    <form method="POST" action="add" >
                    @csrf
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">โครงการ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Name"  value="" required autofocus>
                            </div>
                    </div>

                    

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">วันที่จัดโครงการ</label>

                            <div class="col-md-3">
                                <input id="name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateStart"  value="" required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateFinish"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เวลาจัดโครงการ</label>

                            <div class="col-md-3">
                                <input id="name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeStart"  value="" required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeFinish"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">จำนวนที่รับ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_member"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">สถานที่จัดโครงการ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_location"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">วิทยากร</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Organizer"  value="" required autofocus>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Tel"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="name" type="Email" placeholder="name@example.com" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Email"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Facbook"  value="" required autofocus>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">รายละเอียดเพิ่มเติม</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_detail"  value="" required autofocus>
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
