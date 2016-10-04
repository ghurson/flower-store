@extends('layouts.default')

@section('content')

    <div class="column">
        <div class="callout large primary">
            <h1>Create a New Recipient</h1>
        </div>
    </div>

    <div class="column">
      <form action="/recipient/create" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Recipient Name">
        <input type="text" name="address" placeholder="Address">
        <input type="submit" class='button expanded'>
      </form>
    </div>

@endsection
