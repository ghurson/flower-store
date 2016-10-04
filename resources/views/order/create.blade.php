@extends('layouts.default')

@section('content')

    <div class="column">
        <div class="callout large primary">
            <h1>Create an Order</h1>
        </div>
    </div>

    <div class="column">
      <h2>Enter Your Information</h2>
      <form class="" action="/order/create" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder='Name of your Order'>
        <input type="text" name="delivery" placeholder='Delivery Date'>
        <input type="text" name="price" placeholder='Order Cost'>
        <input type="text" name="address" placeholder='Order Address'>
        <label for="recipient">Order Recipient</label>
        <select  name="recipient">
          @foreach(\Auth::user()->recipients as $recipient)
            <option value="{{$recipient->id}}">{{$recipient->name}}</option>
          @endforeach
        </select>
        <input type="submit" value="Order" class='button'>
      </form>
    </div>

@endsection
