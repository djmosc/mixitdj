<?php $id = (isset($id)) ? $id : $post->ID; ?>
<?php $i = 0; ?>
<?php if(get_field('content', $id)): ?>
<?php while (has_sub_field('content', $id)) : ?>
<?php
	$layout = get_row_layout();
	switch($layout){

		case 'row':	
			if(get_sub_field('column')):
?>
			<div class="row" style="<?php the_sub_field('css'); ?>">
				<?php if(is_front_page()): ?><div class="container"><?php endif; ?>
					<div class="inner clearfix">
					<?php if(get_sub_field('title')): ?>
					<header class="row-header">
						<h4 class="text-center"><?php the_sub_field('title'); ?></h4>
					</header>
					<?php endif; ?>
					<?php $total_columns = count( get_sub_field('column', $id)); ?>
					<?php while (has_sub_field('column', $id)) : ?>
						<?php
						switch($total_columns){
							case 2:
								$class = 'five';
								break;
							case 3:
								$class = 'one-third';
								break;
							case 4:
								$class = 'one-fourth';
								break;
							case 5:
								$class = 'one-fifth';
								break;
							case 1:
							default:
								$class = 'ten';
								break;
						} ?>
						<div class="break-on-mobile span <?php echo $class; ?>" style="<?php the_sub_field('css'); ?>">
							<?php the_sub_field('content'); ?>
						</div>
					<?php endwhile; ?>
					</div>
					<hr />
				<?php if(is_front_page()): ?></div><?php endif; ?>
			</div>
			<?php endif; ?>
			<?php break; ?>
		<?php case 'scroller':  ?>
			<?php if ( get_sub_field('images')) :?>
			<?php if(is_front_page()): ?><div class="container"><?php endif; ?>
				<div class="scroller" data-auto-scroll="true" >
					<div class="inner">
						<div class="scroller-mask">
							<?php $i = 0; ?>
							<?php $images = get_sub_field('images'); ?>
							<?php foreach ($images as $image) : ?>
							<div class="scroll-item <?php if($i == 0) echo 'current'; ?>" data-id="<?php echo $i;?>">
								<img src="<?php echo $image['sizes']['slide']; ?>" class="scale">
							</div>
							<?php $i++; ?>
							<?php endforeach; ?>
						</div>
						<!--div class="scroller-navigation">
							<a class="prev-btn"></a>
							<a class="next-btn"></a>
						</div-->
					</div>
				</div><!-- #homepage-scroller -->
			<?php if(is_front_page()): ?></div><?php endif; ?>
			<?php endif; ?>

			<?php break; ?>

	<?php } ?>

<?php $i++; ?>
<?php endwhile; ?>
<?php endif; ?>