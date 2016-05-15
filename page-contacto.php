<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package activello
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<main id="main" class="site-main" role="main">

						<h1 class="entry-header entry-title">Contácto</h1>
							<p>Si tienes alguna pregunta o sugerencia relacionada a mi contenido, o simplemente interés en contactar conmigo 
							puedes hacerlo a través del siguiente formulario.</p>

                                <div ng-controller="ContactController">
                                    <form ng-submit="submit(contactform)" name="contactform" method="post" action="" role="form">
                                        <div class="input-group wow fadeInLeftBig animated" ng-class="{ 'has-error': contactform.nombre.$invalid && submitted }">
                                            <input placeholder="Nombre" id="nombre" name="nombre" type="text" class="form-control" ng-model="formData.nombre" required>
                                        </div>

                                        <div class="input-group wow fadeInRightBig" ng-class="{ 'has-error': contactform.email.$invalid && submitted }">
                                            <input placeholder="Correo"  id="email" name="email" type="email" class="form-control" ng-model="formData.email" required>
                                        </div>

                                        <div class="input-group wow fadeInUpBig" ng-class="{ 'has-error': contactform.message.$invalid && submitted }">
                                            <textarea placeholder="Mensaje"  id="message" name="message" class="form-control" rows="5" style="resize: none;" ng-model="formData.message" required></textarea>
                                        </div>
                                        
                                        <button class="btn btn-bit" type="submit" ng-disabled="submitButtonDisabled"><i class="fa fa-send-o"> </i> Enviar</button>
                                    </form>
                                    <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                                </div>
                            

					</main><!-- #main -->
				</div>
			</div>
		</div>
	</div><!-- #primary -->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
	<script src="<?php echo get_bloginfo('template_directory');?>/app.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/controllers.js"></script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>