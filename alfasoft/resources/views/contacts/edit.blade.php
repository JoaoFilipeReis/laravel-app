@extends('contacts.layout')

@section('title', 'Edit' . $contact->name)

@section('content')

<div class="card">
    <div class="card-header">Edit: {{$contact->name}} </div>
    <div class="card-body">

        <form action="/contacts/update/{{$contact->id}}" method="POST">
            @csrf
            @method('PUT')
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value=" {{$contact->name}} "><br>
            <label>Contact</label><br>
            <input type="text" name="contact" id="contact" class="form-control" value=" {{$contact->contact}} " ><br>
            <label>Email</label><br>
            <input type="text" name="email" id="email" class="form-control" value=" {{$contact->email}} " ><br>
            <button class="btn btn-success">Edit Contact</button><br>
        </form>

    </div>
</div>

@endsection
