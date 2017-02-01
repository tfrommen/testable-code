<?php # -*- coding: utf-8 -*-

function render_post_title_with_id( WP_Post $post ) {

	echo $post->post_title . '(' . $post->ID . ')';
}
