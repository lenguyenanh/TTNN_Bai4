@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                            <small>thể loại bài viết</small>
                        </h1>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session ('success')}}
                        </div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th style="text-align: center;">Tên thể loại</th>
                                <th>Mô tả</th>
                                <th>Thứ tự hiện thị</th>
                                <th>trạng thái</th>
                                <th>Xóa</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr class="odd gradeX" align="center">
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->display_order}}</td>
                                <td>{{$category->status}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.category.delete', $category->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.category.edit', $category->id)}}">Edit</a></td>
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