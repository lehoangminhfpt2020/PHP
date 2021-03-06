

{{--thừa kế từ app.blade template--}}
@extends('layouts.app');

{{--Nội dung ở trang con--}}
@section('content')

    {{--Định nghĩa nội dung trang task --}}
    <div class="panel-body">

        {{--Thông báo lỗi--}}
        @include('erroes.503')

        {{-- Form nhập thông tin về task --}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

            {{--tên task--}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">

                </div>
            </div>


            {{-- nút task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus">add task</i>
                    </button>
                </div>
            </div>
        </form>

        {{--hiển thị nội dung--}}
        @if(count($task)>0)
            <div class="panel panel-default">
            <div class="panel-heading">
                Current Task
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
            {{--  tao tieude cua cot--}}
                    <thead>
                        <td>Task</td>
                        <td>&nbsp</td>
                    </thead>

                    {{--tao cac dong de hien thi noi dung--}}
                <body>
                    @foreach(task as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{$task->name}}</div>
                            </td>
                            <td>

                            </td>
                        </tr>
                </body>
                </table>
            </div>
        </div>
    </div>

@endsection
