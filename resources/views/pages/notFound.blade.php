@extends('layouts.layout1')

@php
    $title = 'Error Page';
    $subtitle = 'Not Found';
@endphp


@section('content')

<div class="error-page-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-inner text-center">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/error/group2.png') }}" alt="error">
                            <img src="{{ asset('assets/images/error/404.png') }}" alt="error">
                            <img src="{{ asset('assets/images/error/group1.png') }}" alt="error">
                        </div>

                        <h2 class="title">Oops! Nothing Was Found</h2>
                        <p class="description text-center">Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth.
                        </p>

                        <a href="{{ route('index') }}" class="tmp-btn btn-primary">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection