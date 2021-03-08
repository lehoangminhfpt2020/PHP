<?php
?>
{{--thua ke tu app.blade--}}
@extends('layouts.app');

{{--noi dung trang con--}}
{{--dung app.css--}}
@section('content')
    <div class="panel-body">
        @include('errors.503')

        {{-- student infomation form--}}
        <form action="{{'student'}}" method="post" class="form-horizontal">
            {{csrf_field()}}

            <div class="form-group">
                {{--  student name input--}}
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name"  id="name" class="form-control" required>
                </div>
                {{-- age input--}}
                <label for="age" class="col-sm-3 control-label">Age</label>
                <div class="col-sm-6">
                    <input type="text" name="age"  id="age" class="form-control" max="255">
                </div>
                {{--   address input--}}
                <label for="address" class="col-sm-3 label-primary">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="address"  id="address" class="form-control" max="200">
                </div>
                {{--  telephone input--}}
                <label for="telephone" class="col-sm-3 label-primary">Telephone</label>
                <div class="col-sm-6">
                    <input type="text" name="telephone"  id="telephone" class="form-control" max="20">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Student
                    </button>
                </div>
            </div>
        </form>
        {{-- Display all student--}}
        @if(count($student) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Student List
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        {{-- collumn title--}}
                        <thead>
                        <td>Id</td>
                        <td>Name</td>
                        <td>age</td>
                        <td>Telephone</td>
                        <td>Address</td>
                        </thead>
                        {{--   collumn data--}}
                        <tbody>
                        @foreach($student as $students)
                            <tr>
                                <td class="table-text">
                                    <div>{{$students->id}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$students->name}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$students->age}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$students->telephone}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$students->address}}</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
