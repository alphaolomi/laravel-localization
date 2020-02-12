@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('welcome.welcome') }}


                    <a href="{{ LaravelLocalization::localizeUrl('(/test)') }}">@lang('Follow this link')</a>
                    {{ LaravelLocalization::getLocalizedURL('en') }}
                    {{ LaravelLocalization::getNonLocalizedURL('/sw/about') }}
                    {{ LaravelLocalization::getURLFromRouteNameTranslated('es', 'routes.about') }}
                    {{ LaravelLocalization::getSupportedLocales() }}
                    {{ LaravelLocalization::getCurrentLocale() }}
                    {{ LaravelLocalization::getCurrentLocaleName() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
