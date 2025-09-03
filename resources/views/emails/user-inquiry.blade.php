@component('mail::message')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="img/homepage/logo.webp" alt="DalAs Reinigungsdienst" style="height:40px;">
@endcomponent
@endslot

# Vielen Dank für Ihre Anfrage

Hallo {{ $q->first_name }} {{ $q->last_name }},

Ihre Anfrage ist bei uns eingegangen. Wir kontaktieren Sie in Kürze.

@component('mail::panel')
**Kundentyp:** {{ $q->customer_type }}  
**Telefon:** {{ $q->phone }}

**Nachricht:**  
{{ $q->message }}
@endcomponent

Mit freundlichen Grüßen  
**DalAs Reinigungsdienst**

@slot('subcopy')
@component('mail::subcopy')
Diese E-Mail wurde automatisch gesendet. Wenn Sie die Anfrage nicht gestellt haben, ignorieren Sie die Nachricht bitte oder antworten Sie kurz.  
Adresse: Jägerstraße 7, 75181 Pforzheim · Telefon: +49 1575 6464 139 · E-Mail: info@dalas-pf.de
@endcomponent
@endslot

@endcomponent
