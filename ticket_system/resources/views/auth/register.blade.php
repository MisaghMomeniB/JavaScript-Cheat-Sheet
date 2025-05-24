<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            <div>
                <input 
                    name="name" 
                    type="text" 
                    placeholder="Name" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
            </div>
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
            <div>
                <input 
                    name="password_confirmation" 
                    type="password" 
                    placeholder="Confirm Password" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
            </div>
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300"
            >
                Register
            </button>
        </form>
    </div>
</body>
</html>