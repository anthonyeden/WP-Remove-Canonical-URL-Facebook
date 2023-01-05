<?php

/*
Plugin Name: Remove Yoast Canonical URL for Social
Plugin URI: https://mediarealm.com.au/
Description: Stops Yoast SEO from sending custom Canonical URLs to social media networks, such as the Facebook crawler
Version: 1.0.2
Author: Media Realm
Author URI: https://mediarealm.com.au/
*/

add_filter('wpseo_canonical', 'remove_canonical_facebook_crawler', 10, 1);
add_filter('wpseo_opengraph_url', 'remove_canonical_facebook_crawler', 10, 1);

function remove_canonical_facebook_crawler($canonical) {
    // Don't send a custom Canonical URL to the Facebook crawler

    if((strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false) && is_singular()) {
        // Find and return the original permalink canonical URL
        $obj       = get_queried_object();
        $canonical = get_permalink( $obj->ID );
        return $canonical;
    }

    return $canonical;
}
