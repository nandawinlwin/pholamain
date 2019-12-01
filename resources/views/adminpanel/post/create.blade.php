@extends('adminpanel.layout.master')
@section('title','Admin')
@section('content')
<div id="page-wrapper">
        <br>
            <!-- /.row -->
            <div class="row">
                
                <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3> အိမ္ၿခံေျမ အေရာင္း / အငွား တင္ရန္</h3>
                            </div>
                      <div class="panel-body">
                            
                            <form action="" method="POST" role="form" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-sm">
                                            <label for="">ေခါင္းစဥ္</label>
                                            <input type="text" name="title" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">ေစ်းႏွႈန္း</label>
                                            <input type="text" name="price" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">ပိုင္ရွင္</label>
                                            <input type="text" name="owner" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">ျပည့္နယ္ / တိုင္း</label>
                                            <select class="form-control" name="city" id="">
                                                <option value="yangon">Yangon</option>
                                                <option value="mandalay">Mandalay</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">ၿမိဳ႕နယ္</label>
                                            <select class="form-control" name="township" id="">
                                                <option value="maharaungmay">Mahar Aung Myay</option>
                                                <option value="chanayetharzan">Chan Aye Thar Zan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-sm">
                                            <label for="">လမ္း</label>
                                            <input type="text" name="street" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">အိမ္ၿခံေျမ အမ်ိဳးအစားမ်ား</label>
                                            <select name="btype" id="" class="form-control">
                                                <option value="1">တိုက္ခန္း</option>
                                                <option value="2">ကြန္ဒို</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">ေရာင္းရန္/ငွားရန္</label>
                                            <select name="ptype" id="" class="form-control">
                                                <option value="sale">ေရာင္းရန္</option>
                                                <option value="rent">ငွားရန္</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">အိပ္ခန္း</label>
                                            <input type="text" name="bedroom" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">အဲယားကြန္း</label>
                                            <select name="aircon" id="" class="form-control">
                                                <option value="yes">ရွိ</option>
                                                <option value="no">မရွိ</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">ဧရိယာ</label>
                                            <input type="text" name="area" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-sm">
                                            <label for="">အလႊာ</label>
                                            <input type="text" name="floor" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-group-sm">
                                            <label for="">အျခားအခ်က္အလက္မ်ား</label>
                                            <textarea name="others" id="others" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>


                                    <script>
                                        CKEDITOR.replace( 'others' );
                                    </script>

                                    <div class="col-md-12">
                                        <div class="col-md-1">
                                            <img id="blah1" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah2" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah3" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah4" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah5" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah6" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah7" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah8" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah9" class="img-responsive" />
                                        </div>

                                        <div class="col-md-1">
                                            <img id="blah10" class="img-responsive" />
                                        </div>
                                    </div>

                                    <div class="clearfix"></div><br>


                                    <div class="col-md-12">
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#myModal">Image Upload</button>
                                        
                                        <input type="submit" class="btn btn-primary pull-right" value="Post">
                                    </div>


                                </div>


                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Select Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        
                                            <input type="file" name="img1[]" class=""  onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img2[]" class=""  onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img3[]" class=""  onchange="document.getElementById('blah3').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img4[]" class=""  onchange="document.getElementById('blah4').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img5[]" class=""  onchange="document.getElementById('blah5').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img6[]" class=""  onchange="document.getElementById('blah6').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img7[]" class=""  onchange="document.getElementById('blah7').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img8[]" class=""  onchange="document.getElementById('blah8').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img9[]" class=""  onchange="document.getElementById('blah9').src = window.URL.createObjectURL(this.files[0])">
                                            <input type="file" name="img10[]" class=""  onchange="document.getElementById('blah10').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Apply</button>
                                    </div>
                                    </div>
 
                                </div>
                                </div>

                               

                            </form>
                            
                      </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection