@include('partials.__header')
<?php
  $array = array('title' => 'Student System');
?>
<x-__nav :data="$array"/>

  <header class="max-w-lg mx-auto">
  <br><br><br>
  </header>
  <section class="">
    <div class="p-7 h-screen bg-gray-100">
      <table class="w-1/2 mx-auto">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
          <tr>
            <th scope="col" class="p-3 text-sm font-semi-bold tracking-wide text-left">
              First Name
            </th>
            <th scope="col" class="p-3 text-sm font-semi-bold tracking-wide text-left">
              Last Name
            </th>
            <th scope="col" class="p-3 text-sm font-semi-bold tracking-wide text-left">
              Gender
            </th>
            <th scope="col" class="p-3 text-sm font-semi-bold tracking-wide text-left">
              Email
            </th>
            <th scope="col" class="p-3 text-sm font-semi-bold tracking-wide text-left">
              age
            </th>
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
          <tr class="bg-white text-center">
            <td class="p-3 text-sm text-gray-700">
            {{ $student->fname }}
            </td>
            <td class="p-3 text-sm text-gray-700">
            {{ $student->lname }}
            </td>
            <td class="p-3 text-sm text-gray-700">
            {{ $student->gender }}
            </td>
            <td class="p-3 text-sm text-gray-700">
            {{ $student->email }}
            </td>
            <td class="p-3 text-sm text-gray-700">
            {{ $student->age }}
            </td>
          </tr>
        @endforeach
        </tbody>
        
      </table>
      <br>
      <div class="w-1/2 mx-auto">
      {{$students->links()}}
      </div>
    </div>
  </section>
@include('partials.__footer')