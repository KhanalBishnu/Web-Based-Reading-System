<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        {{-- <a class="nav-link"  href="{{url('/admin/home')}}"> --}}
          <a href="" class="nav-link">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">DashBoard</span>
        </a>
      </li>
      {{-- @can('view.category') --}}
      <li class="nav-item">
            <a class="nav-link" href="{{ route('category') }}">

              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          
      <li class="nav-item">
        {{-- <a class="nav-link"  href="{{ route('book') }}"> --}}
          <a href="" class="nav-link">

                <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Books</span>
          {{-- <i class="menu-arrow"></i> --}}
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('author') }}">

                <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Authors</span>
        </a>
      </li>
     
    
      <li class="nav-item">
        {{-- <a class="nav-link" href="{{route('orderList')}}"> --}}
          <a href="" class="nav-link">

                <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Order List</span>
        </a>
      </li>
      {{-- @endcan
     @can('view.user') --}}
      <li class="nav-item">
        {{-- <a class="nav-link"  href="{{ route('user') }}" > --}}
          <a href="" class="nav-link">

          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User Pages</span>
          {{-- <i class="menu-arrow"></i> --}}
        </a>
       
      </li>
     
    </ul>
  </nav>