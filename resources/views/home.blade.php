@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 110px;">
                    <page-dashboard :user="{{\Illuminate\Support\Facades\Auth::user()}}" :haspub="{{\Illuminate\Support\Facades\Config::get('app.has_public')}}"></page-dashboard>
        </div>
    </div>
@endsection
