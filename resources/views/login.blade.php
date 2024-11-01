<form action="{{ url('/login') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="you@example.com">
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="********">
        @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Login</button>
</form>
