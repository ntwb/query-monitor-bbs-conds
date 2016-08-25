<?php
/*
Plugin Name: Query Monitor bbPress & BuddyPress Conditionals
Description: Add bbPress and BuddyPress Conditionals to John Blackbourn's awesome Query Monitor
Version: 1.0
Plugin URI: https://github.com/ntwb/query-monitor-bbs-conds
Author: Stephen Edgar
Author URI: http://netweb.com.au
Contributors: netweb
Tags: bbPress, BuddyPress, query monitor, debug, debugging, development, developer
Requires at least: 3.8.1
Tested up to: 3.8.1
Stable tag: 1.0.0

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2014 Stephen Edgar

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	*/

function isbbs_conds_query_monitor( $conds ) {
	return array_merge( $conds, array(

		// bbPress Conditionals @link http://codex.bbpress.org/bbpress-conditional-tags/
		'is_bbpress',
		'bbp_is_favorites',
		'bbp_is_forum_archive',
		'bbp_is_replies_created',
		'bbp_is_reply_edit',
		'bbp_is_reply_move',
		'bbp_is_search',
		'bbp_is_search_results',
		'bbp_is_single_forum',
		'bbp_is_single_reply',
		'bbp_is_single_topic',
		'bbp_is_single_user',
		'bbp_is_single_user_edit',
		'bbp_is_single_view',
		'bbp_is_subscriptions',
		'bbp_is_topic_archive',
		'bbp_is_topic_edit',
		'bbp_is_topic_merge',
		'bbp_is_topic_split',
		'bbp_is_topic_tag',
		'bbp_is_topic_tag_edit',
		'bbp_is_topics_created',
		'bbp_is_user_home',
		'bbp_is_user_home_edit',

		// BuddyPress Conditionals @link http://codex.buddypress.org/
		'is_buddypress',
		'bp_is_activation_page',
		'bp_is_activity_component',
		'bp_is_activity_directory',
		'bp_is_blog_page',
		'bp_is_blogs_component',
		'bp_is_blogs_directory',
		'bp_is_create_blog',
		'bp_is_directory',
		'bp_is_forums_component',
		'bp_is_friends_component',
		'bp_is_group',
		'bp_is_group_activity',
		'bp_is_group_admin_page',
		'bp_is_group_create',
		'bp_is_group_forum',
		'bp_is_group_forum_topic',
		'bp_is_group_forum_topic_edit',
		'bp_is_group_home',
		'bp_is_group_invites',
		'bp_is_group_leave',
		'bp_is_group_members',
		'bp_is_group_membership_request',
		'bp_is_group_single',
		'bp_is_groups_component',
		'bp_is_members_component',
		'bp_is_members_directory',
		'bp_is_messages_component',
		'bp_is_messages_compose_screen',
		'bp_is_messages_conversation',
		'bp_is_messages_inbox',
		'bp_is_messages_sentbox',
		'bp_is_my_profile',
		'bp_is_notices',
		'bp_is_notifications_component',
		'bp_is_profile_component',
		'bp_is_register_page',
		'bp_is_settings_component',
		'bp_is_single_activity',
		'bp_is_single_item',
		'bp_is_user',
		'bp_is_user_activity',
		'bp_is_user_blogs',
		'bp_is_user_change_avatar',
		'bp_is_user_forums',
		'bp_is_user_forums_started',
		'bp_is_user_forums_replied_to',
		'bp_is_user_friend_requests',
		'bp_is_user_friends',
		'bp_is_user_friends_activity',
		'bp_is_user_groups',
		'bp_is_user_groups_activity',
		'bp_is_user_messages',
		'bp_is_user_notifications',
		'bp_is_user_profile',
		'bp_is_user_profile_edit',
		'bp_is_user_recent_commments',
		'bp_is_user_recent_posts',
		'bp_is_user_settings',
		'bp_is_user_settings_account_delete',
		'bp_is_user_settings_general',
		'bp_is_user_settings_notifications'
	) );
}
add_filter( 'query_monitor_conditionals', 'isbbs_conds_query_monitor' );
