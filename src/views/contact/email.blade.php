@component('mail::message')
# Introduction

There is a new email from {{ $name }}
<br>
Message:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
