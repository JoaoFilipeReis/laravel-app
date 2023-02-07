@extends('contacts.layout')

@section('title', $contact->name)

@section('content')
<div class="card">
    <div class="card-header">Contacts Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $contact->name }} </h5>
            <p class="card-text">Contact : {{ $contact->contact }} </p>
            <p class="card-text">Email : {{ $contact->email }} </p>
        </div>
    </div>
</div>
@endsection
