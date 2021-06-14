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
                    <label class="col-md-3 form-control-label" for="hf-email">الرقم الجامعي</label>
                    <input type="text" id="hf-email" name="student_number" class="form-control is-invalid " placeholder="أدخل رقمك الجامعي .." >
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">الهاتف</label>
                    <input type="text" id="hf-email" name="phone" class="form-control is-invalid " placeholder="أدخل رقم الهاتف .." >
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">تاريخ الميلاد</label>
                    <input type="text" id="hf-email" name="date_birth" class="form-control is-invalid " placeholder="أدخل تاريخ الميلاد .." >
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">المعدل</label>
                    <input type="text" id="hf-email" name="average" class="form-control is-invalid " placeholder="أدخل المعدل .." >
                </div>


                <select name="major_id" class="custom-select" id="inputGroupSelect02">

                    @foreach($major as $m)

                        <option value="{{$m->id}}">{{ $m->name }}</option>

                    @endforeach

                </select>

                <br>     <br>


                <select name="company_id" class="custom-select" id="inputGroupSelect02">

                    @foreach($company as $c)

                        <option value="{{$c->id}}">{{ $c->name }}</option>

                    @endforeach

                </select>


                <br>


                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>حفظ</button>
                </div>
            </form>
        </div>

    </div>
    </div>

@endsection
