		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="<?= base_url()?>index.html"><img style="width : 120px;" src="<?= base_url()?>/file/img/logo1.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu ml-auto mr-auto">
				          <li><a href="<?= base_url('Home')?>">Home</a></li>
				          <li><a href="<?= base_url('Food')?>">Food</a></li>
				          <li><a href="<?= base_url('drink')?>">Drink</a></li>
				          <li><a href="<?= base_url('dessert')?>">Dessert</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			<?= $this->renderSection('navbar') ?>
			