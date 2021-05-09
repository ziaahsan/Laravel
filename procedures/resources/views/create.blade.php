@extends('layout')
@section('pageTitle', $pageTitle)
@section('content')
    @if(Session::has('success'))
        <success-message title='{{ Session::get("success") }}'></success-message>
        @php
            Session::forget('success');
        @endphp
    @else
        <div>
            {{-- Note: 'open' will add CSRF automatically --}}
            {{ Form::open(
                array(
                    'url' => '/create',
                    'method' => 'post', 
                    'class' => 'uk-width-1-2 uk-align-center')
                ) 
            }}
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        {{Form::label('title', 'Title*')}}
                        @if ($errors->has('title'))
                            <p class="uk-margin-remove uk-text-danger uk-text-small">{{ $errors->first('title') }}</p>
                        @endif
                        {{Form::text('title', '', array('class' => 'uk-input'))}}
                    </div>
                    
                    <div class="uk-margin">
                        {{Form::label('message', 'Message*')}}
                        @if ($errors->has('message'))
                            <p class="uk-margin-remove uk-text-danger uk-text-small">{{ $errors->first('message') }}</p>
                        @endif
                        {{Form::textarea('message', '', array('class' => 'uk-textarea', 'rows' => 5))}}
                    </div>
                    {{Form::submit('Save', array('class' => 'uk-button uk-button-primary uk-width-1-1'))}}
                </fieldset>
            {{ Form::close() }}
        </div>
    @endif
@endsection