@component('mail::message')
# Welcome {{$user->first_name}}

It's great to have you as part of the Laravel Test and we look forward to keeping you challenged!


Thanks,<br>
{{ config('app.name') }}
@endcomponent
