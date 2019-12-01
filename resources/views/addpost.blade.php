@include('header')
<br><br><br><br>
<div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-color"><h3 style="margin: 10px 0;">အခန္းတင္ရန္</h3></div>
              <div class="panel-body panel-body-color">
                 <form action="{{ route('addpost.store')}}" method="POST" enctype="multipart/form-data">
                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  	@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
                <div class="row">
                <div class="col-sm-6"> 
                	<label>ေခါင္းစဥ္</label>
					<input type="text" name="title" class="form-control"><br>
					<label>ဓါတ္ပံု</label>
					<input type="file" name="img[]" class="form-control" multiple><br>
					<label>ေစ်းႏႉန္း</label>
					<input type="text" name="price" class="form-control"><br>
					<label>ပိုင္ရွင္</label>
					<input type="text" name="owner" class="form-control"><br>
					<label>ျပည္နယ္</label>
					<select class="form-control" name="city">
						<option value="Yangon">Yangon</option>
						<option value="Mandalay">Mandalay</option>
						<option value="NayPyiTaw">NayPyiTaw</option>
						<option value="YangMawlamyineon">Mawlamyine</option>
						<option value="Bago">Bago</option>
						<option value="Pathein">Pathein</option>
						<option value="Pyay">Pyay</option>
						<option value="Monywa">Monywa</option>
						<option value="Meiktila">Meiktila</option>
						<option value="Sittwe">Sittwe</option>
						<option value="Mergui">Mergui</option>
						<option value="Taunggyi">Taunggyi</option>
					</select><br>
					<label>ျမို႕နယ္</label>
					<select class="form-control" name="township">
						<option value="Htaukkyant">Htaukkyant</option>
						<option value="Hmawbi">Hmawbi</option>
						<option value="Hlegu">Hlegu</option>
						<option value="Taikgyi">Taikgyi</option>
						<option value="Okkan">Okkan</option>
						<option value="Apyauk">Apyauk</option>
					</select><br>
					<label>လမ္း</label>
					<input type="text" name="street" class="form-control"><br>
       			</div>
       			<div class="col-sm-6">
       				<label>အိမ္ျခံေျမအမိ်ဳးအစားမ်ား</label>
       				<select class="form-control" name="btype">
                    <option value="flat">တိုက္ခန္း</option>
                    <option value="condo">ကြန္ဒို</option>
                	</select><br>
                	<label>၀ယ္ရန္</label>
                	<select class="form-control" name="ptype">
                    <option value="rent">ငွားရန္</option>
                    <option value="newproject">စီမံကိန္းအသစ္မ်ား</option>
                	</select><br>
                	<label>အိပ္ခန္း</label>
                	<select class="form-control" name="bedroom">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                	</select><br>
                	<label>အဲယားကြန္း</label>
                	<select class="form-control" name="aircon">
                    <option value="yes">ရွိ</option>
                    <option value="no">မရွိ</option>
                	</select><br>
                	<label>ဧရိယာ</label>
					<input type="text" name="area" class="form-control"><br>
					<label>အလႊာ</label>
					<select class="form-control" name="floor">
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                	</select><br>
                	<label>အျခားအခ်က္အလက္မ်ား</label>
					<textarea class="form-control" rows="5" name="others"></textarea>
       			</div>
       			<div class="col-sm-12 text-right"><br>
       				<input type="submit" name="" class="btn btn-success" value="တင္ရန္">
       			</div>
    

                

            
            </div><!-- End row -->
					</form>
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
@include('footer')