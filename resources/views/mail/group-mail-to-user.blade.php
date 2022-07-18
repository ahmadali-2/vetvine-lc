{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}

@component('mail::message')
# Introduction

Hey,
<h2>{{ $data['subject'] }}</h2>
<p>{{ $data['message'] }}</p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

