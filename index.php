<?php
/**
    * @package WordPress 
    * @subpackage OpenShine Theme 
    * @copyright (C) OpenShine SL 
    * @license GNU General Public License 3, see license.txt
    */

get_header(); ?>

	<div id="mainContent" class="grid8 f-l"> 
		<h2 class="pageTitle">NEWS</h2> 
		<?php
                        /* Run the loop to output the posts.
                         * If you want to overload this in a child theme then include a file
                         * called loop-index.php and that will be used instead.
                         */
                         get_template_part( 'loop', 'index' );
		?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
