@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Delete Confirmation</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center action-delete"> <span class="glyphicon glyphicon-alert"></span> Are sure to delete contact " {{ $contactPerson->full_name }} " </h2>
                                <p class="text-center"> <a href=" {{ route('delete_contact_confirmed', $contactPerson->id) }} " class="btn btn-default">Yes</a> <a href="{{ route('home') }}" class="btn btn-primary"> No</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
