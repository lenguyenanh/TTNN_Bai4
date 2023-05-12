@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>tài khoản</small>
                        </h1>
                        @if (count ($errors))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        <br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session ('success')}}
                    </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('admin.user.update', $user->id)}}" method="POST">
                        @csrf
                        @method ('put')
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" value="{{$user->name}}" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="{{$user->email}}" name="email" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" name="password" type="password" placeholder="Please Enter Pass" />
                            </div>
                            <div class="form-group">
                                <label>Xác nhận mật khẩu</label>
                                <input class="form-control" name="confirm" type="password" placeholder="Please Enter Pass" />
                            </div>
                            <div class="form-group">
                            <label>Quyền</label>
                                <label class="radio-inline">
                                <input name="is_admin" value="0" @if(!$user->is_admin) checked @endif type="radio"> User
                                </label>
                                <label class="radio-inline">
                                <input name="is_admin" value="1"  @if($user->is_admin) checked @endif type="radio"> Admin
                            </label>                              
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>



@endsection