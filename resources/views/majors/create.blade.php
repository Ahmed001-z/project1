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
                <form role="form" method="post" action="/major/store"  class="form-horizontal ">
                    @csrf
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-email">اسم التخصص</label>
                        <div class="col-md-9">
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="أدخل الشركة.." >
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <span class="help-block">من فضلك أدخل إسم الشركة</span>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-email">الرقم</label>
                        <div class="col-md-9">
                            <input type="text" id="hf-email" name="phone" class="form-control @error('Phone') is-invalid @enderror" placeholder="أدخل رقم الشركة .." >
                            @error('Phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <span class="help-block">رجاءا أدخل رقم الشركة</span>
                        </div>
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
