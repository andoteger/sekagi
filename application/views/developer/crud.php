<div class="container form">
    <div class="row">
        <div class="col-lg-8">
        <form form="<?php echo base_url();?>" method="get">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" aria-describedby="judulHelp">
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" id="rating">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun">
            </div>
                <label for="tahun">Image thumbnails</label>
            <div class="custom-file mb-4">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <button type="submit " class="btn btn-primary btn-block">Submit</button>
            
        </form>
        </div>
    </div>
</div>