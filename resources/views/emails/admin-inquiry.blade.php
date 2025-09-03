@component('mail::message')
# Neue Anfrage

@component('mail::panel')
**Name:** {{ $q->full_name }}  
**E-Mail:** {{ $q->email }}  
**Telefon:** {{ $q->phone }}  
**Kundentyp:** {{ $q->customer_type }}
@endcomponent

**Nachricht:**
> {{ $q->message }}


*Hinweis:* Diese Anfrage wurde über das Kontaktformular auf [{{ config('app.url') }}]({{ config('app.url') }}) gesendet.

@endcomponent
