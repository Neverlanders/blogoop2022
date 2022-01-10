<!-- Content Row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>testen connectie database</h1>
            <hr>
            <?php
                if($database->connection){
                    echo "ok, connectie gemaakt met de database";
                }else{
                    echo "geen databaseconnectie";
                }
            ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->