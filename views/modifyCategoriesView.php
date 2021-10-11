<div class="container">

<?php if(!empty($_GET['name'])): ?>
    <h3>Vous modifiez <?php echo $_GET['name']; ?></h3>
<?php endif; ?>
    <form action="index.php?goto=categories" method="post">

        <div>
            <label class="form-label" for="id">Name</label>
            <input class="form-control" type="string" id="nameToModify" name="nameToModify" value="<?php if(!empty($_GET['name'])): {echo $_GET['name'];} endif; ?>" </div>
            <div>
                <label class="form-label" for="id">Short Description</label>
                <input class="form-control" type="string" id="shortDescToModify" name="shortDescToModify" value="<?php if(!empty($_GET['name'])): { echo $_GET['short'];} endif; ?>">
            </div>
            <div>
                <label class="form-label" for="id">Index</label>
                <input class="form-control" type="string" id="indexToModify" name="indexToModify" value="<?php echo $_GET['id']; ?>">
            </div>
            <div>
                <button type="submit" name="modified" value="modified" class="btn btn-primary">Modifier
                </button>
            </div>

    </form>
</div>