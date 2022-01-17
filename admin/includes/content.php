<!-- Content Row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
           <?php
                $photos = Photo::find_all();
                foreach($photos as $photo){
                    echo $photo->title . "<br>";
                }
           ?>


        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->