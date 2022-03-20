@include('header')

<div class="row">
    <div class="col">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">liste</th>
                  <th scope="col">Pays</th>
                  <th scope="col">Indications</th>
                  <th scope="col">Regions</th>
                  {{-- <th scope="col">Départements</th>
                  <th scope="col">Communes</th>
                  <th scope="col">Quartier</th>
                  <th scope="col">Siége sociale</th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($pays as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->nomPays}}</td>
                    <td>{{$p->indication}}</td>
                    <td>{{$p->indication}}</td>
                    {{-- @foreach ($regions as $region)
                    <td>{{$region->nomRegion}}</td>
                    @endforeach
                     --}}
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
</div>
