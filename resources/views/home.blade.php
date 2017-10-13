@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('addnew')  }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Contact </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover contact-list">
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email </th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach($contact as $contactPerson)
                                    <tr>
                                        <td> {{ $contactPerson->full_name }}</td>
                                        <td>{{ $contactPerson->email }}</td>
                                        <td>{{ $contactPerson->phone  }}</td>
                                        <td><a href="{{ route('edit_contact', $contactPerson->id) }}" class="action-edit"><span class="glyphicon glyphicon-edit"></span></a> &nbsp; | &nbsp; <a href="{{ route('delete_contact', $contactPerson->id) }}" class="action-delete"><span class="glyphicon glyphicon-remove"></span></a>
                                    </tr>
                                    @endforeach
                                </table>

                                {{ $contact->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
