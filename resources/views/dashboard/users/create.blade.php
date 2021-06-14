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
            <form role="form" method="post" action="/dashboard/users/save"  class="form-horizontal ">
                @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">اسم التخصص</label>
                    <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="أدخل الاسم.." >
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block">من فضلك أدخل إسم التخصص</span>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">رقم التخصص</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-email" name="majors" class="form-control @error('majors') is-invalid @enderror" placeholder="أدخل رقم التخصص .." >
                        @error('majors')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block">رجاءا أدخل رقم التخصص</span>
                    </div>
                </div>




                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>حفظ</button>
                </div>
            </form>
        </div>

    </div>
    </div>

@endsection
