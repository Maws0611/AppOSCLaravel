@include('header')
    <h1>Mes postes prefer</h1>

    <div class="container" style="margin-top: 80px">
        <h1>{{ $entreprise->nom }}</h1>
          <h2>{{ $entreprise->localite->nom }}</h2>
          <p> Siège Sociale : {{ $entreprise->siege }}</p>
    </div>