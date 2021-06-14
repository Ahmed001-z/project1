@extends('layouts.app')
@section('row')

    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            @if(isset($user))
                <strong>تعديل </strong>مستخدم
            @else
                <strong>اضافة</strong>مستخدم
            @endif
        </div>
        <div class="card-block">
            <form  method="POST" action="/student/store"  class="form-horizontal ">
                @csrf

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">الاسم كاملاُ</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="أدخل الاسم.." >
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email"> رقم الشركة</label>
                    <input type="number" id="hf-email" name="student_number" class="form-control is-invalid " placeholder="أدخل رقمك الجامعي .." >
                </div>




                <br>


                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>حفظ</button>
                </div>
            </form>
        </div>

    </div>
    </div>

@endsection
