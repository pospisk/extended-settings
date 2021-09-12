# Extended Settings  
Contributors: [pospisk](https://github.com/pospisk/)  
Author: https://pospi.sk/  
Tags: settings, configuration  
Requires at least: 3.0.1  
Tested up to: 3.4  
Stable tag: 4.3  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

Advanced settings to improve your WordPress website. 

## Installation 
This section describes how to install the plugin and get it working. 

### Option A 
1. Upload `extended-settings.zip` file through the 'Plugins' menu in WordPress 
2. Activate the plugin through the 'Plugins' menu in WordPress 

### Option B 
1. Upload `extended-settings` directory to the `/wp-content/plugins/` directory 
2. Activate the plugin through the 'Plugins' menu in WordPress 

## Changelog 
### 0.0.2 
* init unit tests according to [WordPress Codex](https://make.wordpress.org/cli/handbook/misc/plugin-unit-tests/) using PHPUnit

### 0.0.1 
* init [WPPB](https://wppb.me/) boilerplate 
* fix version number and readme 

## Unit Testing

Unit testing was setup according to the [WordPress Codex](https://make.wordpress.org/cli/handbook/misc/plugin-unit-tests/) using PHPUnit

1. cd into plugins/extended-settings
2. `bash bin/install-wp-tests.sh wordpress_test root '' localhost latest`

*Note: git, svn, php, apache and wp-cli required!*