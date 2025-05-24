

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
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf
      <div>
        <input 
          name="email" 
          type="email" 
          placeholder="Email" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        >
      </div>
      <div>
        <input 
          name="password" 
          type="password" 
          placeholder="Password" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        >
      </div>
      <button 
        type="submit" 
        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300"
      >
        Login
      </button>
    </form>
    <div class="mt-4 text-center">
      <a 
        href="{{ route('register') }}" 
        class="text-blue-600 hover:text-blue-800 font-medium transition duration-300"
      >
        Register
      </a>
    </div>
  </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>