
@extends('adminpanel.layout.master')
@section('title','Admin')
@section('content')
<div id="page-wrapper">
        <br>
            <!-- /.row -->
            <div class="row">
                
                <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3> Blog Posts </h3>
                            </div>
                      <div class="panel-body">
                        
                        
                        <table class="table table-condensed table-hover table-primary">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Post Writer</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->category_id}}</td>
                                    <td>{{$blog->created_at}}</td>
                                    <td>{{$blog->user_id}}</td>
                                    <td>
                                        <a href="{{action('AdminController@blog_view',$blog->id)}}" class="btn btn-xs btn-primary">View</a>
                                        <a href="{{action('AdminController@blog_edit',$blog->id)}}" class="btn btn-xs btn-warning">Edit</a>
                                        <a href="{{action('AdminController@blog_del',$blog->id)}}" class="btn btn-xs btn-danger">Del</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                @endforeach
                              
                              
                                
                            </tbody>
                        </table>
                        

                      </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection