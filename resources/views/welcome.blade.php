@include('header')
    <!-- Page Content -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo url(''); ?>/front-end/img/banner.jpg" style="width:100%;">
            </div>
            <!-- <div class="item">
                <img src="http://mikemeisenbach.com/wp-content/uploads/2014/01/mike-meisenbach-real-estate-banner.jpg" alt="Chicago" style="width:100%;">
            </div>
            <div class="item">
                <img src="http://mikemeisenbach.com/wp-content/uploads/2014/01/mike-meisenbach-real-estate-banner.jpg" alt="New york" style="width:100%;">
            </div> -->
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

    <div class="right-panel">
        <h2>အိမ္ျခံေျမေရာင္း၀ယ္ေရး ၀ဘ္ဆိုက္ !!</h2><br><br>
        <!-- <label for="validationCustom04">၀ယ္ရန္:</label> -->
        <div class="flex">
        <select class="form-control" required>
            <option>၀ယ္ရန္</option>
            <option>ငွားရန္</option>
            <option>စီမံကိန္းအသစ္မ်ား</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;
        
        <select class="form-control" required>
            <option>အိမ္ျခံေျမအမိ်ဳးအစားမ်ား</option>
            <option>တိုက္ခန္း</option>
            <option>ကြန္ဒို</option>
        </select>
        </div>
        <hr>
        <div class="flex">
        <select class="form-control" required>
            <option>တိုင္းေဒသႀကီးအားလံုး</option>
            <option>ရန္ကုန္</option>
            <option>ပဲခူး</option>
            <option>ခ်င္း</option>
            <option>ကခ်င္</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;
        
        <select class="form-control" required>
            <option>ျမိဳ႕နယ္</option>
            <option>လမ္းမေတာ္</option>
            <option>လသာ</option>
            <option>အလံု</option>
            <option>စမ္းေခ်ာင္း</option>
        </select>
        </div>
        <hr>
        <div class="flex">
        <select class="form-control" required>
            <option>အိပ္ခန္း</option>
            <option>၁</option>
            <option>၂</option>
            <option>၃</option>
            <option>၄</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;
        
        <select class="form-control" required>
            <option>ေစ်းႏွုန္း ပမာဏ</option>
            <option>၁၀၀ သိန္း</option>
            <option>၂၀၀ သိန္း</option>
            <option>၃၀၀ သိန္း</option>
            <option>၄၀၀ သိန္း</option>
            <option>၅၀၀ သိန္း</option>
        </select>
        </div>
        <hr>
        <div>
            <button class="btn btn-success pull-right">ရွာေဖြရန္ </button>
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

    <div class="container companylist">
        <div class="row">
            <div class="col-lg-2">
                <img src="https://www.shweproperty.com/assets/images/agentsite/68-Residence-For-FB.png" width="90%">
            </div>
            <div class="col-lg-2">
                <img src="https://www.shweproperty.com/assets/images/agentsite/amps.png" width="90%">
            </div>
            <div class="col-lg-2">
                <img src="https://www.shweproperty.com/assets/images/agentsite/ngapali_logo.png" width="90%">
            </div>
            <div class="col-lg-2">
                <img src="https://www.shweproperty.com/assets/images/agentsite/logo_slade.jpg" width="90%">
            </div>
            <div class="col-lg-2">
                <img src="https://www.shweproperty.com/assets/images/agentsite/shwe_taung22.jpg" width="90%">
            </div>
            <div class="col-lg-2">
                <img src="https://www.shweproperty.com/assets/images/agentsite/YomaLand_Logo.jpg" width="90%">
            </div>
        </div>
    </div><br><br>

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
            <div class="col-lg-8">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-color"><h3 style="margin: 10px 0;">အထူးေရာင္းရန္ အိမ္ျခံေျမမ်ား</h3></div>
              <div class="panel-body panel-body-color">
                  
                <div class="row">
                

                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    @foreach ($showpost as $showposts)
                    <div class="col-sm-6"> 
                        <a href="{{ URL::to('detail/' . $showposts->id) }}">
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            
                                <?php
                 $itemimage = $showposts->img;
                 $itemimage = json_decode($itemimage, true);
                ?>
                 
                            <img alt="image" class="img-responsive" src="/../item_images/{{$itemimage[0]}}">

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a target="_parent">{{$showposts->price}} <small class="pull-right">{{$showposts->city}}</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Area : {{$showposts->area}}</li>

                                    <li style="list-style: none">|</li>

                                    <li>Beds : {{$showposts->bedroom}}</li>

                                    <li style="list-style: none">|</li>

                                    <li>Aircon : {{$showposts->title}}</li>
                                </ul>

                                <p class="hidden-xs">
                                    <?php
                                    echo substr($showposts->others,0,10);
                                    ?>
                                ...</p><span class="fnt-smaller fnt-lighter fnt-arial">{{$showposts->owner}}</span>
                            </div>
                        </div>
                    </div>
                </a>
                    </div>
                    @endforeach 
                    <!-- End Listing-->


                

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
              <div class="panel-heading panel-heading-color"><h3 style="margin: 10px 0;">စီမံကိန္းအသစ္ (ျကိုပြိဳင္႔) မ်ား</h3></div>
              <div class="panel-body panel-body-color">
                  
                <div class="row">

                 @foreach ($showpostrent as $showpostrents)
                 
                  
            
                    <div class="col-sm-4"> 
                        <a href="{{ URL::to('detail/' . $showpostrents->id) }}">
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            
                                <?php
                 $itemimage = $showpostrents->img;
                 $itemimage = json_decode($itemimage, true);
                ?>
                 
                            <img alt="image" class="img-responsive" src="/../item_images/{{$itemimage[0]}}">

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                               

                                <h4 class="media-heading">
                                  <atarget="_parent">{{$showpostrents->price}} <small class="pull-right">{{$showpostrents->city}}</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Area : {{$showpostrents->area}}</li>

                                    <li style="list-style: none">|</li>

                                    <li>Beds : {{$showpostrents->bedroom}}</li>

                                    <li style="list-style: none">|</li>

                                    <li>Aircon : {{$showpostrents->title}}</li>
                                </ul>

                                <p class="hidden-xs">
                                    <?php
                                    echo substr($showpostrents->others,0,10);
                                    ?>
                                ...</p><span class="fnt-smaller fnt-lighter fnt-arial">{{$showpostrents->owner}}</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    </div>
                    
                    @endforeach 

            


            

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