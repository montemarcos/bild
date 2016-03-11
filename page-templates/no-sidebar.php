<?php
/**
 *	Template name: Pocetna
 *
 *	The template for displaying Custom Page Template: No Sidebar.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php get_header(); ?>
<section class="rezervacija">
			
				
                <div class="container">

					<div class="reservation-form">
						<form action="#" method="post" >

							<div class="col-md-3 kolonaforme" style="padding:0">
								<div class="form-group">
									
									<div class="form-group">
										<div class="input-group date" id="datetimepicker1" >
											<input type="text" class="form-control"  value="Pronađi instituciju" />
											<span class="input-group-addon">
                    	<span class="fa fa-search"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 kolonaforme" style="padding:0">
								<div class="form-group">
									
									<select id="room_type" name="room_type" class="form-control" style="border-radius: 0; border-style:solid;     border-color: #ddd; border-width: 0px 1px 0px 0;">
										<option value="">Kategorija institucije</option>
<option value="">01</option>
										<option value="">02</option>

									</select>
								</div>
							</div>													



							<div class="col-md-3 kolonaforme" style="padding:0">
								<div class="form-group">
									
									<select id="room_type" name="room_type" class="form-control" style="border-radius: 0;">
										<option value="">Odaberi godinu</option>
<option value="">01</option>
										<option value="">02</option>

									</select>
								</div>
							</div>
                           

							<div class="col-md-2 dugme" style="padding:0;">
								<div class="form-group">
									<button class="btn btn-primary formular">Search</button>
								</div>
							</div>
	<div class="col-md-2 logotip" >
								
								<div class="logoover">	</div>
			
							</div>
	
						</form>
					</div>

				</div>
             
          

		</section>



<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section id="blog" class="pocetna">
				<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile;
				endif;
				?>
			</section><!--/#blog-->
		</div><!--/.col-sm-12-->
	</div><!--/.row-->
    
    
    
    
    
    
</div><!--/.container-->




<section class="middle">
			<div class="container">
				
				
				
			  <div class="col-md-4 pocetna-kolona baza">
				<h2 class="prvinaslov">Nešto o <span style="font-weight: bold; color:#33479c">bazi</span></h2>
				  <p class="uvodna1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <img class="prvafoto" src="wp-content/themes/bild/layout/images/fotka_1.png" width="314" height="153" alt=""/>
				</div>

					
					<div class="col-md-4 pocetna-kolona kontakt">
						<h2 class="srednjinaslov">Kontaktirajte <span class="srednjinaslov2" style="font-weight: bold; color:#33479c">nas</span></h2>
						<p class="uvodna2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                         <img class="srednjafoto" src="wp-content/themes/bild/layout/images/fotka_2.png" width="314" height="153" alt=""/>
                        
					</div>
					
                   <div class="col-md-4 pocetna-kolona aktuelno">
						<h2 class="zadnjinaslov">Zadnje <span style="font-weight: bold; color:#33479c">aktuelnosti</span></h2>
						<div class="row p-b-20">
      <div class="col-md-4">
     
      <div class="strelica_box">
      <p style="color:#7bc8ef; font-size:26px; font-weight: 900; line-height:26px;">25</p>
      <p style="color:#7bc8ef; font-size:16px; font-weight:bold; line-height:11px;">9.2014.</p>
      </div>
      </div>
      <div class="col-md-8 bezpaddinga">
      <div >
      <span style="color:#33479c; font-weight:bold; font-size:16px; line-height:16px;">  I civilno društvo odlučuje! 
Moraš znati da se ti pitaš i sam odlučuješ !
      </div>
      </div>
     
                        
					</div>
                    <div class="row p-b-20">
      <div class="col-md-4">
     
      <div class="strelica_box">
      <p style="color:#7bc8ef; font-size:26px; font-weight: 900; line-height:26px;">25</p>
      <p style="color:#7bc8ef; font-size:16px; font-weight:bold; line-height:11px;">9.2014.</p>
      </div>
      </div>
      <div class="col-md-8 bezpaddinga">
      <div >
      <span style="color:#33479c; font-weight:bold; font-size:16px; line-height:16px;">  I civilno društvo odlučuje! 
Moraš znati da se ti pitaš i sam odlučuješ !
      </div>
      </div>
      				 
    
                        
					</div>
                   <button type="button" class="btn btn-primary btn-lg btn-block btn-pocetna">Pogledaj sve aktuelnosti<i class="fa fa-chevron-right fa-fw" style="vertical-align:right;"></i></button>
				
			</div>
		</section>
<?php get_footer(); ?>