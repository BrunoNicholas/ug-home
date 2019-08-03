<div class="row">
  	<div class="col-md-12">
    		<div class="card">
        		<div class="card-header card-header-success card-header-icon">
          			<div class="card-icon"> <i class="material-icons"></i> </div>
          			<h4 class="card-title"> Received forms from different locations </h4>
        		</div>
        		<div class="card-body" style="padding: 0px 15px;">
                <div class="row">
                    <div style="margin: 0px;" class="col-md-12" >
                        <a href="{{ route('map.index') }}"><span class="btn btn-info btn-sm float-right"> Detailed Map </span></a>
                        <a href="{{ route('forms.main') }}"><span class="btn btn-primary btn-sm float-right"> All Records </span></a>
                        {{-- <span  class="label label-rose float-right" style="padding: 8px;">Total location points captured {{ $pointsNum }}</span> --}}
                    </div>
                </div>
          			<div class="row">
            			<div class="col-md-7" style="margin: 0px;">
              				<iframe src="https://kc.humanitarianresponse.info/unffe2019/forms/aJEGvgDnHaiyUCmiLbtb8r/map" style="width: 100%; min-height: 320px; max-height: 350px; border: none; overflow-y: auto;"></iframe>
            			</div>
            			{{-- <div class="col-md-5 " id="map" style="max-height: 320px; margin: 0px;"></div> --}}
                  <div class="col-md-5">
                    <h3 style="">Brief Statistics</h3>
                    <span>Total Number of Forms: </span>
                    <a href="{{ route('forms.main') }}"><b class="btn btn-sm btn-rose">{{ sizeof($forms) }}</b> <br></a>
                    <span>Total GPS Locations captured: </span> 
                    <a href="{{ route('map.index') }}"><b class="btn btn-sm btn-rose">{{ $pointsNum }}</b></a> <br>
                    <span>Total Charts tracked: </span>
                    <a href="{{ route('charts.index') }}"><b class="btn btn-sm btn-rose">4</b></a> <br>
                  </div>
          			</div>
        		</div>
    		</div>
  	</div>
</div>
