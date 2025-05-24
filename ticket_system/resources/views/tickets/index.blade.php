<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-8">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Tickets</h1>
    <div class="mb-6 text-center">
      <a 
        href="{{ route('tickets.create') }}" 
        class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-300"
      >
        Create Ticket
      </a>
    </div>
    <ul class="bg-white rounded-lg shadow-lg p-6 space-y-4">
      @foreach($tickets as $ticket)
        <li>
          <a 
            href="{{ route('tickets.show', $ticket) }}" 
            class="text-blue-600 hover:text-blue-800 font-medium transition duration-300"
          >
            {{ $ticket->subject }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>