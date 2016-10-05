<h2>Welcome {{ \Auth::user()->name }}!</h2>
<p>
  You currently have {{ count(\Auth::user()->orders)}} orders.
</p>
