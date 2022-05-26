@extends('frontend.master')
@section('content')
    <section class="video-section-wrapper mb-4">
        <div class="container">
            <div class="public-detail-inner">
                @foreach ($eventdetail as $item)

                    <div class="public-cat">
                        <img src="{{ asset('/admin/eventss/' . $item->main_photo) }}" alt="">
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
                            @foreach ($item->members as $items)


                            <div class="public2-description">
                                {{ $items->sponser_name }}

                            </div>
                            @endforeach
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
                        <div class="public2-info d-flex justify-content-around">
                            <div class="public2-title">
                                <input type="checkbox" class="check_class"> Pet Owner Fee :
                            </div>
                            <div class="public2-description">
                                ${{ $item->pet_owner_fee }}
                            </div>
                            <div class="public2-title">
                                <input type="checkbox" class="check_class"> Pet Owner Premium Fee :
                            </div>

                            <div class="public2-description">
                                ${{ $item->pet_owner_premium_fee }}
                            </div>
                            <div class="public2-title">
                                <input type="checkbox" class="check_class"> Vet/Pet Prof. Fee :
                            </div>

                            <div class="public2-description">
                                ${{ $item->vet_pet_prof_fee }}
                            </div>
                            <div class="public2-title">
                                <input type="checkbox" class="check_class"> Vet/Pet Prof. Premium Fee :
                            </div>

                            <div class="public2-description">
                                ${{ $item->vet_pet_prof_premium_fee }}
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 my-3">
                    <a href="{{ route('payementwebinars') }}" class="click_join">Click me to Join</a>
                </div>
            </div>
    </section>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', 'input[type="checkbox"]', function() {
            $('input[type="checkbox"]').not(this).prop('checked', false);
        });
    });
</script>
