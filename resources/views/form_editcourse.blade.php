@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('แก้ไขคอร์สอบรม') }}</div>

                <div class="card-body">
                    <form method="POST" action="update" >
                    <input type="hidden" name ="Ac_ID" value="{{$activity->Ac_ID}}" >
                    @csrf
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">โครงการ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Name"  value="{{$activity->Ac_Name}}"  required autofocus>
                            </div>
                    </div>

                    

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">วันที่จัดโครงการ</label>

                            <div class="col-md-3">
                                <input id="name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateStart"  value="{{$activity->Ac_DateStart}}" required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateFinish"  value="{{$activity->Ac_DateFinish}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เวลาจัดโครงการ</label>

                            <div class="col-md-3">
                                <input id="name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeStart"  value="{{$activity->Ac_TimeStart}}"  required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeFinish"  value="{{$activity->Ac_TimeFinish}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">จำนวนที่รับ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_member"  value="{{$activity->Ac_member}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">สถานที่จัดโครงการ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_location"  value="{{$activity->Ac_location}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">วิทยากร</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Organizer"  value="{{$activity->Ac_Organizer}}" required autofocus>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Tel"  value="{{$activity->Ac_Tel}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="name" type="Email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Email"  value="{{$activity->Ac_Email}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Facbook"  value="{{$activity->Ac_Facbook}}" required autofocus>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Detail</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_detail"  value="{{$activity->Ac_detail}}" required autofocus>
                        </div>
                </div>


                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('บันทึก') }}
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
