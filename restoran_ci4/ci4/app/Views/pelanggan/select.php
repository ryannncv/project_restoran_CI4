<?= $this -> extend ('template/admin')?>

<?= $this -> section ('content')?>

<?php 
    if(isset($_GET['page_page'])){
        $page = $_GET['page_page'];
        $jumlah = 3;
        $no = ($jumlah * $page) - $jumlah + 1;
    }else{
        $no=1;
    }
?>
<div class="row">
    <div class="col">
        <h3><?= $judul; ?></h3>
    </div>
</div>
  
<div class="row">
    <div class="col">
        <table class="table mt-2">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
                <th>Status</th>
            </tr>
            <?php $no ?>
            <?php foreach($pelanggan as $key => $value): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td> <?= $value['pelanggan'] ?></td>
                <td> <?= $value['alamat']?></td>
                <td> <?= $value['telp']?></td>
                <td> <?= $value['email']?></td>
                <td><a href="<?= base_url()?>/admin/pelanggan/delete/<?= $value ['idpelanggan'] ?>"><img src="<?= base_url('/icon/can.svg')?>"</a>
               
                <?php 
                    if ($value ['aktif'] == 0) {
                        $aktif = "AKTIF";
                    } else {
                        $aktif ="NON AKTIF";
                    }  
                ?>
                
                
                <td><button class="btn btn-primary"><a href="<?= base_url()?>/admin/pelanggan/update/<?= $value ['idpelanggan'] ?>/<?= $value ['aktif']?>"style="color:white;"><?= $aktif?></a></button> 
                 
            </tr>
            <?php endforeach; ?>
        </table>
        <?= $pager->links('page','bootstrap')?>
    </div>
 </div>
<?= $this -> endSection ()?>