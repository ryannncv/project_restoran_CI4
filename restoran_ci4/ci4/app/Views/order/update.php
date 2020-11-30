<?= $this -> extend ('template/admin')?>

<?= $this -> section ('content')?>
<div class="row">
    <div class="col">
        <h3>   <?= $judul?> </h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>Pelanggan : <?= $order[0]['pelanggan']?></p>
    </div>
    <div class="col">
        <p>Tanggal Order : <?= date("d-m-Y",strtotime($order[0]['tglorder'])) ?></p>
    </div>
    <div class="col">
        <p>Total :<b> <?= number_format( $order[0]['total'])?></b></p>
    </div>
</div>
<div class="row">
    <div class="col-6">
    <form action="<?= base_url('/admin/order/update')?>" method="post">
        <div class="form-group">
            <label for="Kategori">BAYAR</label>
            <input type="number" name="bayar" reqired class="form-control">
        </div>
            <input type="hidden" name="total" value="<?= $order[0]['total'] ?>" reqired class="form-control">
            <input type="hidden" name="idorder" value="<?= $order[0]['idorder'] ?>" reqired class="form-control">
        <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
    </div>
</div>
<div class="row">
<div class="col-8">
    <?php
        if(!empty(session()->getFlashdata('info'))){
            echo '<div class="alert alert-danger" role="alert">';
            echo session()->getFlashdata('info');
            echo '</div>';
        } 
    ?>
</div>
</div>
<br>
<div class="row">
    <div class="col">
        <h5><b>Rincian Order</b></h5>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php $no =1 ;?>
            <?php  foreach($detail as $value): ?> 
            <tr>
                <td><?= $no++?></td>
                <td><?= $value['menu']?></td>
                <td><?= $value['hargajual']?></td>
                <td><?= $value['jumlah']?></td>
                <td><?= $value['total']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?= $this -> endSection ()?>