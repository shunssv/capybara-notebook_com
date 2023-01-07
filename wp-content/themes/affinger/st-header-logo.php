<?php
$site_name = st_header_sitetitle();
$site_logo = st_header_logo();

if( ! st_header_catchphrase() ): ?>
	<!-- ロゴ又はブログ名 -->
    <?php if( $site_name ): ?>
		<?php if ( is_front_page() ): ?>
 				<h1 class="sitename sitename-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( $site_logo ): ?>
                    <img class="sitename-only-img" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
                <?php else: ?>
                    <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
                <?php endif; ?>
            </a></h1>
		<?php else: ?>
			<p class="sitename sitename-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( $site_logo ): ?>
                    <img class="sitename-only-img" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
                <?php else: ?>
                    <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
                <?php endif; ?>
            </a></p>
        <?php endif; ?>
    <?php endif; ?>

<?php else: ?>

    <?php if( trim($GLOBALS['stdata127']) !== '' ): ?>

		<?php if( trim($GLOBALS['stdata209']) === '' ): ?>

			<!-- ロゴ又はブログ名 -->
			<?php if( $site_name ): ?>

				<p class="sitename sitenametop"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  						<?php if ( $site_logo ): ?>
						<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
   						<?php else: ?>
                  		  <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
               		<?php endif; ?>
           		 </a></p>

   				<?php endif; ?>
      		<!-- ロゴ又はブログ名ここまで -->

       		<!-- キャプション -->
       		<?php if ( is_front_page() ): ?>
				<h1 class="descr">
					<?php bloginfo( 'description' ); ?>
				</h1>
       		 <?php else: ?>
				<p class="descr">
					<?php bloginfo( 'description' ); ?>
				</p>
			<?php endif; ?>

		<?php else: ?>

			<!-- ロゴ又はブログ名 -->
			<?php if( $site_name ): ?>

				<?php if ( is_front_page() ): ?>
					<h1 class="sitename sitenametop"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if ( $site_logo ): ?>
 								<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
						<?php else: ?>
							<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
  							<?php endif; ?>
           			 </a></h1>
       			<?php else: ?>
					<p class="sitename sitenametop"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if ( $site_logo ): ?>
							<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
               			<?php else: ?>
                			<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
               			<?php endif; ?>
					</a></p>
				<?php endif; ?>

			<?php endif; ?>
       		<!-- ロゴ又はブログ名ここまで -->

       		<!-- キャプション -->
			<p class="descr">
				<?php bloginfo( 'description' ); ?>
			</p>
		<?php endif; ?>

	<?php else: ?>

		<?php if(trim($GLOBALS['stdata209']) === ''): ?>

			<!-- キャプション -->
			<?php if( $site_name ): ?>

				<?php if ( is_front_page() ): ?>
					<h1 class="descr sitenametop">
         		       	<?php bloginfo( 'description' ); ?>
         		   	</h1>
				<?php else: ?>
          		 	 <p class="descr sitenametop">
           		     	<?php bloginfo( 'description' ); ?>
           			 </p>
				<?php endif; ?>

			<?php else: ?>

      			<?php if ( is_front_page() ): ?>
          		 	 <h1 class="descr">
         		       	<?php bloginfo( 'description' ); ?>
         		   	</h1>
     		  	 <?php else: ?>
          		 	 <p class="descr">
           		     	<?php bloginfo( 'description' ); ?>
           			 </p>
       			 <?php endif; ?>

        	<?php endif; ?>

			<!-- ロゴ又はブログ名 -->
			<?php if( $site_name ): ?>
          		  <p class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              		  <?php if ( $site_logo ): ?>
                  		  <img class="sitename-bottom" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
               		 <?php else: ?>
                		    <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
               		 <?php endif; ?>
          		  </a></p>
        	<?php endif; ?>
			<!-- ロゴ又はブログ名ここまで -->

		<?php else: ?>

 				<!-- キャプション -->
         	<p class="descr sitenametop">
				<?php bloginfo( 'description' ); ?>
  				</p>

 				<!-- ロゴ又はブログ名 -->
			<?php if( $site_name ): ?>

       		 	<?php if ( is_front_page() ): ?>
					<h1 class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if ( $site_logo ): ?>
							<img class="sitename-bottom" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
						<?php else: ?>
							<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
						<?php endif; ?>
					</a></h1>
       			<?php else: ?>
					<p class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if ( $site_logo ): ?>
							<img class="sitename-bottom" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $site_logo ); ?>" >
						<?php else: ?>
							<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
						<?php endif; ?>
					</a></p>
       			<?php endif; ?>

			<?php endif; ?>
			<!-- ロゴ又はブログ名ここまで -->

		<?php endif; ?>

	<?php endif; ?>

<?php endif;
