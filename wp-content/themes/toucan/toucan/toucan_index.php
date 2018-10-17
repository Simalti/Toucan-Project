<?php
/*
Template Name: Toucan
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	
		<h1><?php echo get_post_meta( get_the_ID(), 'Title', true ); ?></h1>


		<?php
			$release = get_post_meta( get_the_ID(), 'Date', true );
			$datetime1 = new DateTime();
			$datetime2 = new DateTime($release);
			$diff = date_diff($datetime1, $datetime2);
			$diffBase = $diff->format('%a - %H:%M:%S');	
		?>

		<table>
			<tr>
				<td><?php echo $diff->format('%a'); ?></td>
				<td><?php echo $diff->format('%H'); ?></td>
				<td><?php echo $diff->format('%M'); ?></td>
				<td><?php echo $diff->format('%S'); ?></td>
			</tr>
			<tr>
				<td class="tdText">DAYS</td>
				<td class="tdText">HOURS</td>
				<td class="tdText">MINUTES</td>
				<td class="tdText">SECONDS</td>
			</tr>
		</table>

		<p><?php echo get_post_meta( get_the_ID(), 'Texte', true ); ?></p>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		 NOTIFY ME
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form" method="POST">
				<input type="email" placeholder="Write your email here">
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary save">Save changes</button>
			</div>
			</div>
		</div>
		</div>
		
		<a href="#" class="aboutus">ABOUT US</a>
		<p>Template Handcrafted by <a target="_blank" rel="noopener noreferrer" href="http://codincamp.fr/">Codi n Camp</a></p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
