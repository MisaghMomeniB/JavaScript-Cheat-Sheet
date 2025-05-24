<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Create Ticket</h2>
    <form method="POST" action="{{ route('tickets.store') }}" class="space-y-6">
      @csrf
      <div>
        <input 
          name="subject" 
          type="text" 
          placeholder="Subject" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        >
      </div>
      <div>
        <textarea 
          name="message" 
          placeholder="Message" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent h-32 resize-y"
        ></textarea>
      </div>
      <button 
        type="submit" 
        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300"
      >
        Submit
      </button>
    </form>
  </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>