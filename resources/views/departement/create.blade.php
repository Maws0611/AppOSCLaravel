<form action="{{ route('store')}}" methode="post">
    @csrf
<input type="text" name="nomSiege" placeholder="Siéges">

<select name="pays_id">
    <option value="">Selectioner un pays</option>
    @foreach ($pays as $pays)
    <option value="{{$pays->id}}">{{$pays->nomPays}}</option>
    @endforeach
</select>

<select name="region_id">
    <option value="">Selectioner une région</option>
    @foreach ($regions as $region)
    <option value="{{$region->id}}">{{$region->nomRegion}}</option>
    @endforeach
</select>

<select name="departement_id">
    <option value="">Selectioner un département</option>
    @foreach ($departements as $departement)
    <option value="{{$departement->id}}">{{$departement->nomDepartement}}</option>
    @endforeach
</select>

<select name="commune_id">
    <option value="">Selectioner un commune</option>
    @foreach ($communes as $commune)
    <option value="{{$commune->id}}">{{$commune->nomCommune}}</option>
    @endforeach
</select>

<button type="submit">Ajouter</button>
</form>