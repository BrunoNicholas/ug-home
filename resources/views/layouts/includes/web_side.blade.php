<div class="col-md-3">
    <div class="card" style="padding: 10px;">
        <div class="col-md-12">
            <a href="" class="btn btn-rose btn-block"><i class="fa fa-search"></i> Search For Land</a>
        </div>
        <div class="col-md-12">
            <a href="" class="btn btn-rose btn-block"><i class="fa fa-user"></i> Contact A Lawyer</a>
        </div>
        <div class="col-md-12">
            <a href="" class="btn btn-rose btn-block"><i class="fa fa-list"></i> Public Posts </a>
        </div>
        <div class="col-md-12">
            <a href="" class="btn btn-rose btn-block"><i class="fa fa-question"></i> Asked Questions </a>
        </div>
        @guest
        <div class="col-md-12">
            <a href="{{ route('register') }}" class="btn btn-rose btn-block"><i class="fa fa-user-plus"></i> Create An Account</a>
        </div>
        @else
        <div class="col-md-12">
            <a href="{{ route('home') }}" class="btn btn-rose btn-block"><i class="fa fa-user-plus"></i> Home | {{ config('app.name') }}</a>
        </div>
        @endguest
    </div>
</div>