<?php
/**
 * 1. determine your vendor name and plugin name.
 *
 * 2. Rename the PLUGIN_ID and the strings/dirs/files containing this name
 *
 * 3. Rename this file's namespace accordingly
 *
 * For work project's I usually use: "ufcoe_something" and UFCOE\Something as namespace.
 *
 * 4. Change or disable the page handler. 
 */

namespace Vendor\PluginName;

const PLUGIN_ID = 'vendor_pluginname';

function init() {
	elgg_register_page_handler('some-page', __NAMESPACE__ . '\\handle_pages');
	
	elgg_extend_view('css/elgg', 'css/' . PLUGIN_ID);
	elgg_extend_view('js/elgg', 'js/' . PLUGIN_ID . '/all_pages.js');
}

function handle_pages($url_segments) {
	// handle URL
	echo "Nothing to see here!";
}

elgg_register_event_handler('init', 'system', __NAMESPACE__ . '\\init');
