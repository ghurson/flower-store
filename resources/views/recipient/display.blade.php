@extends('layouts.default')

@section('content')

    <div class="column">
        <div class="callout large primary">
            <h1>{{ $recipient->name }}</h1>
        </div>
    </div>

    <div class="column medium-6">
      <div class="callout">

      <h2>{{$recipient->name}}'s Orders</h2>
      @foreach($recipient->orders as $order)
        <p>
          <a href="/order/{{$order->id}}">
          {{$order->title}}
        </a>
        </p>
      @endforeach
    </div>
    </div>

    <div class="column medium-6">
      <div class="callout">
        <h2>Update This Recipient</h2>
        <p>
          Updating this recipient will update all records for this recipient.
        </p>

      <form action="/recipient/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$recipient->id}}">
        <input type="text" name="name" value="{{$recipient->name}}">
        <input type="text" name="address" value="{{$recipient->address}}">
        <input type="submit" class='button expanded'>
      </form>
      <a href="/recipient/{{$recipient->id}}/delete" class='button warning'>
        Delete Recipient
      </a>
    </div>
  </div>

@endsection
