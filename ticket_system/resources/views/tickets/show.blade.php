<h1>{{ $ticket->subject }}</h1>
<p>{{ $ticket->message }}</p>

<h3>Replies</h3>
@foreach($ticket->replies as $reply)
    <div>
        <strong>{{ $reply->user->name }}</strong>
        <p>{{ $reply->message }}</p>
    </div>
@endforeach

<form method="POST" action="{{ route('replies.store', $ticket) }}">
    @csrf
    <textarea name="message"></textarea>
    <button type="submit">Reply</button>
</form>
