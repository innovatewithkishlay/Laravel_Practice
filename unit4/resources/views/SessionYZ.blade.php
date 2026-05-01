@if(session()->has('name'))
<p>Welcome, {{ session('name') }}!</p>
<a href="/logout">Logout</a>
@else
<p>Welcom...please re login.</p>
<a href="/login">Login</a>
@endif