<!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-togglable fixed-top">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index') }}">
          <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('index')}}" >
                Home
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarPages">
                About Us
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDocumentation">
                Contacts Us
              </a>
            </li>
          </ul>

          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="#register" target="_blank">
            Take Part
          </a>

        </div>
  
      </div>
    </nav>