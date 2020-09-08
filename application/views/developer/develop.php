<div class="container table">
    <div class="row">
    <a href="<?php echo base_url();?>dev/crud"><button type="submit " class="btn btn-success btn-block mb-3">input</button></a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Episode</th>
                    <th scope="col">Tanggal Upload</th>
                    <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    $no = 1;
                    foreach($user as $u) { ?>
                        
                    <th scope="row"><?php echo $no++?></th>
                    <td><?php echo $u->judul?></td>
                    <td><?php echo $u->eps?></td>
                    <td>09/09/2020</td>
                    <td>Edit | Hapus</td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>