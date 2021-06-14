 @extends('layouts.app')

@section('row')

    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong> عرض</strong> المستخدمين
        </div>
        @csrf
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card-block">


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">اسم الموظف</th>
                    <th scope="col">البريد الالكتروني</th>
                    <th scope="col">تاريخ تفعيل الموظف</th>
                    <th scope="col">عمليات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>
                        <a href="{{url('dashboard/users/delete/'.$user->id)}}">
                            <i class="fa fa-fw fa-times-circle" style="font-size: 20px; color: red"></i>
                        </a>
                        <a href="{{url('dashboard/users/'.$user->id.'/edit')}}">
                            <i class="fa fa-fw fa-edit" style="font-size: 20px; color: green"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>



        </div>

    </div>
    </div>

@endsection
