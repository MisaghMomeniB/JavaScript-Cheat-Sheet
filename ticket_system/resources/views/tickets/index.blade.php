<h1>Tickets</h1>
<a href="{{ route('tickets.create') }}">Create Ticket</a>
<ul>
@foreach($tickets as $ticket)
    <li><a href="{{ route('tickets.show', $ticket) }}">{{ $ticket->subject }}</a></li>
@endforeach
</ul>