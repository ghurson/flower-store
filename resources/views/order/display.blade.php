@extends('layouts.default')

@section('content')

    <div class="column">
        <div class="callout large primary">
            <h1>{{ $order->title }}
              <small>{{$order->purchaser->name}}</small>
            </h1>
        </div>
    </div>

    <div class="column medium-6">
      <div class="callout">
        <h2>Order Recipient</h2>
        <p>
          <a href="/recipient/{{$order->recipient->id}}">
            {{$order->recipient->name}}
          </a>
        </p>
      </div>
    </div>

    <div class="column medium-6">
      <div class="callout">
        <h2>Update Your Order</h2>
        <form action="/order/update" method="post">
            {{ csrf_field() }}
            <input type="text" name="id" value="{{$order->id}}">
            <input type="text" name="title" value="{{$order->title}}">
            <input type="text" name="delivery" value="{{$order->delivery}}">
            <input type="text" name="price" value="{{$order->price}}">
            <input type="text" name="recipient_id" value="{{$order->recipient_id}}">
            <input type="submit" class='button expanded' value="Update">
        </form>
      </div>
    </div>

@endsection
