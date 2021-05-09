@extends('layout')
@section('pageTitle', $pageTitle)
@section('content')
  <div class="uk-margin uk-text-right">
    <span>
      <span uk-icon="icon: plus;ratio: 0.7;"></span>
      <a class="uk-link uk-text-normal" href="/create">
        New Procedure
      </a>
    </span>
  </div>
  <lists :items='{{$items}}'></lists> 
@endsection