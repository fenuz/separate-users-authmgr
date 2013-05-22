<?php

/*
Plugin Name: Separate Users Authmgr Integration
Plugin URI: 
Description: Allow administrators as defined by the Authmgr plugin to see all keywords 
Version: 1.0
Author: Frank Matheron <frankmatheron@gmail.com>
Author URI: http://github.com/fenuz 
*/

yourls_add_filter('separate_users_is_admin_user_filter', 'separate_users_authmgr_is_admin_filter');
function separate_users_authmgr_is_admin_filter($is_admin, $user) {
    return authmgr_user_has_role( $user, AuthmgrRoles::Administrator );
}

