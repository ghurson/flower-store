@extends('layouts.default')

@section('content')

    <div class="column">
        <div class="callout large primary text-center">
            <h1>The Flower Store</h1>
        </div>

<div class="row">


    <div class="column medium-8 medium-centered">
      <div class="callout">
        @if(\Auth::check())
          @include('partials.user.welcome')
        @else
          @include('partials.user.login-form')
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
