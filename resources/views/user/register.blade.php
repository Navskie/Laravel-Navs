@include('partials.__header')
  <header class="max-w-lg mx-auto">
    <a href="#">
      <h1 class="text=4x1 font-bold text-white text-center">Create an account</h1>
    </a>
  </header>
  <main class="bg-white mx-auto max-w-lg p-8 my-10 rounded-lg shadow-2x1">
    <section>
      <h3 class="font-bold text-2x1">Welcome to laravel student</h3>
      <p class="text-gray-600 pt-2">Sign In to your account</p>
    </section>
    <section class="mt-10">
      <form action="/store_data" method="POST" class="flex flex-col">
        <!-- protection -->
        @csrf
        <!-- protection -->
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
          <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{ old('name') }}>
          @error('name')
            <p class="text-red-500 text-xs text-center">
              {{ $message }}
            </p>
          @enderror
        </div>
        @error('email')
          <p class="text-red-500 text-xs text-center">
            {{ $message }}
          </p>
        @enderror
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <label for="Email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
          <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{ old('email') }}>
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <label for="Password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
          <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{ old('password') }}>
          @error('password')
            <p class="text-red-500 text-xs text-center">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <label for="Password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
          <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{ old('password_confirmation') }}>
          @error('password_confirmation')
            <p class="text-red-500 text-xs text-center">
              {{ $message }}
            </p>
          @enderror
        </div>
        <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Sign Up</button>
        <br>
        <a href="/login" class="text-center text-muted">Sign In</a>
      </form>
    </section>
  </main>
@include('partials.__footer')