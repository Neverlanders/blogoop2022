<!-- Content Row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>User testen</h1>

            <h2>Ophalen van een user</h2>
            <?php
                $result = User::find_user_by_id(1);
                echo $result->username;
            ?>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->