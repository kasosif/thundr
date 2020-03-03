@component('mail::message')

# Nouvelle demande de contact :

<strong>Nom/Société : </strong> {{$data['name']}} <br>
<strong>Email : </strong> {{$data['email']}} <br>
<strong>Téléphone : </strong> {{$data['phone']}} <br>

<strong>Message : </strong>

{{$data['message']}} <br>

{{ config('app.name') }}, Website
@endcomponent

