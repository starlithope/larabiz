@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing</div>

            <div class="card-body">

                <h1>Create Todo</h1>
                {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                  {{ Form::bsText('name','',['placeholder'=> 'Company Name']) }}
                  {{ Form::bsText('website','',['placeholder'=> 'company Website']) }}
                  {{ Form::bsText('email','',['placeholder'=> 'Contact Email']) }}
                  {{ Form::bsText('phone','',['placeholder'=> 'Contact Phone']) }}
                  {{ Form::bsText('address','',['placeholder'=> 'Business Address']) }}
                  {{ Form::bsTextArea('bio','',['placeholder'=> 'About this Business']) }}
                  {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
