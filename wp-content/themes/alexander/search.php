<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/11/17
 * Time: 9:37 AM
 */

get_header();
$pagination = new pagination_links();
?>
<section class="search--results">
	<div class="row">
		<div class="col-sm">
			<h1><?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>
			<?php if ( have_posts() ) { ?>

				<ul>

					<?php while ( have_posts() ) { the_post(); ?>

						<li>
							<h3>
								<a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a>
							</h3>
							<section class="search--post--excerpt">
								<p><?php echo substr(get_the_excerpt(), 0,200); ?></p>
								<a href="<?php the_permalink();?>" class="button--default">
									<span>Read More</span>
									<div class="line"></div>
								</a>
							</section>
						</li>

					<?php } ?>

				</ul>

				<?php echo $pagination->pagination() ?>

			<?php } else { echo '<h3>No search results found.</h3>'; }?>
		</div>
	</div>
</section>
<?php
get_footer();