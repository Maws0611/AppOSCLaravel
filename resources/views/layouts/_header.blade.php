
    <nav class="navbar navbar-expand-lg navbar-light fixed top-0">
      <div class="container-fluid">
        <a class="navbar-brand" >AppNousFemme</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('entreprises.create') }}">Ajouter entreprise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('entreprises.index') }}">Entreprise</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>