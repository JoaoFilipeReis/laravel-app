@extends('contacts.layout')

@section('title', 'Create Contact')

@section('content')
    <div class="card">
        <div class="card-header">Contact Page</div>
        <div class="card-body">

            <form action="/contacts" method="POST">
                @csrf
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Contact</label><br>
                <input type="text" name="contact" id="contact" class="form-control"><br>
                <label>Email</label><br>
                <input type="text" name="email" id="email" class="form-control"><br>
                <button class="btn btn-success">New Contact</button><br>
            </form>

        </div>
    </div>
@endsection
