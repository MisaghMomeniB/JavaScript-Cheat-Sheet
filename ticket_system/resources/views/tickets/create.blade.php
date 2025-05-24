<form method="POST" action="{{ route('tickets.store') }}">
    @csrf
    <input name="subject" placeholder="Subject">
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit">Submit</button>
</form>
