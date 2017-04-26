<div class="navbar-fixed">
	<nav>
		<div class="container">
			<div class="nav-wrapper">
				<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
				<a href="/" class="brand-logo center"><img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Site logo"></a>
				<?php
				wp_nav_menu( array(
					'menu' => 'primary menu left',
					'theme_location'=>'primary-left',
					'menu_class' => 'left hide-on-med-and-down',
					'walker' => new wp_materialize_navwalker()
				));
				?>
				<?php
				wp_nav_menu( array(
					'menu' => 'primary menu right',
					'theme_location'=>'primary-right',
					'menu_class' => 'right hide-on-med-and-down',
					'walker' => new wp_materialize_navwalker()
				));

				$menu = [ // mobile side menu array
						'menu' => 'primary-mobile',
						'menu_class'     => 'side-nav',
						'menu_id'        => 'mobile-nav',
						'walker' => new wp_materialize_navwalker_mobile(),
				];
				wp_nav_menu( $menu ); // mobile side menu
				?>
			</div>
		</div>
	</nav>
</div>
