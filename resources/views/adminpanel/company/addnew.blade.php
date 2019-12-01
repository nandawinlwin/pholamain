
@extends('adminpanel.layout.master')
@section('title','Admin')
@section('content')
<div id="page-wrapper">
        <br>
            <!-- /.row -->
            <div class="row">
                
                <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3> Add New Company </h3>
                            </div>
                      <div class="panel-body">
                            
                            
                            <form action="" method="POST" role="form">

                                <div class="form-group">
                                    <label for="">Company Logo <span class="text-danger">*</span></label>
                                    <input type="file" class="" id="" >
                                </div>
                            
                                <div class="form-group">
                                    <label for="">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="" placeholder="Your Company Name">
                                </div>

                                <div class="form-group">
                                    <label for="">Company Type <span class="text-danger">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">ေဆာက္လုပ္ေရး</option>
                                        <option value="">အိမ္ျခံေျမ ေရာင္း၀ယ္ငွား</option>
                                    </select>
                                </div>

                               <div class="form-group">
                                    <label for="">Company Website Or Facebook Page</label>
                                    <input type="text" class="form-control" id="" placeholder="www.companyname.com or www.facebook.com/companyname">
                                </div>

                                <div class="form-group">
                                    <label for="">Company Address <span class="text-danger">*</span></label>
                                    <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Your Company Address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Phone No <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="" placeholder="09000000000,090000000000">
                                </div>
                            
                                
                            
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                            
                            
                      </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection