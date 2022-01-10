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
            <hr>
            <h2>Ophalen van een user</h2>
            <h3>Manier 1</h3>
            <?php
                $sql = "SELECT * FROM users WHERE id=1";
                $result = $database->query($sql);
                $user_found = mysqli_fetch_array($result);
                echo $user_found["username"];
            ?>
            <hr>
            <h3>Manier 2</h3>
            <?php
                $result = User::find_user_by_id(1);
                //var_dump($result);
                while($row = mysqli_fetch_array($result)){
                    echo $row["first_name"] . ' - ' . $row["last_name"] . "<br>";
                }
            ?>
            <hr>
            <h2>Class user aanspreken en doorlopen</h2>
            <h3>Manier 1</h3>
            <ul class="list-group">
           <?php
               $user = new User();
                $result = $user->find_all_users();
                while($row = mysqli_fetch_array($result)){
                    //echo $row["first_name"] . ' - ' . $row["last_name"] . "<br>";
                    echo "<li class='list-group-item'>" . $row["first_name"] . ' - ' . $row["last_name"] ."</li>";
                }
            ?>
            </ul>
            <hr>
            <h3>Manier 2</h3>
            <ul class="list-group">
            <?php
            $result = User::find_all_users();
            while($row = mysqli_fetch_array($result)){
                //echo $row["first_name"] . ' - ' . $row["last_name"] . "<br>";
                echo "<li class='list-group-item'>" . $row["first_name"] . ' - ' . $row["last_name"] ."</li>";
            }
            ?>
            </ul>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->