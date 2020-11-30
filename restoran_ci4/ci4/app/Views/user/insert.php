<?= $this -> extend ('template/admin')?>

<?= $this -> section ('content')?>

<div class="col-8">
<?php
        if(!empty(session()->getFlashdata('info'))){
            echo '<div class="alert alert-danger" role="alert">';
            $error = session()->getFlashdata('info');
            foreach ($error as $key => $value) {
                echo $key."=>".$value;
                echo "<br>";
            }
            echo '</div>';
        } 
    ?>
</div>
<div class="col">
    <h3>  INSERT DATA </h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/user/insert')?>" method="post">
        <div class="form-group">
            <label for="Kategori">Username</label>
            <input type="text" name="user" reqired class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">Email</label>
            <input type="email" name="email" reqired class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">Password</label>
            <input type="password" name="password" reqired class="form-control">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select class="form-control" name="level" id="idkategori">
                <?php foreach($level as $key): ?>
                <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>
<?= $this -> endSection ()?>