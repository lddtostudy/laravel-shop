@extends('layouts._user_left')

@section('user_content')
    <table class="table table-bordered" style="text-align: center">
        <tr>
            <td style="width: 80px">昵称：</td>
            <td style="width: 120px">{{ $user->name }}</td>
            <td rowspan="2" style="width: 80px">
                <img width="100" src="{{ $user->avatar }}" alt="{{ $user->name }}">
            </td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>性别：</td>
            <td>{{ $user->sex }}</td>
            <td></td>
        </tr>
        <tr>
            <td>年龄：</td>
            <td>{{ $user->age }}</td>
            <td></td>
        </tr>
        <tr>
            <td>简介：</td>
            <td>{{ $user->introduction }}</td>
            <td></td>
        </tr>
    </table>
@stop
