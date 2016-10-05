<h2>Login</h2>
<form action="/login" method="post">

    {{ csrf_field() }}
    <input type="text" name="email" placeholder='Email Address'>
    <input type="password" name="password" placeholder="Password">
      <input type="submit" class="button expanded" value="Log In">
</form>
