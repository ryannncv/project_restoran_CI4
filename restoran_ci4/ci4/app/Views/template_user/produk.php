<!-- Start blog Area -->
<!-- Start blog Area -->
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
				<div class="row text-center mt-4">
					<?php foreach($menu as $key => $value): ?>
						<div class="card img-fluid ml-50 mb-5" style="width: 20rem;">
								<img src="<?= base_url('/upload/'. $value['gambar'].'')?>" class="card-img-top" style="height: 180px">
								<div class="card-body">
                                <h2 class="card-title mb-1"><?= $value['menu'] ?></h2>
									<span class="badge badge-pill badge-success mb-3">Rp.<?= number_format( $value['harga'])?></span><br>
									<a href="<?= base_url('detail')?>" class="btn btn-success btn-md text-uppercase mr-5"><i class="fa fa-plus"></i> Keranjang</a>
                                   <a href="<?= base_url('detail/index/'.$value['idmenu'])?>" class="btn btn-primary btn-md fa fa-eye "></a>
								</div>
							</div>
						<?php endforeach; ?>								
					</div>
				</div>	
			</div>
			</section>
		<?= $this->renderSection('content') ?>
		
         
    
               
               
               
             
           
            
			<!-- End blog Area -->	