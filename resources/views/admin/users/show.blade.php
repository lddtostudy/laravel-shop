<div class="box box-info">
    <div class="box-header with-buser">
        <h3 class="box-title">ID：{{ $user->id }}</h3>
        <div class="box-tools">
            <div class="btn-group float-right" style="margin-right: 10px">
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-default"><i class="fa fa-list"></i> 列表</a>
            </div>
        </div>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td width="300px">昵称：</td>
                <td width="500px">{{ $user->name }}</td>
                <td>邮箱：</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>hash加密后的密码：</td>
                <td>{{ $user->password }}</td>
                <td>头像：</td>
                <td rowspan="2"><img style="width: 70px;height: 70px" src="{{ $user->avatar  }}"></td>
            </tr>
            <tr><td colspan="3" style="height: 35px"></td></tr>
            <tr>
                <td>性别：</td>
                <td>{{ $user->sex }}</td>
                <td>年龄：</td>
                <td>{{ $user->age }}</td>
            </tr>
            <tr>
                <td rowspan="{{ $user->addresses->count()+1 }}">收货地址</td>
            </tr>
            @foreach($user->addresses as $addresses)
                <tr>
                    <td colspan="3">{{ $addresses->full_address }} {{ $addresses->contact_name }} {{ $addresses->contact_phone }}</td>
                </tr>
            @endforeach
            <tr>
                <td>创建时间</td>
                <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                <td>更新时间：</td>
                <td>{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
