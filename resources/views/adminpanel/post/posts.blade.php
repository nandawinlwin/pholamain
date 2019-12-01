@extends('adminpanel.layout.master')
@section('title','Admin')
@section('content')
<div id="page-wrapper">
        <br>
            <!-- /.row -->
            <div class="row">
                
                <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3> အိမ္ၿခံေျမ အေရာင္း / အငွား မ်ား</h3>
                            </div>
                      <div class="panel-body">
                            
                            
                            <table class="table table-condensed table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>ျပည့္နယ္ / တိုင္း</th>
                                        <th>ေစ်းႏွႈန္း</th>
                                        <th>အိမ္ၿခံေျမ အမ်ိဳးအစားမ်ား</th>
                                        <th>ေရာင္းရန္/ငွားရန္</th>
                                        <th>အိမ္ၿခံေျမ အေရာင္း / အငွား တင္သူ</th>
                                        <th>ျပင္ရန္</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    

                                    @foreach($showpost as $posts)
                                    <tr>
                                        <td>{{$posts->city}}</td>
                                        <td>{{$posts->price}}</td>
                                        <td>{{$posts->btype}}</td>
                                        <td>{{$posts->ptype}}</td>
                                        <td>{{$posts->user_id}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs">View</a>
                                            <a href="#" class="btn btn-primary btn-xs">Edit</a>
                                        </td>
                                    </tr>
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