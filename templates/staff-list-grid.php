<div class="staff-grid">
	<?php if($staff_loop->have_posts()): while($staff_loop->have_posts()): $staff_loop->the_post(); ?>
		<?php
			extract ( cd_get_staff_metadata(get_the_ID(), $options) );
		?>	
		<div class="staff-member">		
			<div class="staff-member-wrap">
				<?php if ( has_post_thumbnail() ): ?>
					<div class="staff-photo"><?php the_post_thumbnail('thumbnail'); ?></div>
				<?php endif; ?>				
				<div class="staff-member-overlay">
					<h3 class="staff-member-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php if ($my_title): ?><p class="staff-member-title"><?php echo $my_title ?></p><?php endif; ?>				
				</div>			
			</div>
		</div>
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</div>