<?php

function show_posts_nav() {
   global $wp_query;
   return ($wp_query->max_num_pages > 1);
}
