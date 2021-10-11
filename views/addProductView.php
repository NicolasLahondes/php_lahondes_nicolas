<div class="container">
    <h3>Formulaire d'ajout</h3>
    <form action="index.php?goto=categories" method="post">

        <div>
            <label class="form-label" for="id">Name</label>
            <input class="form-control" type="string" id="pName" name="pName">
        </div>
        <div>
            <label class="form-label" for="id">Long Description</label>
            <input class="form-control" type="string" id="pShortDesc" name="pShortDesc">
        </div>
        <div>
            <label class="form-label" for="id">Visual</label>
            <input class="form-control" type="string" id="pVisual" name="pVisual">
        </div>
        <div>
            <label class="form-label" for="id">Price</label>
            <input class="form-control" type="string" id="pPrice" name="pPrice">
        </div>
        <div>
            <label class="form-label" for="id">Designer name</label>
            <input class="form-control" type="string" id="pDesignerName" name="pDesignerName">
        </div>
        <div>
            <label class="form-label" for="id">Designer mail</label>
            <input class="form-control" type="string" id="pDesignerMail" name="pDesignerMail">
        </div>
        <div>
            <button type="submit" name="submitAdd" value="addedProduct" class="btn btn-primary">Ajouter
            </button>
        </div>

    </form>
</div>