@extends('frontend.master')
@section('content')
    <section class="video-section-wrapper mb-4">
        <div class="container">
            <div class="public-detail-inner">
                @foreach ($eventdetail as $item)


                <div class="public-cat">
                    <img src="{{ asset('/admin/eventss/' . $item->main_photo) }}" alt="">
                    {{-- {{ asset('frontend/img/public-cat.png') }} --}}
                </div>
                <h2>{{ $item->event_title }}</h2>

                <div class="publication-detail">
                    <div class="publication-arrow-icon">
                        <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                    </div>
                    <div class="public2-info">
                        <div class="public2-title">
                            DESCRIPTION:
                        </div>
                        <div class="public2-description">
                            {{ $item->event_description }}
                        </div>
                    </div>
                </div>
                <div class="publication-detail">
                    <div class="publication-arrow-icon">
                        <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                    </div>
                    <div class="public2-info">
                        <div class="public2-title">
                            Date:
                        </div>
                        <div class="public2-description">
                            {{ $item->date }}
                        </div>
                    </div>
                </div>
                <div class="publication-detail">
                    <div class="publication-arrow-icon">
                        <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                    </div>
                    <div class="public2-info">
                        <div class="public2-title">
                            Time:
                        </div>
                        <div class="public2-description">
                            {{ $item->time }}

                        </div>
                    </div>
                </div>
                <div class="publication-detail">
                    <div class="publication-arrow-icon">
                        <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                    </div>
                    <div class="public2-info">
                        <div class="public2-title">
                            Sponsor:
                        </div>
                        <div class="public2-description">
                            {{ $item->sponser_one }}

                        </div>
                    </div>
                </div>
                <div class="publication-detail">
                    <div class="publication-arrow-icon">
                        <img src="{{ asset('frontend/img/arrow-right.png') }}"" alt=" arrow-right icon">
                    </div>
                    <div class="public2-info">
                        <div class="public2-title">
                            Presenter(s):

                        </div>
                        <div class="public2-description">
                            {{ $item->presenter_one }}
                        </div>
                    </div>
                </div>
                <div class="publication-detail">
                    <div class="publication-arrow-icon">
                        <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                    </div>
                    <div class="public2-info">
                        <div class="public2-title">
                            Fee (Basic Membership):
                        </div>
                        <div class="join_parent">
                            <div class="public2-description">
                                $110
                            </div>
                            <a href="{{ route('payementwebinars') }}" class="click_join">Click  me to Join</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-2 ml-auto">

                </div>
        </div>
    </section>
@endsection
