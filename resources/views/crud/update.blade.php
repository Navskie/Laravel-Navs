@include('partials.__header', [$title])
<?php
  $array = array('title' => 'Student System');
?>
<x-__nav :data="$array"/>
<br><br>
  <div
      class="min-h-screen flex flex-col items-center justify-center bg-gray-100"
    >
      <div
        class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        "
      >
        <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
          Manage {{ $student->fname }} {{ $student->lname }}
        </div>
        @error('email')
          <p class="text-red-500 text-xs text-center mt-3">
            {{ $message }}
          </p>
        @enderror
        @error('fname')
          <p class="text-red-500 text-xs text-center mt-3">
            {{ $message }}
          </p>
        @enderror
        @error('lname')
          <p class="text-red-500 text-xs text-center mt-3">
            {{ $message }}
          </p>
        @enderror
        @error('age')
          <p class="text-red-500 text-xs text-center mt-3">
            {{ $message }}
          </p>
        @enderror
        @error('gender')
          <p class="text-red-500 text-xs text-center mt-3">
            {{ $message }}
          </p>
        @enderror
        <div class="mt-10">
          <form action="/crud/{{ $student->id }}" method="POST">
          @method('PUT')
          @csrf
            <div class="flex flex-col mb-5">
              
              <label
                for="name"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >First Name</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-user text-blue-500"></i>
                </div>

                <input
                  id="fname"
                  type="fname"
                  name="fname"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your first name"
                  value="{{ $student->fname }}">
              </div>
            </div>
            <div class="flex flex-col mb-5">
              
              <label
                for="email"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >Last Name</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-user text-blue-500"></i>
                </div>

                <input
                  id="lname"
                  type="text"
                  name="lname"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your last name"
                  value="{{ $student->lname }}">
              </div>
            </div>
            <div class="flex flex-col mb-6">
              <label
                for="gender"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Gender:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-user text-blue-500"></i>
                  </span>
                </div>

                <select
                  id="gender"
                  type="text"
                  name="gender"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                >
                  <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                  <option value="Male" {{ $student->gender == "Male" ? 'selected' : 'Male' }}>Male</option>
                  <option value="Female" {{ $student->gender == "Female" ? 'selected' : 'Female' }}>Female</option>
                </select>
              </div>
            </div>
            <div class="flex flex-col mb-6">
              <label
                for="password"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Age:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-user text-blue-500"></i>
                  </span>
                </div>

                <input
                  id="age"
                  type="text"
                  name="age"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your age" value="{{ $student->age }}""
                >
              </div>
            </div>

            <div class="flex flex-col mb-6">
              <label
                for="password"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Email:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-user text-blue-500"></i>
                  </span>
                </div>

                <input
                  id="email"
                  type="email"
                  name="email"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400 
                  "
                  placeholder="Enter your email" value="{{ $student->email }}"
                >
              </div>
            </div>

            <div class="flex w-full">
              <button
                class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-blue-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                "
              >
                <span class="mr-2 uppercase">Update</span>
                <span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
              </button>
            </div>
            
            </div>
          </form>
          <form action="/crud/{{ $student->id }}" method="post">
            @method('delete')
            @csrf
            <div class="flex w-full">
              <button
                class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-red-500
                  hover:bg-red-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                "
              >
                <span class="mr-2 uppercase">Delete</span>
                <span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
              </button>
            </div>
          </form>
      </div>
    </div>
@include('partials.__footer')