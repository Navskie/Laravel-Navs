<ul class="flex flex-col px-4 md:flex-row">
  @auth
    <li>
      <a href="/crud/add" class="block py-2 pr-4 pl-3">Create Users</a>
    </li>
    <form action="/logout" method="post">
      @csrf
      <button class="block py-2 pr-4 pl-3">Logout</b>
    </form>
  @else
  <li>
    <li>
      <a href="/login" class="block py-2 pr-4 pl-3">Sign In</a>
    </li>
    <li>
      <a href="/register" class="block py-2 pr-4 pl-3">Register</a>
    </li>
  </li>
  @endauth
</ul>