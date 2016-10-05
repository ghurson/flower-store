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
            <input type="hidden" name="id" value="{{$order->id}}">
            <input type="text" name="title" value="{{$order->title}}">
            <input type="text" name="delivery" value="{{$order->delivery}}">
            <label for="budget_id">What's Your Budget?</label>
            <select class="" name="budget_id">
              @foreach(\DB::table('budgets')->get() as $budget)
                <option value='{{$budget->id}}'>{{$budget->title}} (between {{$budget->low}} and {{$budget->high}})</option>
              @endforeach
            </select>
            <label for="recipient_id">Who are the flowers for?</label>
            <select class="" name="recipient_id">
              @foreach(\Auth::user()->recipients as $recipient)
                <option value='{{$recipient->id}}'>{{$recipient->name}}</option>
              @endforeach
            </select>
            <input type="submit" class='button expanded' value="Update">
        </form>
      </div>
    </div>

@endsection
