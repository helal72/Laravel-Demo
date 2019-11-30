@component('mail::message')
# Introduction

thanks {{ $username }} for subscribing us.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
