@extends('frontend.master')
@section('content')
    <section class="video-section-wrapper mb-4">
        <div class="container">
            <form action="{{ route('submitPayment')}}" method="POST" >
                <div class="public-detail-inner">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @foreach ($eventdetail as $item)
                    <input type="hidden" name="event_id" value="{{$item->id}}">
                    <input type="hidden" name="user_id" value="{{$item->user_id}}">
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
                        @if (Auth::user())
                            <div class="publication-detail">
                                <div class="publication-arrow-icon">
                                    <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                                </div>

                                <div class="public2-info">
                                    <div class="public2-title">
                                        Time:
                                    </div>
                                    @php
                                        $eventTime = $item->time;
                                        $timeZone = $item->user->timezone->name;
                                        $today = new DateTime($item->time, new DateTimeZone($timeZone));
                                        // $today->format('Y-m-d H:i').'<br>';
                                        $userTimeZone = Auth::user()->timezone->name;
                                        $userEventTime = new DateTimeZone($userTimeZone);
                                        $convertedTime = $today->setTimeZone($userEventTime);
                                        $formattedTime = $convertedTime->format('H:i');
                                    @endphp
                                    <div class="public2-description">
                                        {{ date('g:i a', strtotime($formattedTime)) }}
                                    </div>
                                </div>
                            </div>
                        @endif
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
                                    <input type="checkbox" class="check_class" name="event_price" value="{{ $item->pet_owner_fee }}"> Pet Owner Fee :
                                </div>
                                <div class="public2-description">
                                    ${{ $item->pet_owner_fee }}
                                </div>
                                <div class="public2-title">
                                    <input type="checkbox" class="check_class" name="event_price" value="{{ $item->pet_owner_premium_fee }}"> Pet Owner Premium Fee
                                    :
                                </div>

                                <div class="public2-description">
                                    ${{ $item->pet_owner_premium_fee }}
                                </div>
                                <div class="public2-title">
                                    <input type="checkbox" class="check_class" name="event_price" value="{{ $item->vet_pet_prof_fee }}"> Vet/Pet Prof. Fee :
                                </div>

                                <div class="public2-description">
                                    ${{ $item->vet_pet_prof_fee }}
                                </div>
                                <div class="public2-title">
                                    <input type="checkbox" class="check_class" name="event_price" value="{{ $item->vet_pet_prof_premium_fee }}"> Vet/Pet Prof. Premium
                                    Fee :
                                </div>

                                <div class="public2-description">
                                    ${{ $item->vet_pet_prof_premium_fee }}
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my-3">
                                <button type="submit"  class="click_join">Click me to
                                    Join</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
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
