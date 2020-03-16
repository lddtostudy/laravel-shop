@extends('layouts._user_left')

@section('user_content')
    <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('shared._error')
                        <div class="form-group">
                            <label for="name-field" class="col-md-2 control-label">昵 称</label>
                            <div class="col-md-9">
                            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email-field" class="col-md-2 control-label">邮 箱</label>
                            <div class="col-md-9">
                            <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex-field" class="col-md-2 control-label">性 别</label>
                            <div class="col-md-9">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex" value="man"
                                           checked>
                                    男&nbsp;&nbsp;&nbsp;
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex" value="woman">
                                    女&nbsp;&nbsp;&nbsp;
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex" value="secret">
                                    保密
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age-field" class="col-md-2 control-label">年 龄</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="age" id="email-field" placeholder="{{ old('age', $user->age) }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="introduction-field" class="col-md-2 control-label">个人简介</label>
                            <div class="col-md-9">
                                <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="col-md-2 avatar-label">用户头像</label>
                            <div class="col-md-9">
                                <input type="file" name="avatar" class="form-control-file">

                                @if($user->avatar)
                                    <br>
                                    <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="100"/>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-primary">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@stop
