
@extends('adminpanel.layout.master')
@section('title','Admin')
@section('content')
<div id="page-wrapper">

        <br>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-9">
                <form method="POST" role="form" enctype="multipart/form-data">   
                {{ csrf_field() }}
                <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="pull-left"> Blog Posts Edit </h3><br>
                                <input type="submit" class="btn btn-info pull-right" value="Post">
                                <div class="clearfix"></div>
                            </div>
                      <div class="panel-body">
                         
                            
                                
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" value="{{$blog->title}}" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="category" id="" class="form-control">
                                                @foreach($categories as $category)
                                                    @if($blog->category_id == $category->id)
                                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                    @else
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Content / ZG</label>
                                            <textarea name="content_zg" id="content_zg" class="form-control" id="" cols="30" rows="20">{{$blog->content_zg}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Content / UN</label>
                                            <textarea name="content_un" id="content_un" class="form-control" id="" cols="30" rows="20">{{$blog->content_un}}</textarea>
                                        </div>
                                    </div>

                                    <script>
                                        CKEDITOR.replace( 'content_zg' );
                                        CKEDITOR.replace( 'content_un' );
                                    </script>
                                </div>

                                <!-- -->
                                    <!-- Modal -->
                                    <div id="imageModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">ADD Image</h4>
                                        </div>
                                        <div class="modal-body">

                                            <input type="file" name="image[]" id="inputFile" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                              
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" onclick="fileInputUpload();" data-dismiss="modal">Apply</button>
                                            
                                        </div>
                                        </div>


                                    </div>
                                    </div>
                            <!-- -->
                                
                            
                            
                            
                      </div>
                </div>

               
                </form>
                </div>
                <!-- col md 9 -->

                <div class="col-md-3">
                    
                <div class="panel panel-primary">
                          <div class="panel-heading">
                                <h3 class="panel-title">Categoy</h3>
                          </div>
                          <div class="panel-body">

                                
                                <form action="{{action('AdminController@category')}}" method="POST" role="form">
                                
                                    <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            
                                            <input type="text" name="name" class="form-control">
                                            {{ csrf_field() }}
                                            
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                            <input type="submit" class="btn btn-primary" value="ADD">
                                    </div>
                                    </div>

                                
                                </form>
                                
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1 ?>
                                       @foreach($categories as $category)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <a href="{{action('AdminController@category_destory',$category->id)}}" class="btn btn-danger btn-xs">Del</a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                       @endforeach
                                    </tbody>
                                </table>
                                
                          </div>
                    </div>

                    <div class="panel panel-primary">
                          <div class="panel-heading">
                                <h3 class="panel-title">Image</h3>
                          </div>
                          <div class="panel-body">
                                <?php $images = json_decode($blog->image); ?>
                                @foreach($images as $image)
                                <img id="blah" src="{{asset('/blog_images/')}}/{{$image}}" class="img-responsive" />
                                @endforeach
                          </div>

                          <div class="panel-footer">

                                      
                                           
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal">Add Image</button>
                            
                            
                            
                          </div>
                    </div>
                    

                    

                    
                    
                </div>
                <!-- col md 3 -->
                
            </div>
            <!-- /.row -->

            
        </div>
        <!-- /#page-wrapper -->



@endsection