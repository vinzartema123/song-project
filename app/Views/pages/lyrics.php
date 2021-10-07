<div style="display: flex;
    justify-content: center;
    margin: 10px;">
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">Create Lyrics</button>
</div>


</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Song Lyrics</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="/dashboard" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="artist" placeholder="Artist">
            </div>
            <div class="form-group">
                <label>Lyrics</label>
                <textarea class="form-control" type="text" name="lyrics" rows="3" placeholder="Enter Lyrics"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<div class="col-md-12" style="margin: 20px;">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Lyrics</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lyrics as $row ) :?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['artist']?></td>
                <td><?= $row['lyrics'] ?></td>
                <td> <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight<?= $row['id'] ?>" aria-controls="offcanvasRight">Edit</a>
                    <a href="/lyrics/delete/<?= $row['id']?>" class="btn btn-danger">Delete</a></td>
            </tr>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight<?= $row['id'] ?>"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Edit Lyrics</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="/lyrics/update" method="post">
                        <input type="hidden" value="<?= $row['id']; ?>" class="form-control" name="id"
                            placeholder="Title">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" value="<?= $row['title']; ?>" class="form-control" name="title"
                                placeholder="Title">
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?= $row['artist']; ?>" class="form-control" name="artist"
                                placeholder="Artist">
                        </div>
                        <div class="form-group">
                            <label>Lyrics</label>
                            <textarea class="form-control" type="text" name="lyrics" rows="3"
                                placeholder="Enter Lyrics"><?= $row['lyrics']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </tbody>

    </table>



</div>