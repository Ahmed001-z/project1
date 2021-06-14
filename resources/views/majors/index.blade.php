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
                    <th scope="col">اسم التخصص</th>
                    <th scope="col">رقم التخصص</th>

                </tr>
                </thead>
                <tbody>
                <?php  $i=1; ?>
                @foreach($major as $maj)
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td>{{$maj->name}}</td>
                        <td>{{$maj->companies_id}}</td>
                        <td>
                            <a href="{{url('$majors/delete/'.$com->id)}}">
                                <i class="fa fa-fw fa-times-circle" style="font-size: 20px; color: red"></i>
                            </a>
                            <a href="{{url('$majors/'.$com->id.'/edit')}}">
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
