<?php
$label_link = ' (<a href="#" target="_blank">' . __( 'get your code', 'happyforms' ) . '</a>)';
?>
<form class="happyforms-service">
	<div class="widget-content">
		<div id="happyforms-service-aweber" class="happyforms-service-integration">
			<div class="widget-content">
				<div class="oauth-flow">
					<label for=""><?php echo __( 'Verification code', 'happyforms' ) . $label_link; ?></label>
					<div class="hf-pwd">
						<input type="password" class="widefat happyforms-credentials-input connected" id="" name="" value="" />
						<button type="button" class="button button-secondary hf-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php _e( 'Show credentials', 'happyforms' ); ?>" data-label-show="<?php _e( 'Show credentials', 'happyforms' ); ?>" data-label-hide="<?php _e( 'Hide credentials', 'happyforms' ); ?>">
							<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="widget-control-actions">
			<div class="alignleft">
				<input type="submit" class="connected button button-primary widget-control-save right" value="<?php _e( 'Save Changes', 'happyforms' ); ?>">
			</div>
			<br class="clear" />
		</div>
	</div>
</form>
