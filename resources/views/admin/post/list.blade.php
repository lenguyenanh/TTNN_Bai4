@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                            <small>bài viết</small>
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
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Thuộc thể loại</th>
                                <th>Người tạo bài viết</th>
                                <th>Thứ tự hiện thị</th>
                                <th>Trạng thái</th>
                                <th>Slug</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post )
                            <tr class="odd gradeX" align="center">
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{$post->author_id}}</td>
                                <td>{{$post->display_order}}</td>
                                <td>{{$post->status}}</td>
                                <td>{{$post->slug}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.post.delete', $post->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.post.edit', $post->id)}}">Edit</a></td>
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