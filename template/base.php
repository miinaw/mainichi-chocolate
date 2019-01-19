<!doctype html>
<html>
<head>
	<?php get_template_part('head'); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('template/layout/header'); ?>
<div class="o-container">
	<!-- <?php get_template_part('template/component/breadcrumb'); ?> -->
	<aside class="o-side">
		<!-- <?php get_template_part('template/common/nav'); ?> -->
	</aside>
	<main class="o-main">
		<!-- <?php include TemplateWrapper::get_template_path(); ?> -->
	</main>
</div>
<!-- <?php get_template_part('template/common/footer'); ?> -->
<script src="<?php echo get_template_directory_uri() .
    '/dist/main.js?' .
    get_theme_version(); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>
