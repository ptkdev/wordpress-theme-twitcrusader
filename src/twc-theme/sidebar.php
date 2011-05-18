<?php
/*
 *	TwitCrusader - Wordpress Theme
 *		Copyright (C) 2011  PTKDev
 *
 *		This program is free software: you can redistribute it and/or modify
 *		it under the terms of the GNU General Public License as published by
 *		the Free Software Foundation, either version 3 of the License, or
 *		(at your option) any later version.
 *
 *		This program is distributed in the hope that it will be useful,
 *		but WITHOUT ANY WARRANTY; without even the implied warranty of
 *		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *		GNU General Public License for more details.
 *
 *		You should have received a copy of the GNU General Public License
 *		along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *		Author: Patryk Rzucidlo (PTKDev)
 *		Twitter: @ptkdev
 *		WebSite: http://www.ptkdev.it/
 * 		IRC: chat.freenode.net at #ptkdev
 */
?>

<div id="container">
	<div id="sidebar">
			<div id="spacecontent"></div>
			<div class="boxmenu"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/download">DOWNLOAD</a></div>
			<div class="boxmenu"><a href="https://github.com/PTKDev/TwitCrusader/">GITHUB</a></div>
			<div class="boxmenu"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/changelog/">CHANGELOG</a></div>
			<div class="boxmenu"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/features/">FEATURES</a></div>
			<div class="boxmenu"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">HOME</a></div>
			<div id="title">TwitCrusader</div>
			<div id="subtitle">&nbsp;Un Ottimo Client Twitter Per Linux</div>				
			<div id="spacecontent"></div>
			<div id="contentpost">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
					<div id="spacepost"></div>
					<div class="content-style"><?php the_content(); ?></div>
					<div id="spacepost"></div><div id="spacepost"></div>
				<?php endwhile; else: endif; ?>	
			</div>	
		<table class="width">
			<tr>
				<td class="clear_center">
					<?php if(!is_single()) { ?>
						<div class="switch_page"><?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> </div><br />
					<?php }?>
				</td>
			</tr>
		</table> 
	</div>

