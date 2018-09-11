@extends('frontend.layouts')
@section('title')
{{$artikel->title}}
@endsection
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>{{ $artikel->title }}</h2>
                    {{--Pada {{$artikel->created_at}}--}}
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                @if($artikel->photo != null)
                                    <div align="center">
                                        <img src="{{url('artikel/'.$artikel->photo)}}" class="img-fluid" />
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-9 mt-25 blog_details">
                            <h2>{{ $artikel->title }}</h2>
                            Pada {{$artikel->created_at}}
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mt-25">
                                    <br>
                                    <p><?= $artikel->content ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection