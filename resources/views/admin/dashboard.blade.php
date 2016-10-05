@extends('layouts.default')

@section('content')

<div class="column">
  <div class="callout primary large">
    <h1>Welcome, Admin!<br>
    <small>todo: lock this to the auth user</small></h1>
  </div>
</div>

<div class="column medium-6">
  <div class="callout">
    <h2>Current Users</h2>
    @foreach(App\User::all() as $user)
      <p>
        {{ $user->name }}
      </p>
    @endforeach
  </div>
</div>

<div class="column medium-6">
  <div class="callout">
    <h2>All Orders</h2>
    @foreach(App\Order::all()->sortBy('delivery') as $order)
      <p>
        {{ $order->title }} : {!! $order->delivery !!}
      </p>
    @endforeach
  </div>
</div>

@endsection
