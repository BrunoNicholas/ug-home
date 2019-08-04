@extends('layouts.auth')

@section('title') Details @endsection
@section('content')
<div class="container text-center">
    <div class="row">
        @include('layouts.includes.web_side')
        <div class="col-md-8">
            <div class="row">
            	<div class="card">
            		<div class="card-header card-header-icon card-header-primary">
            			<h2 class="card-title"> More Fast Information | {{ config('app.name') }} </h2>
            		</div>



            	</div>
           	</div>
       	</div>
    </div>
</div>
@endsection