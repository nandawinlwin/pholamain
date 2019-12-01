@include('header')
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="https://cdn.shweproperty.com/assets/images/banners/AYA-banner-large.jpg" width="100%">
            </div>
        </div>
    </div><br><br>


    <div class="fullbg"><br>
        <div class="container">
            <div class="row"> 
            <div class="col-lg-2">
                <select class="form-control" required>
                    <option>ေစ်းႏွုန္း ပမာဏ</option>
                    <option>၁၀၀ သိန္း</option>
                    <option>၂၀၀ သိန္း</option>
                    <option>၃၀၀ သိန္း</option>
                    <option>၄၀၀ သိန္း</option>
                    <option>၅၀၀ သိန္း</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control" required>
                    <option>အိပ္ခန္း</option>
                    <option>၁</option>
                    <option>၂</option>
                    <option>၃</option>
                    <option>၄</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control" required>
                    <option>ျမိဳ႕နယ္</option>
                    <option>လမ္းမေတာ္</option>
                    <option>လသာ</option>
                    <option>အလံု</option>
                    <option>စမ္းေခ်ာင္း</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control" required>
                    <option>တိုင္းေဒသႀကီးအားလံုး</option>
                    <option>ရန္ကုန္</option>
                    <option>ပဲခူး</option>
                    <option>ခ်င္း</option>
                    <option>ကခ်င္</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control" required>
                    <option>အိမ္ျခံေျမအမိ်ဳးအစားမ်ား</option>
                    <option>တိုက္ခန္း</option>
                    <option>ကြန္ဒို</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control" required>
                    <option>၀ယ္ရန္</option>
                    <option>ငွားရန္</option>
                    <option>စီမံကိန္းအသစ္မ်ား</option>
                </select>
            </div>
        </div>
        <hr>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-color"><h3 style="margin: 10px 0;">{{$postdetail->title}}</h3></div>
              <div class="panel-body panel-body-color">
                  
                <div class="row">
                <div class="col-sm-12"> 

                    
                    <!-- <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,599,999 <small class="pull-right">209 Chestnut Hill ve</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>16,581 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>8 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>4 Baths</li>
                                </ul>

                                <p class="hidden-xs">Built in 1909 by
                                pittsburgh steel magnate henry a. laughlin,
                                greylock is a classic chestnut hill stone
                                mansion once cons...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of ng and Foster-Devon</span>
                            </div>
                        </div>
                    </div> -->

                    
        
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-12">
                          <?php
                 $itemimage = $postdetail->img;
                 $itemimage = json_decode($itemimage, true);
                 $i=0;
                 $j=0;
                ?>
                <div class="preview-pic tab-content">
                 @foreach ($itemimage as $itemimages)
                    <?php 
                        $i++;
                    ?>
                    
                          <div class="tab-pane" id="pic-{{$i}}"><img src="/../item_images/{{$itemimages}}" /></div>
                 @endforeach
                  
                            </div>

                        
                        <ul class="preview-thumbnail nav nav-tabs">
                        @foreach ($itemimage as $itemimages)
                    <?php 
                        $j++;
                    ?>
                    
                          <li><a data-target="#pic-{{$j}}" data-toggle="tab"><img src="/../item_images/{{$itemimages}}"  /></a></li>
                    @endforeach
                        </ul>
                        
                    </div>
                    
                </div><br>

                <div>
                    <div class="details col-md-12"  style="background: #fff;padding: 10px;border:1px solid #2b78b8;">
                        <h3 class="product-title" style="color: #2b78b8;text-decoration: underline;">အေသးစိတ္အခ်က္အလက္မ်ား</h3><br>

                            <label><span style="color: #2b78b8;">အိမ္ၿခံေၿမ အမည္ </span>: {{$postdetail->title}}</label><br>  

                            <div class="row">
                        <div class="col-lg-6">

                        <label><span style="color: #2b78b8;">တုိင္း၊ၿပည္နယ္</span>:
{{$postdetail->city}}</label>
<label><span style="color: #2b78b8;">ၿမိဳ႕ ၊ ၿမိဳ႕နယ္</span> :
{{$postdetail->township}}</label>
<label><span style="color: #2b78b8;">လမ္းအမည္</span>:
{{$postdetail->street}}</label><br>
<label><span style="color: #2b78b8;">အဲယားကြန္း</span>:
{{$postdetail->aircon}}</label><br>

                                <label><span style="color: #2b78b8;">ပိုင္ရွင္</span> :
{{$postdetail->owner}}</label>

                        </div>
                        <div class="col-lg-6">

                        <label><span style="color: #2b78b8;">အိပ္ခန္း</span>:
{{$postdetail->bedroom}}</label>
<label><span style="color: #2b78b8;">အက်ယ္</span> :
{{$postdetail->area}}</label>
<label><span style="color: #2b78b8;">အလႊာ</span>:
{{$postdetail->floor}}</label><br>
<label><span style="color: #2b78b8;">အျခား</span>:
 {{$postdetail->others}}</label>
                        </div>
                        
                        </div>
                        <div><hr></div>
                        <div class="row">
                            
                            <div class="col-lg-2">
                                <button class="btn btn-success">ဖုန္းျဖင့္ဆက္သြယ္ရန္</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    

                

            
            </div><!-- End row -->

              </div>
            </div>
            </div>
            <div class="col-lg-4">
                <img src="https://d2qjfpig6fsa51.cloudfront.net/business/15216236715ab2227749eb6.gif" width="100%"><br><br>
                <img src="https://d2qjfpig6fsa51.cloudfront.net/business/15226602695ac1f3ad83cc0.gif" width="100%"><br><br>
                <img src="https://d2qjfpig6fsa51.cloudfront.net/business/15226602695ac1f3ad83cc0.gif" width="100%"><br><br>
                <img src="https://d2qjfpig6fsa51.cloudfront.net/business/15226602695ac1f3ad83cc0.gif" width="100%"><br><br>
                <img src="https://d2qjfpig6fsa51.cloudfront.net/business/15226602695ac1f3ad83cc0.gif" width="100%"><br><br>
                <img src="https://d2qjfpig6fsa51.cloudfront.net/business/15226602695ac1f3ad83cc0.gif" width="100%">
            </div>
        </div>
    </div>
    <hr>

    
    </div>
    <div class="container">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-color"><h3 style="margin: 10px 0;">ဆက္စပ္ေနေသာ အိမ္မ်ား</h3></div>
              <div class="panel-body panel-body-color">
                  
                <div class="row">
                <div class="col-sm-4"> 

                   

                    <!-- Begin Listing: 218 LYNNEBROOK LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/zMjCkcFeFDXDAP8xDhbD9ZmrVL7oGkBvSnh2bDBZ6UB5UHXa3_g8c6XYhRY_OxgGaMBMehiTWXDSLzBMaIzRhA.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,975,000 <small class="pull-right">218 Lynnebrook Ln</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>6,959 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>6 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>5 Baths</li>
                                </ul>

                                <p class="hidden-xs">Impressively positioned
                                overlooking 3.5 captivating acres, designated
                                as "significant" by the chestnut hill
                                historical s...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Blue Bell</span>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing: 209 CHESTNUT HILL AVE-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,599,999 <small class="pull-right">209 Chestnut Hill ve</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>16,581 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>8 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>4 Baths</li>
                                </ul>

                                <p class="hidden-xs">Built in 1909 by
                                pittsburgh steel magnate henry a. laughlin,
                                greylock is a classic chestnut hill stone
                                mansion once cons...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of ng and Foster-Devon</span>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    



                </div>

                <div class="col-sm-4">  

                    

                    <!-- Begin Listing: 9006 CREFELD ST-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,295,000 <small class="pull-right">9006 Crefeld St</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>7,672 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>7 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>5 Baths</li>
                                </ul>

                                <p class="hidden-xs">Located in chestnut hill,
                                recently named by the american planning
                                association as one of america's top 10 great
                                neighborh...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of RE/MAX Services</span>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing: 701 W ALLENS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,175,000 <small class="pull-right">701 W Allens Ln</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>9,824 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>8 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>5 Baths</li>
                                </ul>

                                <p class="hidden-xs">A once in a lifetime
                                opportunity! live in this grand home with its
                                stunning entry and staircase, bedroom suites,
                                firepla...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                                Evergreen</span>
                            </div>
                        </div>
                    </div><!-- End Listing-->
                </div><!-- End Col -->


                <div class="col-sm-4">  

                    <!-- Begin Listing: 9006 CREFELD ST-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,295,000 <small class="pull-right">9006 Crefeld St</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>7,672 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>7 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>5 Baths</li>
                                </ul>

                                <p class="hidden-xs">Located in chestnut hill,
                                recently named by the american planning
                                association as one of america's top 10 great
                                neighborh...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of RE/MAX Services</span>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                    <!-- Begin Listing: 701 W ALLENS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg"></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$1,175,000 <small class="pull-right">701 W Allens Ln</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>9,824 SqFt</li>

                                    <li style="list-style: none">|</li>

                                    <li>8 Beds</li>

                                    <li style="list-style: none">|</li>

                                    <li>5 Baths</li>
                                </ul>

                                <p class="hidden-xs">A once in a lifetime
                                opportunity! live in this grand home with its
                                stunning entry and staircase, bedroom suites,
                                firepla...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                                Evergreen</span>
                            </div>
                        </div>
                    </div><!-- End Listing-->
                </div><!-- End Col -->

            </div><!-- End row -->

              </div>
            </div>
            </div>
        </div>
    </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="https://cdn.shweproperty.com/assets/images/banners/AYA-banner-large.jpg" width="100%">
            </div>
        </div>
    </div><br><br>
    @include('footer')

    <script>
$(document).ready(function(){
  $(".preview-pic .tab-pane:first").addClass("active");
  $(".preview-thumbnail li:first").addClass("active");
});
</script>