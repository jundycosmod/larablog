@component('mail::message')
# Introduction

Thank you for registering!

@component('mail::button', ['url' => 'http://jundysplace.com'])
Visit our site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
