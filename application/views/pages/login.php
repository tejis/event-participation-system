		<?php 
            echo form_open('participant/login'); 
        ?>
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2 class="major" style="text-align: center;">Login</h2>
								<?php 
									   	if(!empty($error_msg)){
									        echo '<p style="color:palevioletred;">'.$error_msg.'</p>';
									    }
								?>
								<?php echo validation_errors('<p style="color:palevioletred;">','</p>'); ?>
								<div class="field">
									<label for="email">Email</label>
									<input type="email" name="username" id="email" placeholder="Alamat email" />
								</div>
								<div class="field">
									<label for="email">Password</label>
									<input type="Password" name="password" placeholder="*******" />
								</div>

								<ul class="actions">
									<li><input type="submit" value="LOGIN" /></li>
								</ul>
								<p><sub><a href="<?=base_url('participant/signup');?>">Lupa password</sub></a></p>
								<p><sub><a href="<?=base_url('participant/signup');?>">Belum punya akun?</sub></a></p>
								<?php echo form_close();?> 	
							</div>
						</header>
					</section>