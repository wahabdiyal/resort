@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
booking dfsfsf
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
