<?php
/*
 *	TwitCrusader - Wordpress Theme
 *		Copyright (C) 2011  TwitCrusader Team
 *
 *  	This program is free software: you can redistribute it and/or modify
 *  	it under the terms of the GNU Affero General Public License as published by
 * 		the Free Software Foundation, either version 3 of the License, or
 *  	(at your option) any later version.
 *  	
 * 		This program is distributed in the hope that it will be useful,
 * 		but WITHOUT ANY WARRANTY; without even the implied warranty of
 * 		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * 		GNU Affero General Public License for more details.
 *  
 *  	You should have received a copy of the GNU Affero General Public License
 *  	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *		WebSite: http://www.twitcrusader.org/
 * 		Development Guidelines: http://dev.twitcrusader.org/
 *		Follow on Twitter: @teamtwc
 * 		IRC: chat.freenode.net at #teamtwc
 * 		E-mail: teamtwc@twitcrusader.org
 * 
 */
?>

		
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a class="post-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			<?php the_content(); ?>
		<?php endwhile; else: endif; ?>	
		
		<?php if(!is_single()) { ?>
			<?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> 
		<?php }?>
	</div>


