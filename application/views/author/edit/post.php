<div class="container">



    <?= form_open_multipart('author/updatePost'); ?>

    <?php foreach ($post as $pt) : ?>


    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">ID Post</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="idpost" name="idpost" value="<?= $pt->idpost ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" value="<?= $pt->title ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="content" name="content" value="<?= $pt->content ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="date" name="date" value="<?= $pt->date ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" value="<?= $pt->username ?>" readonly>
        </div>
    </div>
    <?php endforeach; ?>


    <div class="form-group row justify-content-end">
        <div class="col-sm-12 mt-3">
            <a href="<?php echo base_url('author') ?>">
                <div class="btn btn-sm btn-danger">Kembali</div>
                <button type="submit" class="btn btn-primary">Perbaharui</button>
        </div>
    </div>

</div>