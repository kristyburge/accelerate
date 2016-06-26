<?php
/**
 * Templage Name: About Page Template
 *
 */

get_header(); ?>
<div class="about-hero">
    <div class="about-text site-content">
        <p><span class="accelerate">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
    </div>
</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			

            <div class="container">
                <div class="row">
                   <div class="intro">
                        <h4 class="about">Our Services</h4>
                        <p class="lead">We take pride in our clients and the content we create for them.</p>

                        <p class="lead">Here's a brief overview of our offered services.</p>
                    </div><!-- .intro --> 
                </div><!-- .row -->

                <div class="row">
                    <div class="col-sm-4">
                        <img class="alignnone wp-image-47355 size-full" src="http://localhost/accelerate/wp-content/uploads/2016/06/cs-arrow.png" alt="Content Strategy" width="221" height="218" />
                    </div><!-- .col-sm-4 -->
                    <div class="col-sm-8">
                        <div class="description">
                            <h2>Content Strategy</h2>
                            <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl fatback picanha turkey, ground round shankle salami brisket.</p>
                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->

                </div><!-- .row -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="description">
                            <h2>Influencer Mapping</h2>
                            <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl fatback picanha turkey, ground round shankle salami brisket.</p>

                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->
                    <div class="col-sm-4">
                        <img class="alignnone size-full wp-image-47357" src="http://localhost/accelerate/wp-content/uploads/2016/06/if-planet.png" alt="Influencer Mapping" width="221" height="221" />
                    </div><!-- .col-sm-4 -->

                </div><!-- .row -->

                <div class="row">
                    <div class="col-sm-4">
                        <img class="alignnone size-full wp-image-47358" src="http://localhost/accelerate/wp-content/uploads/2016/06/sms-like.png" alt="Social Media Strategy" width="221" height="221" />
                    </div><!-- .col-sm-4 -->
                    <div class="col-sm-8">
                        <div class="description">
                            <h2>Social Media Strategy</h2>
                            <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl fatback picanha turkey, ground round shankle salami brisket.</p>

                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->

                </div><!-- .row -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="description">
                            <h2>Design &amp; Development</h2>
                            <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl fatback picanha turkey, ground round shankle salami brisket.</p>

                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->
                    <div class="col-sm-4">
                        <img class="alignnone size-full wp-image-47356" src="http://localhost/accelerate/wp-content/uploads/2016/06/dd-wand.png" alt="Design and Development" width="221" height="221" />
                    </div><!-- .col-sm-4 -->
                </div><!-- .row -->
            </div><!-- .container -->

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->
  	
	<div class="call-to-action">
        <p>Interested in working with us?</p>
        <button type="button">Contact us</button>
    </div>


<?php get_footer(); ?>