@component('mail::message')
# Hey Administration,

- {{ $name }}
- {{ $email }}


@component('mail::panel')
{{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
