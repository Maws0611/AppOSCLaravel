@include('header')

<div class="row">
    <h1>La liste des entreprises</h1>
    <div class="col">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">liste</th>
                  <th scope="col">Nom entreprise</th>
                  <th scope="col">Localité</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($entreprises as $entreprise)
                <tr>
                  <th scope="row">{{ $entreprise->id }}</th>
                  <td>{{ $entreprise->nomEntreprise }}</td>
                <td>{{ $entreprise->sieges->nomSiege }}</td>
                    <td>{{ $entreprise->sieges->quartier->commune->departement->region->nomSiege }}</td>
                    <td>
                        <a href="{{ route('entreprise.show',$entreprise) }}">plus d'informations</a>
                    </td>

                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
</div>
