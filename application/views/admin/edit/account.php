<div class="container">



    <?= form_open_multipart('admin/updateAccount'); ?>

    <?php foreach ($account as $ac) : ?>


    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="username" name="username" value="<?= $ac->username ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="password" name="password" value="<?= $ac->password ?>" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="<?= $ac->name ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="role" name="role" value="<?= $ac->role ?>">
        </div>
    </div>
    <?php endforeach; ?>
    <small class="ml-5">1= Admin ; 2= Author</small>

    <div class="form-group row justify-content-end">
        <div class="col-sm-12 mt-3">
            <a href="<?php echo base_url('admin/account') ?>">
                <div class="btn btn-sm btn-danger">Kembali</div>
                <button type="submit" class="btn btn-primary">Perbaharui</button>
        </div>
    </div>

</div>