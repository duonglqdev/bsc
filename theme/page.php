<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsc
 */

get_header();
?>

<main>
	<div class="container">
		<div class="my-20">
			<div class="font-Helvetica content_prose prose-ul:pl-7 prose-ol:pl-7 prose-ul:mb-3 prose-ul:mt-2 prose-ol:mb-2 prose-table:my-5 prose-table:border-collapse prose-table:border prose-table:border-slate-300  prose-table:th:border prose-th:border-slate-300 prose-td:p-3 prose-td:border prose-td:border-slate-300 prose-p:mb-2">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
