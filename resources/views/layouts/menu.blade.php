<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('brands*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('brands.index') }}"><i class="fas fa-building"></i><span>Brands</span></a>
</li>

<li class="side-menus {{ Request::is('bookings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bookings.index') }}"><i class="fas fa-building"></i><span>Bookings</span></a>
</li>

<li class="side-menus {{ Request::is('cars*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cars.index') }}"><i class="fas fa-building"></i><span>Cars</span></a>
</li>

<li class="side-menus {{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}"><i class="fas fa-building"></i><span>Customers</span></a>
</li>

<li class="side-menus {{ Request::is('testimonis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('testimonis.index') }}"><i class="fas fa-building"></i><span>Testimonis</span></a>
</li>

<li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-building"></i><span>Users</span></a>
</li>

<!-- <li class="side-menus {{ Request::is('posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-building"></i><span>Posts</span></a>
</li>

<li class="side-menus {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-building"></i><span>Categories</span></a>
</li> -->

<li class="side-menus {{ Request::is('categoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categoris.index') }}"><i class="fas fa-building"></i><span>Categoris</span></a>
</li>

