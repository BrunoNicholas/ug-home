<div class="row">
    <!-- start of first not working -->
        <div class="col-md-6" style="display: none;">
            <div class="card card-chart">
                <div class="card-header card-header-rose" data-header-animation="true"> 
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                    <div class="card-actions">
                        <button type="button" class="btn btn-danger btn-link fix-broken-card">
                            <i class="material-icons">build</i> Fix Header!
                        </button>
                        <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                            <i class="material-icons"><a href="">refresh</a></i>
                        </button>
                        <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View Details">
                            <i class="material-icons"><a href="{{ route('charts.index') }}">add_circle</a></i>
                        </button>
                    </div>
                    <h4 class="card-title">  </h4>
                    <p class="card-category"> Total Captured: <span class="text-rose">0</span> </p>
                </div>
                <div class="card-footer">
                    <div class="stats"> 
                        <i class="material-icons">access_time</i> By <a href="mailto:sbnibro256@gmail.com" style="padding-left: 5px;padding-right: 5px;"> Bruno Nicholas </a> | {{ config('app.name') }} 
                    </div>
                </div>
            </div>
        </div>
    <!-- /end of first not working -->

    <div class="col-md-4">
        <div class="card card-chart">
            <div class="card-header card-header-success" data-header-animation="true">
                <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
                <div class="card-actions">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Click To Fix Header!
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons"><a href="">refresh</a></i>
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View Details">
                        <i class="material-icons"><a href="{{ route('charts.index') }}">add_circle</a></i>
                    </button>
                </div>
                <h4 class="card-title"> QN 51: Statistics of Forms </h4>
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-category"> AA : Very Easy </p>
                        <p class="card-category"> BB : Easy </p>
                        <p class="card-category"> CC : Difficult </p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-category"> DD : Very Difficult </p>
                        <p class="card-category"> ## : Undefined </p>
                    </div>
                </div>
                
            </div>
            <div class="card-footer">
                <div class="stats"> 
                    <i class="material-icons">access_time</i> By <a href="mailto:sbnibro256@gmail.com" style="padding-left: 5px;padding-right: 5px;"> Bruno Nicholas </a> | {{ config('app.name') }} 
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-chart">
            <div class="card-header card-header-info" data-header-animation="true">
                <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
                <div class="card-actions">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Click To Fix Header!
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons"><a href="">refresh</a></i>
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View Details">
                        <i class="material-icons"><a href="{{ route('charts.index') }}">add_circle</a></i>
                    </button>
                </div>
                <h4 class="card-title"> QN 30: Focus Commodities Promoted </h4>
                @if (is_array($memb) || is_object($memb))
                    <div class="row">
                        <div class="col-md-2">
                            <p class="card-category"> A - Coffee </p>
                            <p class="card-category"> B - Bananas </p>
                            <p class="card-category"> C - Cocoa </p>
                            <p class="card-category"> D - Maize </p>
                            <p class="card-category"> E - Sorghum </p>
                            <p class="card-category"> F - Sunflower </p>
                        </div>
                        <div class="col-md-3">
                            <p class="card-category"> G - Cassava </p>
                            <p class="card-category"> H - Irish potatoes </p>
                            <p class="card-category"> I - Sweet potatoes </p>
                            <p class="card-category"> J - Soya beans </p>
                        </div>
                        <div class="col-md-3">
                            <p class="card-category"> K - Simsim </p>
                            <p class="card-category"> L - Groundnuts </p>
                            <p class="card-category"> M - Rice </p>
                            <p class="card-category"> N - Beans </p>
                            <p class="card-category"> O - Cotton </p>
                            <p class="card-category"> P - Poultry </p>
                        </div>
                        <div class="col-md-2">
                            <p class="card-category"> Q - Goats </p>
                            <p class="card-category"> R - Piggery </p>
                            <p class="card-category"> S - Cattle </p>
                            <p class="card-category"> T - Rabbits </p>
                            <p class="card-category"> U - Vanilla </p>
                            <p class="card-category"> V - Honey </p>
                        </div>
                        <div class="col-md-2">
                            <p class="card-category"> W - Cut flowers </p>
                            <p class="card-category"> X - Wheat </p>
                            <p class="card-category"> Y - Citrus </p>
                            <p class="card-category"> Z - Mangoes </p>
                            <p class="card-category"> # - Others </p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="card-footer"> 
                <div class="stats"> <i class="material-icons">access_time</i> By <a href="mailto:sbnibro256@gmail.com" style="padding-left: 5px;padding-right: 5px;"> Bruno Nicholas </a> | {{ config('app.name') }} </div> 
            </div>
        </div>
    </div>
</div>