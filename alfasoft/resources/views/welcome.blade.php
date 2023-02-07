@extends('contacts.layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>ALFASOFT - Recruitment</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contact as $contacts)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contacts->name }}</td>
                                        <td>{{ $contacts->contact }}</td>
                                        <td>{{ $contacts->email }}</td>
                                        <td>
                                            <a href="/contacts/{{$contacts->id}}"><button class="btn btn-primary btn-sm">View</button></a>
                                            <a href="/contacts/edit/{{$contacts->id}}" ><button class="btn btn-primary btn-sm">Edit</button></a>
                                            <form method="POST" action="/contacts/ {{$contacts->id}}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

