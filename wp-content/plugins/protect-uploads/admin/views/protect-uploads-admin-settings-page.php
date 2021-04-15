<div class="wrap <?php echo $this->plugin_name ?>">
	<?php
	$plugin = new Alti_ProtectUploads_Admin($this->plugin_name, $this->version);
	if (isset($_POST['submit']) && isset($_POST['protection']) && check_admin_referer('submit_form', 'protect-uploads' . '_nonce')) {
		$plugin->save_form($_POST);
	}
	echo $plugin->display_messages();
	?>
	<h1>Protect Uploads</h1>
	<div class="protect-uploads-main-container">
		<form method="POST" enctype="multipart/form-data">
			<?php wp_nonce_field('submit_form', 'protect-uploads' . '_nonce'); ?>

			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for=""><?php _e('Status', $this->plugin_name); ?></label>
						</th>
						<td>
							<fieldset>
								<p>
									<strong>
										<?php if ($this->check_uploads_is_protected() === true) { ?>
											<span class="dashicons dashicons-yes-alt" style="color:#46b450"></span> <?php _e('Uploads directory is protected.', $this->plugin_name); ?>
										<?php } else { ?>
											<span style="color:#dc3232" class="dashicons dashicons-dismiss"></span> <?php _e('Uploads directory is not protected!', $this->plugin_name); ?>
										<?php } ?>
									</strong>
								</p>
								<p>
									<?php
									$file_messages = $this->get_uploads_protection_message_array();
									foreach ($file_messages as $file_message) {
									?>
										<?php echo $file_message; ?> <br />
									<?php
									}	?>
								</p>
							</fieldset>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="size"><?php _e('Protection', $this->plugin_name); ?></label>
						</th>
						<td>
							<fieldset>
								<legend class="screen-reader-text">
									<span><?php _e('Protection', $this->plugin_name); ?></span>
								</legend>
								<?php if ($this->check_uploads_is_protected() === false) { ?>
									<!--  -->
									<label for="protection_1">
										<input type="radio" value="index_php" name="protection" id="protection_1">
										<strong><?php _e('Protect with index.php files', $this->plugin_name); ?></strong>
										<p class="description"><?php _e('Create an index.php file on the root of your uploads directory and subfolders (two levels max).', $this->plugin_name); ?></p>
									</label><br />
									<!--  -->
									<label for="protection_2">
										<input type="radio" value="htaccess" name="protection" id="protection_2">
										<strong><?php _e('Protect with .htaccess file', $this->plugin_name); ?></strong>
										<p class="description"><?php _e('Create .htaccess file at root level of uploads directory and returns 403 code (Forbidden Access).', $this->plugin_name); ?></p>
									</label><br />
								<?php } ?>
								<!--  -->
								<?php if ( $this->check_protective_file_removable() && $this->check_uploads_is_protected() ) { ?>
									<label for="protection_3">
										<input type="radio" value="remove" name="protection" id="protection_3">
										<strong><?php _e('Remove protection files', $this->plugin_name); ?></strong>
										<p>
											<?php if ($this->check_protective_file('index.php') === true) {
												echo '<span class="dashicons dashicons-flag"></span> index.php ';
												_e('will be removed', $this->plugin_name);
											} ?>
											<?php if ($this->check_protective_file('.htaccess') === true) {
												echo '<span class="dashicons dashicons-flag"></span> .htaccess ';
												_e('will be removed', $this->plugin_name);
											} ?>
										</p>
									</label><br />
								<?php } ?>
								<?php if ($this->check_protective_file('index.html') === true) { ?>
									<p class="description">
										<span class="dashicons dashicons-search"></span> <?php _e('A index.html file is already here and has not been created by this plugin. It will not be removed. If you want to use this plugin, you first have to remove manually the index.html file.', $this->plugin_name) ?>
									</p>
								<?php } ?>
							</fieldset>

						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for=""><?php _e('Check', $this->plugin_name); ?></label>
						</th>
						<td>
							<p><?php _e('Visit your', $this->plugin_name); ?> <a href="<?php echo $this->get_uploads_url(); ?>" target="_blank"><strong><?php _e('uploads directory', $this->plugin_name); ?></strong><span style="text-decoration:none;" class="dashicons dashicons-external"></span></a> <?php _e('to check the current protection', $this->plugin_name); ?>.</p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for=""><?php _e('Support', $this->plugin_name); ?></label>
						</th>
						<td>
							<p><?php _e('Protect Uploads Plugin <a href="https://www.alticreation.com/en/protect-uploads/" target="_blank">support page</a>.', $this->plugin_name); ?></p>
							<p><?php _e('This plugin is compatible with the <span class="dashicons dashicons-awards"></span> <a href="https://www.alticreation.com/en/alti-watermark/" target="_blank">Watermark Plugin</a>.', $this->plugin_name); ?></p>
							<p class="description"><?php _e('To do so, you have to: 1. Install the Watermark Plugin 2. Then choose your settings in this page and Update.', $this->plugin_name); ?></p>
						</td>
					</tr>
					<tr>
						<th scope="row">
						</th>
						<td>
							<input type="submit" id="submit" value="<?php _e('Update', $this->plugin_name); ?>" name="submit" class="button button-primary">
						</td>
					</tr>
				</tbody>
			</table>

		</form>

	</div>

	<?php require_once dirname(__FILE__) . '/includes/protect-uploads-admin-sidebar.php'; ?>

</div>