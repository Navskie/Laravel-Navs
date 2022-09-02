@include('partials.__header')
  <header class="max-w-lg mx-auto">
    <a href="#">
      <h1 class="text=4x1 font-bold text-white text-center">Student Admin Login</h1>
    </a>
  </header>
  <main class="bg-white mx-auto max-w-lg p-8 my-10 rounded-lg shadow-2x1">
    <section>
      <h3 class="font-bold text-2x1">Welcome to laravel student</h3>
      <p class="text-gray-600 pt-2">Sign In to your account</p>
    </section>
    <section class="mt-10">
      <form method="POST" action="/login/process" class="flex flex-col">
        @csrf
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <label for="Email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email Address</label>
          <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <label for="Email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
          <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
        </div>
        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Sign In</button>
      </form>
    </section>
  </main>
@include('partials.__footer')