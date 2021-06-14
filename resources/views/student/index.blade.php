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
                    <th scope="col">المعرف</th>
                    <th scope="col">الاسم كاملا</th>
                    <th scope="col">الرقم الجامعي</th>
                    <th scope="col">االهاتف</th>
                    <th scope="col">تاريخ الميلاد</th>
                    <th scope="col">المعدل</th>
                    <th scope="col">التخصص</th>
                    <th scope="col">الشركة</th>

                </tr>
                </thead>
                <tbody>
                <?php  $i=1; ?>
                @foreach($studen as $stu)
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->student_number}}</td>
                        <td>{{$stu->phone}}</td>
                        <td>{{$stu->date_birth}}</td>
                        <td>{{$stu->average}}</td>
                        <td>{{$stu->major_id}}</td>
                        <td>{{$stu->company_id}}</td>
                        <td>
                            <a href="{{url('$student/delete/'.$com->id)}}">
                                <i class="fa fa-fw fa-times-circle" style="font-size: 20px; color: red"></i>
                            </a>
                            <a href="{{url('$student/'.$com->id.'/edit')}}">
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
