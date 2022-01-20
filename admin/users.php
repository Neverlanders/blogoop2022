<?php
include("includes/header.php");
if(!$session->is_signed_in()){//testen of er een user ingelogd is (is er een session)
    redirect('login2.php');
}

$users = User::find_all();

include("includes/sidebar.php");
include("includes/content-top.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>USERS</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Username</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <th scope="row"><?php echo $user->id; ?></th>
                        <td><img src="http://placeholder.it/62x62" height="62" width="62" alt="<?php echo $user->first_name .' '. $user->last_name; ?>"></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->first_name; ?></td>
                        <td><?php echo $user->last_name; ?></td>
                    </tr>
                <?php endforeach; ?>



                </tbody>
            </table>
        </div>
    </div>
</div>


<?php

include("includes/footer.php");
?>
