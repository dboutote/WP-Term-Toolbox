<?php
/**
 * Edit form view
 * 
 * Displays the form field for editing terms.
 *
 * @package Advanced_Term_Fields
 * @subpackage Adv_Term_Fields_Icons\Views
 *
 * @since 0.1.0
 *
 */
?>

<tr class="form-field <?php echo esc_attr( $this->meta_key ); ?>-wrap">

	<th scope="row" valign="top">
		<label for="<?php echo esc_attr( $this->meta_key ); ?>">
			<?php esc_html_e( $this->labels['singular'] ); ?>
		</label>
	</th>

	<td>
		<?php
		$meta_value = $this->get_meta( $term->term_id );
		$icon = sprintf(
			'<i data-icon="%1$s" class="term-icon dashicons %1$s"></i>',
			esc_attr( $meta_value )
			);
		?>
		<div id="wp-tt-icon-meta-wrap" class="icon-meta-wrap">
			<div class="icon-utils">
				<div class="icon-img"><?php echo $icon;?></div>
				<input name="<?php echo esc_attr( $this->meta_key ); ?>" id="<?php echo esc_attr( $this->meta_key ); ?>" type="text" value="<?php echo esc_attr( $meta_value ); ?>" size="20" />
				<input type="button" data-target="#<?php echo esc_attr( $this->meta_key ); ?>" class="button dashicons-picker" value="<?php esc_html_e( 'Choose Icon', 'wp-term-toolbox' ); ?> " />
			</div>

			<?php if ( ! empty( $this->labels['description'] ) ) : ?>
				<p class="description"><?php esc_html_e( $this->labels['description'] ); ?></p>
			<?php endif; ?>
		</div>
	</td>
	
</tr>