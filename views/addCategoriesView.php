<div class="container">
  <h3>Formulaire d'ajout</h3>
    <form action="index.php?goto=categories" method="post">

        <div>
            <label class="form-label" for="id">Name</label>
            <input class="form-control" type="string" id="name" name="name">
        </div>
        <div>
            <label class="form-label" for="id">Short Description</label>
            <input class="form-control" type="string" id="shortDesc" name="shortDesc">
        </div>
        <div>
            <label class="form-label" for="id">Index</label>
            <input class="form-control" type="string" id="index" name="index">
        </div>
        <div>
            <button type="submit" name="submitAdd" value="added" class="btn btn-primary">Ajouter
            </button>
        </div>

    </form>
</div>