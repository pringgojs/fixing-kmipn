@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
    @include('frontend.partials.navbar')
    <div class="hero-body"></div>
</section>

@section('title')
    Info - KMIPN
@endsection

<section class="hero tengah is-transparent is-fullwidth">
    <div class="hero-head">
        <div class="container has-text-centered">
            <p class="has-text-centered is-centered">
                <h3 class="title is-3 has-text-white">INFORMASI</h3>
            </p>
        </div>
    </div>
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                @foreach($artikel as $item)
                <div class="column is-4 is-white">
                    <div class="box"></div>
                    <p class="has-text-danger">{{ $item->created_at }}</p>
                    <p>{{ $item->title }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="hero-foot">
        <div class="container is-centered">
            <nav class="pagination is-centered" role="navigation" aria-label="pagination">
                <ul class="pagination-list">
                    {{--<li><a class="pagination-link has-text-white" aria-label="Goto page 1">1</a></li>--}}
                    {{--<li><span class="pagination-ellipsis">&hellip;</span></li>--}}
                    {{--<li><a class="pagination-link has-text-white" aria-label="Goto page 45">45</a></li>--}}
                    {{--<li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>--}}
                    {{--<li><a class="pagination-link has-text-white" aria-label="Goto page 47">47</a></li>--}}
                    {{--<li><span class="pagination-ellipsis">&hellip;</span></li>--}}
                    {{--<li><a class="pagination-link has-text-white" aria-label="Goto page 86">86</a></li>--}}
                </ul>
            </nav>
        </div>
    </div>
</section>
@include('frontend.partials.footer')