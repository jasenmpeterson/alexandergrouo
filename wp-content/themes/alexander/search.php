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
                            <article class="box--shadow--all">
                                <a href="<?php the_permalink();?>">
                                    <div class="box">
                                        <h3>
	                                        <?php the_title();  ?>
                                        </h3>
                                        <section class="search--post--excerpt">
                                            <p><?php echo strip_tags(substr(get_the_excerpt(), 0,200)); ?></p>
                                        </section>
                                    </div>
                                </a>
                            </article>
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