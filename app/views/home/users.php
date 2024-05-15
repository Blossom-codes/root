<div class="container">
    <div class="row justify-content-center">
        <h4>List of Users</h4>
        <hr>
        <?php
        while ($row = $data['data']->fetch()) {
        ?>

            <div class="col-12">
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['first_name'] ?> <?= $row['last_name'] ?></h5>
                        <p class="card-text"><?= $row['gender'] ?></p>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>