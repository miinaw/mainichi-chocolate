<div class="logo pc">
	<a href="<?php echo home_url() ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo_pc.png" alt="mainichi-chocolate" width="" height="60" class="c-header logo">
	</a>
</div>
<div class="logo sp">
	<a href="<?php echo home_url() ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo_sp.png" alt="mainichi-chocolate" width="" height="60" class="c-header logo">
	</a>
</div>
<div class="menu">
<ul class="category">
<?php wp_list_categories('title_li=&exclude=1'); ?>
</ul>
</div>
<div class="search">
<?php get_search_form(); ?>
</div>