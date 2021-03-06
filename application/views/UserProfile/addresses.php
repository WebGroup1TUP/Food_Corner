	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/UserProfile/user.css'); ?>" />
	 <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<div class="banner">
			<div class="side">
				<ul class="sidemenu">
					<li><a href="<?php echo site_url('/ProfileView/');?>">My Account</a>
							<ul>
								<li><a href="<?php echo site_url('/ProfileView/bankcards');?>">Bank & Cards</a></li>
								<li><a href="<?php echo site_url('/ProfileView/addresses');?>">Addresses</a></li>
								<li><a href="<?php echo site_url('/ProfileView/changepw');?>">Change Password</a></li>
							</ul>
					</li>
					<li><a href="<?php echo site_url('/ProfileView/mypurchase');?>">My Purchase</a></li>
				</ul>
			</div>

			<div class="down-content">
				<h2>My Addresses</h2>
				<div class="content">
				<div class="textalign">
					<div class="textalign">
						<?php if(empty($addresses)):?>
							<h4>NO ADDRESS YET</h4>
						<?php else:?>
							<?php //Table for Orders?>
							<table class="table-info">
								<tr>
									<td><h4>Addresses</h4></td>
								</tr>
								<?php foreach ($addresses as $address): ?>
									<tr>
										<td>|<?php echo $address['address']?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						<?php endif;?>
					</div>
				</div>
			</div>
			</div>
	</div>
