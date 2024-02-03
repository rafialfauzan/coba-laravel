<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? '' : 'text-dark' }}"  href="/dashboard">
          <svg class="bi"><use xlink:href="#house-fill"/></svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? '' : 'text-dark' }}" href="/dashboard/posts">
          <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
          My Post
        </a>
      </li>
    </ul>

    <hr class="my-3">

    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="nav-link d-flex align-items-center gap-2 text-dark"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
      </li>
    </ul>
  </div>