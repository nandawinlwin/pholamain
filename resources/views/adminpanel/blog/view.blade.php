
@extends('adminpanel.layout.master')
@section('title','Admin')
@section('content')
<div id="page-wrapper">
        <br>
            <!-- /.row -->
            <div class="row">
                
                <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3> {{$post->title}} </h3>
                            </div>
                      <div class="panel-body">

                        <div class="col-md-12">
                            
                            <div class="well"> 
                                <img class="img-responsive img-thumbnail" src="{{asset('blog_images')}}/{{$post->image}}" alt="Blog Post Image">
                                <hr>
                                <p class="badge badge-info pull-left">{{$post->created_at}}</p>
                                <p class="badge badge-info pull-left">
                                    @foreach($categories as $category)
                                        @if($post->category_id == $category->id)
                                            {{$category->name}}
                                        @endif

                                    @endforeach
                                </p>
                                <p class="badge badge-info">
                                    @foreach($users as $user)
                                        @if($post->user_id == $user->id)
                                            {{$user->name}}
                                        @endif

                                    @endforeach
                                </p>
                                <h3>ZawGyi </h3> {{$post->content_zg}}
                                <h3>Unicode </h3> {{$post->content_un}}
                            </div>

                        </div>
                        

                      </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection