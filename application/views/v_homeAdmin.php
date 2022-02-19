<title>ADMIN</title>
<!-- <style type="text/css">
	body {
		font-family: "times new roman";
	}
</style> -->
<div class="container my-5 py-5">
	<hr><hr><hr>
	<h3 style="text-align: center;">Hi, <?php echo $admin_name."!"; ?></h3>
	<p class="text-primary" style="text-align: justify;">
		&nbsp &nbsp &nbsp &nbsp <?php echo $history; ?> 
		<br>
		&nbsp &nbsp &nbsp &nbsp Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.
		<a class="text-secondary" href="#">Load more</a>
	</p>
	<hr>
	<h3 style="text-align: center;">Founder</h3>
		<?php 
			$i = 0;
			foreach ($list_owner->result() as $rowOwner) { 
				if ($i % 2 == 0) { ?>
					<div class="row my-md-5 my-lg-3">
						<div class="col-6">
							<?php echo "<img class='d-block w-75 shadow p-3 mb-5 rounded ml-5' src='".base_url().'assets/img/founder/'.$rowOwner->admin_picture."'>";?>
						</div>
						<div class="col-6">
							<table class="table mx-ld-5 mx-md-0">
								<tr class="table-light">
									<td>Name</td>
									<td>:</td>
									<td><?php echo ucwords($rowOwner->admin_name); ?></td>
								</tr>
								<tr class="table-light">
									<td>Email</td>
									<td>:</td>
									<td><?php echo strtolower($rowOwner->admin_email); ?></td>
								</tr>
								<tr class="table-light">
									<td>Motto</td>
									<td>:</td>
									<td style="font-style: italic;">"<?php echo $rowOwner->admin_motto; ?>"</td>
								</tr>
							</table>
							<div class="container row mx-md-1 px-5">
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_instagram; ?>">
										<button class="btn btn-content">
										<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbspInstagram
										</button>
									</a>
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_facebook; ?>">
										<button class="btn btn-content">
										<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook
										</button>
									</a>	
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_twitter; ?>">
										<button class="btn btn-content">
										<i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp&nbspTwitter
										</button>
									</a>	
								</div>
							</div>
						</div>
					</div>
		<?php
				} elseif($i % 2 == 1) { ?>
					<div class="row my-md-5 my-lg-3">
						<div class="col-6">
							<table class="table mx-ld-5 mx-md-0">
								<tr class="table-light">
									<td>Name</td>
									<td>:</td>
									<td><?php echo ucwords($rowOwner->admin_name); ?></td>
								</tr>
								<tr class="table-light">
									<td>Email</td>
									<td>:</td>
									<td><?php echo strtolower($rowOwner->admin_email); ?></td>
								</tr>
								<tr class="table-light">
									<td>Motto</td>
									<td>:</td>
									<td style="font-style: italic;">"<?php echo $rowOwner->admin_email; ?>"</td>
								</tr>
							</table>
							<div class="container row mx-md-1 px-5">
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_instagram; ?>">
										<button class="btn btn-content">
										<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbspInstagram
										</button>
									</a>
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_facebook; ?>">
										<button class="btn btn-content">
										<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook
										</button>
									</a>	
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_twitter; ?>">
										<button class="btn btn-content">
										<i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp&nbspTwitter
										</button>
									</a>	
								</div>
							</div>
						</div>
						<div class="col-6">
							<?php echo "<img class='d-block w-75 shadow p-3 mb-5 rounded ml-5' src='".base_url().'assets/img/founder/'.$rowOwner->admin_picture."'>";?>
						</div>
					</div>
		<?php
				}
			$i++;
			}
		?>
	<style type="text/css">
		button.btn-content{
			background-color: transparent;
			border: 1px solid #000;
			color: #777;
		}
		button.btn-content:hover{
			background-color: #F71C1C;
			border: 1px solid #F71C1C;
			color: #fff;
		}
	</style>	
</div>