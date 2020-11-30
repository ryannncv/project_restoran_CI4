<!DOCTYPE html>
<html lang="en">
    <?= $this->include('template_user/header')?>
    <?= $this->include('template_user/navbar')?>
    <?= $this->include('template_user/banner')?>
    <section class="blog-area section-gap" id="blog">
			<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Cek Menu disini!</h1>
								<p><bold>Kami menyediakan berbagai makanan,minuman,hingga makanan penutup berkualitas dengan harga terjangkau!</bold></p>
							</div>
						</div>
					</div>
                    <section class="home-about-area section-gap">
				<div class="container">
					<div class="card">
						<div class="row">
						<div class="card col-md-4">
							<img src="<?= base_url('/upload/'.$menu['gambar'])?>" class="card-img-top ml-10 mt-20 mb-20" style="height: 180px; width: 20rem;">	
						</div>
						<div class="col-md-8">
							<table class="table">
								<tr>
									<td>Nama</td>
									<td><strong><?= $menu['menu'] ?></strong></td>
								</tr>
								<tr>
									<td>Harga</td>
									<td><strong><div class="btn btn-sm btn-success">Rp.<?= number_format( $menu['harga'])?></div></strong></td>
								</tr>
							</table>
								<a href="<?= base_url('detail')?>" class="btn btn-success btn-md ml-10 mt-50"><i class="fa fa-plus"></i> Keranjang</a>
								<a href="<?= base_url('Home')?>" class="btn btn-primary btn-md mr-20 mt-50">kembali</a>
						</div>
					</div>
				</div>
				</div>	
			</section>
				</div>	
			</div>
            </section>
            
    <?= $this->include('template_user/footer')?>
</html>

