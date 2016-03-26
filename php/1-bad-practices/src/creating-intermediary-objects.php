<?php # -*- coding: utf-8 -*-

function render_post_title_with_id( $post_id ) {

	$post = get_post( $post_id );
	if ( $post ) {
		echo $post->post_title . '(' . $post_id . ')';
	}
}
