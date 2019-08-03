<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
	<!--
		Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger | rose"
		Tip 2: you can also add an image using data-image tag
	-->
	<div class="logo">
		<a href="{{ route('home') }}" class="simple-text logo-mini"> <b>UM</b> </a>
		<a href="{{ route('home') }}" class="simple-text logo-normal"> {{ config('app.name') }} </a>
	</div>
	<div class="sidebar-wrapper">
		<div class="user">
			<div class="photo">
				<img src="{{ asset('files/profile/images/' . Auth::user()->profile_image ) }}" alt="pfl-img" />
			</div>
			<div class="user-info">
				<a data-toggle="collapse" href="#collapseExample" class="username">
					<span> {{ Auth::user()->name }} <b class="caret"></b> </span>
				</a>
				<div class="collapse" id="collapseExample">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('profile') }}">
								<span class="sidebar-mini"> MP </span>
								<span class="sidebar-normal"> My Profile </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								<span class="sidebar-mini"> LO </span>
								<span class="sidebar-normal"> Logout </span>
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<ul class="nav">
			<li class="nav-item @if(route('home') == Request::fullUrl()) active @endif">
				<a class="nav-link" href="{{ route('home') }}">
					<i class="material-icons"> home </i>
					<p> Home </p>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#laravelExample"  aria-expanded=&quot;true&quot;>
					<i><img style="width:25px" src="{{ asset('assets/img/favicon.png') }}"></i>
					<p> System Dashboards <b class="caret"></b></p>
				</a>
				<div class="collapse  show" id="laravelExample">
					<ul class="nav">
						<li class="nav-item @if(route('home') == Request::fullUrl()) active @endif">
							<a class="nav-link" href="{{ route('home') }}">
								<span class="sidebar-mini"> H </span>
								<span class="sidebar-normal"> Home </span>
							</a>
						</li>
						@role(['super-admin','admin'])
							<li class="nav-item @if(route('admin') == Request::fullUrl()) active @endif">
								<a class="nav-link" href="{{ route('admin') }}">
									<span class="sidebar-mini"> A </span>
									<span class="sidebar-normal"> Administrator </span>
								</a>
							</li>
						@endrole
						<li class="nav-item @if(route('forms.main') == Request::fullUrl()) active @endif">
							<a class="nav-link" href="{{ route('forms.main') }}">
								<span class="sidebar-mini"> MF </span>
								<span class="sidebar-normal"> Main Forms </span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#pagesExamples" >
					<i class="material-icons">image</i> <p> Forms Data <b class="caret"></b> </p>
				</a>
				<div class="collapse" id="pagesExamples">
					<ul class="nav">
						<li class="nav-item @if(route('forms.index') == Request::fullUrl()) active @endif">
							<a class="nav-link" href="{{ route('forms.index') }}">
								<span class="sidebar-mini"> MI </span> <span class="sidebar-normal"> Member Information </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0)">
								<span class="sidebar-mini"> OP </span>
								<span class="sidebar-normal"> Office Premises </span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="javascript:void(0)">
								<span class="sidebar-mini"> MS </span>
								<span class="sidebar-normal"> Membership Satisfaction </span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- I know all things! -->
			<li class="nav-item ">
				<a class="nav-link" data-toggle="collapse" href="#mapsExamples" >
				<i class="material-icons">place</i>
				<p> Maps
				<b class="caret"></b>
				</p>
				</a>
				<div class="collapse " id="mapsExamples">
					<ul class="nav">
						<li class="nav-item  @if(route('map.index') == Request::fullUrl()) active @endif">
							<a class="nav-link" href="{{ route('map.index') }}">
								<span class="sidebar-mini"> GM </span> <span class="sidebar-normal"> Detailed Map </span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="javascript:void(0)">
								<span class="sidebar-mini"> DC </span> <span class="sidebar-normal"> Category Map </span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item @if(route('charts.index') == Request::fullUrl()) active @endif">
				<a class="nav-link" href="{{ route('charts.index') }}">
					<i class="material-icons">timeline</i> <p> Charts </p>
				</a>
			</li>
			<li class="nav-item @if(route('logout') == Request::fullUrl()) active @endif">
				<a class="nav-link" href="{{ route('logout') }}">
					<i class="material-icons">lock</i> <p> Logout </p>
				</a>
			</li>
		</ul>
	</div>
</div>