@extends('front-end.main')

@section('content')
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <a href="#">
                    <h3>Feature Products</h3>
                </a>
            </div>
            <div class="clear"></div>
        </div>
        {{-- products group --}}
        @include('front-end.templates.product-1-of-4')
        <div class="content_top">
            <div class="heading">
                <a href="#">
                    <h3>New Products</h3>
                </a>
            </div>
            <div class="clear"></div>
        </div>
        {{-- products group --}}
        @include('front-end.templates.product-1-of-4')
    </div>
@endsection
