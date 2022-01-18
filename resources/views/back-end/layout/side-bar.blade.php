    <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{url('/assets/img/sidebar-2.jpg')}}">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="{{route('admin.home')}}" class="simple-text logo-normal">
         Travel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ is_active('home') }}">
            <a class="nav-link" href="{{ route('admin.home') }} ">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        
          <li class="nav-item  {{ is_active('users') }} ">
            <a class="nav-link" href="{{ route('users.index') }} ">
               <i class="material-icons">person</i> 
               <p>Users</p>
            </a>
          </li>
         <li class="nav-item  {{ is_active('categories') }} ">
            <a class="nav-link" href="{{ route('categories.index') }} ">
               <i class="material-icons">bubble_chart</i> 
               <p>Categories</p>
            </a>
          </li>
          
          <li class="nav-item  {{ is_active('destinations') }} ">
            <a class="nav-link" href="{{ route('destinations.index') }} ">
               <i class="material-icons">call_made</i> 
               <p>Destinations</p>
            </a>
          </li>
     
          <li class="nav-item  {{ is_active('journeys') }} ">
            <a class="nav-link" href="{{ route('journeys.index') }} ">
               <i class="material-icons">local_car_wash</i> 
               <p>journeys</p>
            </a>
          </li>

          <li class="nav-item  {{ is_active('blogs') }} ">
            <a class="nav-link" href="{{ route('blogs.index') }} ">
               <i class="material-icons">library_books</i> 
               <p>blogs</p>
            </a>
          </li>

           <li class="nav-item  {{ is_active('infos') }} ">
            <a class="nav-link" href="{{ route('infos.index') }} ">
               <i class="material-icons">business</i> 
               <p>About Us</p>
            </a>
          </li>

          <li class="nav-item  {{ is_active('messages') }} ">
            <a class="nav-link" href="{{ route('messages.index') }} ">
               <i class="material-icons">cloud</i> 
               <p>Messages</p>
            </a>
          </li>

        </ul>
      </div>
    </div>