<div class="col-md-12">
    <h2 class="display-4" style="text-align: center;">Lists Of Users</h2>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($users as $row ) :?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['firstname'].' '. $row['lastname']?></td>
                    <td><?= $row['email'] ?></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>