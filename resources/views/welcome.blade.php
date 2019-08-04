@extends('layouts.auth')

@section('title') Welcome @endsection
@section('content')
<div class="container text-center">
    <div class="row">
        @include('layouts.includes.web_side')
        <div class="col-md-8">
            <div class="row">
                <div class="card">
                    <div class="card-header card-header-icon card-header-primary">
                        <h2 class="card-title"> Welcome to {{ config('app.name') }}! </h2>
                    </div>
                    <div class="card-body background-transparent">
                        <p>Are you interested in purchasing or selling legal land in Uganda?</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-icon card-header-success">
                                        <div class="card-icon"> <i class="material-icons">bookmarks</i> </div>
                                        <h4 class="card-title"> Procedure for Buying </h4>
                                    </div>
                                    <div class="card-body text-left">
                                        <ul class="list-group" type="arrow">
                                            <li>Visit the site</li>
                                            <li>Get a professional Lawyer</li>
                                            <li>Meet the original owner</li>
                                            <li>User a professional surveyor</li>
                                            <li>Make payment of Land title</li>
                                            <li>Requirement for transfer</li>
                                            <li>Property evaluation</li>
                                            <li>Stamp duty payment</li>
                                            <li>Registration of transfer</li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="{{ route('more.details') }}" class="btn btn-rose btn-sm">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-icon card-header-success">
                                        <div class="card-icon"> <i class="material-icons">card_giftcard</i> </div>
                                        <h4 class="card-title"> Requirements For Buying</h4>
                                    </div>
                                    <div class="card-body text-left">
                                        <ul>
                                            <li>National identification details</li>
                                            <li>Land title transfer forms</li>
                                            <li>Sales Agreement</li>
                                            <li>Full consent age (18 and above)</li>
                                            <li>Registration of transfer</li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="" class="btn btn-block btn-info" target="_blank" title="Go to the Ministry of Land site!">Ministry of Land</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="" class="btn btn-block btn-info" target="_blank" title="Go to Land Commission">Land Commission</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="" class="btn btn-block btn-info" target="_blank" title="Go to Land Registration Body">Land Registration Body</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection