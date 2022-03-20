@include('header')

<div class="container">
  <div class="row">
    <form method="post" action="{{ route('entreprise.index') }}">
       @csrf
        <div class="mb-3">
          <label for="nomEntreprise" class="form-label">Nom de l'entreprise</label>
          <input type="text" class="form-control" name="nomEntreprise">
        </div>
        <div class="mb-3">
          <label for="pageWeb" class="form-label">Page web</label>
          <input type="text" class="form-control" name="pageWeb">
        </div>
        <div class="mb-3">
          <label for="dateCreation" class="form-label">Date de Création</label>
          <input type="date" class="form-control" name="dateCreation">
        </div>
        <div class="mb-3">
          <label for="nombreEmploye" class="form-label">Nombre Employeés</label>
          <input type="number" class="form-control"  name="nombreEmploye">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="contratFormel">
          <label class="form-check-label" for="contratFormel">Avez-vous des contrats ?</label>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="organigrammeClaire">
          <label class="form-check-label" for="organigrammeClaire">Avez-vous un organigramme ?</label>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox"  name="dispositifFormation" class="form-check-input">
          <label class="form-check-label" for="dispositifFormation">Avez-vous un Dispositif de formation ?</label>
        </div>  
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="cotisationSocial">
          <label class="form-check-label" for="cotisationSocial">Avez-vous une caisse sociales ?</label>
        </div>
        <select class="form-select" aria-label="Default select example" name="registreJuridique">
          <option selected>Registre Juridique</option>
          <option value="EI">EI</option>
          <option value="EURL">EURL</option>
          <option value="SNC">SNC</option>
          <option value="SA">SA</option>
          <option value="SAS">SAS</option>
          <option value="SARL">SARL</option>
          <option value="GIE">GIE</option>
        </select>
        <select class="form-select" name="siege_id" aria-label="list des régions">
          <option selected>Sélectionner la localité</option>
            @foreach ($sieges as $siege)
              <option value="{{ $siege->id }}">{{ $siege->nomSiege }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>