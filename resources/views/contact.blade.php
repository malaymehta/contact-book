@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(!empty($contactPerson->id))
                        Edit # {{ $contactPerson->id }}
                    @else
                        Add New Contact
                    @endif
                </div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('save_contact') }}">
                        {{ csrf_field() }}
                        @if(!empty($contactPerson->id))
                            <input type="hidden" name="id" value="{{ $contactPerson->id }}">
                        @endif
                        <div class="form-group">
                            <label for="full_name">Full Name *:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $contactPerson->full_name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email address *:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$contactPerson->email}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Phone *:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $contactPerson->phone }}">
                        </div>

                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-save"></span> @if(!empty($contactPerson->id)) Update @else Add @endif</button>
                        <a href="{{ route('home') }}" class="btn btn-default"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
