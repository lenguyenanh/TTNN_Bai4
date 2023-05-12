@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                            <small>menu</small>
                        </h1>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session ('success')}}
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Url</th>
                                <th>Menu con</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($menus as $menu )
                            <tr class="odd gradeX" align="center">
                                <td>{{$menu->id}}</td>
                                <td>{{$menu->title}}</td>
                                <td>{{$menu->url}}</td>
                                <td>{{$menu->id_parent}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.menu.delete', $menu->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.menu.edit', $menu->id)}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>



@endsection