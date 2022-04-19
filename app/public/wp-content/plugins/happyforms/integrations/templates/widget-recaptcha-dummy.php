<form class="happyforms-service hf-ajax-submit">
	<div class="widget-content has-service-selection">
		<p>
			<label for="happyforms_integrations_spam_service"><?php _e( 'Service', 'happyforms' ); ?></label>
			<select id="happyforms_integrations_spam_service" class="widefat">
					<option>V2</option>
			</select>
		</p>

		<div id="happyforms-service-recaptcha" class="happyforms-service-integration">
			<div class="widget-content">
				<label for=""><?php _e( 'Site key', 'happyforms' ); ?></label>
				<div class="hf-pwd">
					<input type="password" class="widefat happyforms-credentials-input connected" id="" name="" value="" />
					<button type="button" class="button button-secondary hf-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php _e( 'Show credentials', 'happyforms' ); ?>" data-label-show="<?php _e( 'Show credentials', 'happyforms' ); ?>" data-label-hide="<?php _e( 'Hide credentials', 'happyforms' ); ?>">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
				<label for=""><?php _e( 'Secret key', 'happyforms' ); ?></label>
				<div class="hf-pwd">
					<input type="password" class="widefat happyforms-credentials-input connected" id="" name="" value="" />
					<button type="button" class="button button-secondary hf-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php _e( 'Show credentials', 'happyforms' ); ?>" data-label-show="<?php _e( 'Show credentials', 'happyforms' ); ?>" data-label-hide="<?php _e( 'Hide credentials', 'happyforms' ); ?>">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>

		<div class="widget-control-actions">
			<div class="alignleft">
				<span class="spinner"></span>
				<input type="submit" class="connected button button-primary widget-control-save right" value="<?php _e( 'Save Changes', 'happyforms' ); ?>">
			</div>
			<br class="clear" />
		</div>
	</div>
</form>

