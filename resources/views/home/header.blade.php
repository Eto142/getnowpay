  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fas fa-university"></i> GETNOWPAY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('business') }}">FOR BUSINESSES </a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('individual') }}">FOR INDIVIDUALS </a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('resources') }}">RESOURCES </a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('coin') }}">COINS</a></li>
         <li class="nav-item">
  <a class="nav-link" href="mailto:support@getnowpay.online">SUPPORT</a>
</li>

        </ul>
        <div class="d-flex">
           <a href="{{ route('login') }}" class="btn btn-login">LOG IN</a>
              <a href="{{ url('register') }}" class="btn btn-signup">SIGN UP</a>
         
        </div>
      </div>
    </div>
  </nav>