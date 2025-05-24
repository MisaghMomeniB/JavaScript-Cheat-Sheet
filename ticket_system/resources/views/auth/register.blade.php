<h2>Register</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input name="name" placeholder="Name" required><br>
    <input name="email" type="email" placeholder="Email" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required><br>
    <button type="submit">Register</button>
</form>