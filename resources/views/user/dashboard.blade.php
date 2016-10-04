@extends('layouts.default')

@section('content')

    <div class="column">
        <div class="callout large primary">
            <h1>{{ $user->name }}</h1>
        </div>
    </div>

    <div class="column medium-6">
      <div class="callout">
        <h2>Your Orders</h2>
        @foreach($user->orders as $order)

          <p>
            <a href="/order/{{$order->id}}">
              {{$order->title}}
            </a>
          </p>

        @endforeach

        <p>
          <a href="/order/create" class='button expanded'>
            Create an Order
          </a>
        </p>
      </div>
    </div>


        <div class="column medium-6">
          <div class="callout">
            <h2>Your Recipients</h2>

            @foreach($user->recipients as $recipient)

              <p>
                <a href="/recipient/{{$recipient->id}}">
                  {{$recipient->name}}
                </a>
              </p>

            @endforeach


              <p>
                <a href="/recipient/create" class='button expanded'>
                  Create a Recipient
                </a>
              </p>

          </div>
        </div>

@endsection
