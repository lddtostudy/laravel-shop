@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="btn-group-vertical" style="width: 180px" role="group" aria-label="...">
                <a href="{{ route('users.show',Auth::id()) }}" type="button"
                   @if($button == 'users_show')
                   class="btn btn-primary"
                   @else
                   class="btn btn-warning"
                   @endif
                >个人信息</a>
                @if(Auth::user()->id == $user->id)
                <a href="{{ route('users.edit',Auth::id()) }}" type="button"
                   @if($button == 'users_edit')
                   class="btn btn-primary"
                   @else
                   class="btn btn-warning"
                    @endif
                >修改个人信息</a>
                <a href="{{ route('user_addresses.index') }}" type="button"
                   @if($button == 'addresses_show' || $button == 'addresses_create_edit')
                   class="btn btn-primary"
                   @else
                   class="btn btn-warning"
                    @endif
                >收货地址</a>
                @endif
            </div>
        </div>
        <div class="col-md-10">@yield('user_content')</div>
    </div>
@stop
