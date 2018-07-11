<?php 


$options['db_type'] = 'mysqli';
$options['db_host'] = 'sp-data-2.nhm.ac.uk';
$options['db_port'] = '3306';
$options['db_passwd'] = '4Wetauumkm';
$options['db_name'] = 'statsscratchpads';
$options['db_user'] = 'statsscratchpads';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.37',
      'description' => 'This platform is running Drupal 6.37',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => './profiles/standard/standard.profile',
      'info' => 
      array (
        'name' => 'Drupal',
        'description' => 'Select this profile to enable some basic Drupal functionality and the standard theme.',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '6.37',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => false,
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.37',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'blog' => 
    array (
      'filename' => false,
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'blogapi' => 
    array (
      'filename' => false,
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'book' => 
    array (
      'filename' => false,
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.37',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'comment' => 
    array (
      'filename' => false,
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'contact' => 
    array (
      'filename' => false,
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'dblog' => 
    array (
      'filename' => false,
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.37',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'forum' => 
    array (
      'filename' => false,
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'help' => 
    array (
      'filename' => false,
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'locale' => 
    array (
      'filename' => false,
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'menu' => 
    array (
      'filename' => false,
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.37',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.37',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'path' => 
    array (
      'filename' => false,
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ping' => 
    array (
      'filename' => false,
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'poll' => 
    array (
      'filename' => false,
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'profile' => 
    array (
      'filename' => false,
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'search' => 
    array (
      'filename' => false,
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'statistics' => 
    array (
      'filename' => false,
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'syslog' => 
    array (
      'filename' => false,
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.37',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'taxonomy' => 
    array (
      'filename' => false,
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'throttle' => 
    array (
      'filename' => false,
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tracker' => 
    array (
      'filename' => false,
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'translation' => 
    array (
      'filename' => false,
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'trigger' => 
    array (
      'filename' => false,
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.37',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'upload' => 
    array (
      'filename' => false,
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.37',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'advanced_help' => 
    array (
      'filename' => false,
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'help_example' => 
    array (
      'filename' => false,
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ahah_action' => 
    array (
      'filename' => false,
      'name' => 'ahah_action',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_load_example' => 
    array (
      'filename' => false,
      'name' => 'ajax_load_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_load' => 
    array (
      'filename' => false,
      'name' => 'ajax_load',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_ui' => 
    array (
      'filename' => false,
      'name' => 'ajax_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax' => 
    array (
      'filename' => false,
      'name' => 'ajax',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_captcha' => 
    array (
      'filename' => false,
      'name' => 'ajax_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_comment' => 
    array (
      'filename' => false,
      'name' => 'ajax_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_disable_redirect' => 
    array (
      'filename' => false,
      'name' => 'ajax_disable_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_fckeditor' => 
    array (
      'filename' => false,
      'name' => 'ajax_fckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_logintoboggan' => 
    array (
      'filename' => false,
      'name' => 'ajax_logintoboggan',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_quicktabs' => 
    array (
      'filename' => false,
      'name' => 'ajax_quicktabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_scroller' => 
    array (
      'filename' => false,
      'name' => 'ajax_scroller',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_thickbox' => 
    array (
      'filename' => false,
      'name' => 'ajax_thickbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_tinymce' => 
    array (
      'filename' => false,
      'name' => 'ajax_tinymce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_webform' => 
    array (
      'filename' => false,
      'name' => 'ajax_webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ajax_wysiwyg' => 
    array (
      'filename' => false,
      'name' => 'ajax_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'apachesolr_multisitesearch' => 
    array (
      'filename' => false,
      'name' => 'apachesolr_multisitesearch',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'apachesolr_search' => 
    array (
      'filename' => false,
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'apachesolr' => 
    array (
      'filename' => false,
      'name' => 'apachesolr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'apachesolr_image' => 
    array (
      'filename' => false,
      'name' => 'apachesolr_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'apachesolr_nodeaccess' => 
    array (
      'filename' => false,
      'name' => 'apachesolr_nodeaccess',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'apachesolr_og' => 
    array (
      'filename' => false,
      'name' => 'apachesolr_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'auto_nodetitle' => 
    array (
      'filename' => false,
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'autotag' => 
    array (
      'filename' => false,
      'name' => 'autotag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'backup' => 
    array (
      'filename' => false,
      'name' => 'backup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'batax' => 
    array (
      'filename' => false,
      'name' => 'batax',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'beautytips_ui' => 
    array (
      'filename' => false,
      'name' => 'beautytips_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'beautytips' => 
    array (
      'filename' => false,
      'name' => 'beautytips',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'biblio_scholar' => 
    array (
      'filename' => false,
      'name' => 'biblio_scholar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'biblio' => 
    array (
      'filename' => false,
      'name' => 'biblio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'biblio_pm' => 
    array (
      'filename' => false,
      'name' => 'biblio_pm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'boost' => 
    array (
      'filename' => false,
      'name' => 'boost',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'calendar_ical' => 
    array (
      'filename' => false,
      'name' => 'calendar_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'calendar' => 
    array (
      'filename' => false,
      'name' => 'calendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jcalendar' => 
    array (
      'filename' => false,
      'name' => 'jcalendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content' => 
    array (
      'filename' => false,
      'name' => 'content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_copy' => 
    array (
      'filename' => false,
      'name' => 'content_copy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_permissions' => 
    array (
      'filename' => false,
      'name' => 'content_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'fieldgroup' => 
    array (
      'filename' => false,
      'name' => 'fieldgroup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nodereference' => 
    array (
      'filename' => false,
      'name' => 'nodereference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'number' => 
    array (
      'filename' => false,
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'optionwidgets' => 
    array (
      'filename' => false,
      'name' => 'optionwidgets',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'text' => 
    array (
      'filename' => false,
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'userreference' => 
    array (
      'filename' => false,
      'name' => 'userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'checkbox_validate' => 
    array (
      'filename' => false,
      'name' => 'checkbox_validate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'citation' => 
    array (
      'filename' => false,
      'name' => 'citation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'classification_biblio' => 
    array (
      'filename' => false,
      'name' => 'classification_biblio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'classification_import' => 
    array (
      'filename' => false,
      'name' => 'classification_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'csv_import' => 
    array (
      'filename' => false,
      'name' => 'csv_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'eol_import' => 
    array (
      'filename' => false,
      'name' => 'eol_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'excel_import' => 
    array (
      'filename' => false,
      'name' => 'excel_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tcs_import' => 
    array (
      'filename' => false,
      'name' => 'tcs_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'wcm_import' => 
    array (
      'filename' => false,
      'name' => 'wcm_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'classification_scratchpads' => 
    array (
      'filename' => false,
      'name' => 'classification_scratchpads',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'classification' => 
    array (
      'filename' => false,
      'name' => 'classification',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'comment_upload' => 
    array (
      'filename' => false,
      'name' => 'comment_upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'commentmail' => 
    array (
      'filename' => false,
      'name' => 'commentmail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'contemplate' => 
    array (
      'filename' => false,
      'name' => 'contemplate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_profile' => 
    array (
      'filename' => false,
      'name' => 'content_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_profile_registration' => 
    array (
      'filename' => false,
      'name' => 'content_profile_registration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_profile_tokens' => 
    array (
      'filename' => false,
      'name' => 'content_profile_tokens',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_taxonomy_autocomplete' => 
    array (
      'filename' => false,
      'name' => 'content_taxonomy_autocomplete',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_taxonomy_options' => 
    array (
      'filename' => false,
      'name' => 'content_taxonomy_options',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'content_taxonomy' => 
    array (
      'filename' => false,
      'name' => 'content_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'memcache_admin' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/contrib/memcache/memcache_admin/memcache_admin.module',
      'name' => 'memcache_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Memcache Admin',
        'description' => 'Adds a User Interface to monitor the Memcache for this site.',
        'package' => 'Performance and scalability',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'memcache',
        'datestamp' => '1305178916',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'memcache' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/contrib/memcache/memcache.module',
      'name' => 'memcache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Memcache',
        'description' => 'High performance integration with memcache.',
        'package' => 'Performance and scalability',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'memcache',
        'datestamp' => '1305178916',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'countriesmap' => 
    array (
      'filename' => false,
      'name' => 'countriesmap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'creativecommons_lite' => 
    array (
      'filename' => false,
      'name' => 'creativecommons_lite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'darwincore' => 
    array (
      'filename' => false,
      'name' => 'darwincore',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_api' => 
    array (
      'filename' => false,
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_locale' => 
    array (
      'filename' => false,
      'name' => 'date_locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_php4' => 
    array (
      'filename' => false,
      'name' => 'date_php4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_popup' => 
    array (
      'filename' => false,
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_repeat' => 
    array (
      'filename' => false,
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_timezone' => 
    array (
      'filename' => false,
      'name' => 'date_timezone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date_tools' => 
    array (
      'filename' => false,
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'date' => 
    array (
      'filename' => false,
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'devscratchpadseu' => 
    array (
      'filename' => false,
      'name' => 'devscratchpadseu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'dragon' => 
    array (
      'filename' => false,
      'name' => 'dragon',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'editor_views' => 
    array (
      'filename' => false,
      'name' => 'editor_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'emonocot' => 
    array (
      'filename' => false,
      'name' => 'emonocot',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'emptyparagraphkiller' => 
    array (
      'filename' => false,
      'name' => 'emptyparagraphkiller',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'femail' => 
    array (
      'filename' => false,
      'name' => 'femail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'filefield_meta' => 
    array (
      'filename' => false,
      'name' => 'filefield_meta',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'filefield' => 
    array (
      'filename' => false,
      'name' => 'filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'fixperms' => 
    array (
      'filename' => false,
      'name' => 'fixperms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'fotonotes' => 
    array (
      'filename' => false,
      'name' => 'fotonotes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'foundation' => 
    array (
      'filename' => false,
      'name' => 'foundation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'globalredirect' => 
    array (
      'filename' => false,
      'name' => 'globalredirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'glossary' => 
    array (
      'filename' => false,
      'name' => 'glossary',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'gmap_location' => 
    array (
      'filename' => false,
      'name' => 'gmap_location',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'gmap_macro_builder' => 
    array (
      'filename' => false,
      'name' => 'gmap_macro_builder',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'gmap_taxonomy' => 
    array (
      'filename' => false,
      'name' => 'gmap_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'gmap' => 
    array (
      'filename' => false,
      'name' => 'gmap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'googleanalytics' => 
    array (
      'filename' => false,
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'hashcash' => 
    array (
      'filename' => false,
      'name' => 'hashcash',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'hide_all_forms' => 
    array (
      'filename' => false,
      'name' => 'hide_all_forms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'htdigest' => 
    array (
      'filename' => false,
      'name' => 'htdigest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ie6update' => 
    array (
      'filename' => false,
      'name' => 'ie6update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imageapi_gd' => 
    array (
      'filename' => false,
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imageapi_imagemagick' => 
    array (
      'filename' => false,
      'name' => 'imageapi_imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imageapi' => 
    array (
      'filename' => false,
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imagecache_ui' => 
    array (
      'filename' => false,
      'name' => 'imagecache_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imagecache' => 
    array (
      'filename' => false,
      'name' => 'imagecache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imagefield' => 
    array (
      'filename' => false,
      'name' => 'imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => false,
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'imce' => 
    array (
      'filename' => false,
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'install_profile_api' => 
    array (
      'filename' => false,
      'name' => 'install_profile_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'bhl' => 
    array (
      'filename' => false,
      'name' => 'bhl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'bold' => 
    array (
      'filename' => false,
      'name' => 'bold',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'flickr' => 
    array (
      'filename' => false,
      'name' => 'flickr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'gbifmap' => 
    array (
      'filename' => false,
      'name' => 'gbifmap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'googlescholar' => 
    array (
      'filename' => false,
      'name' => 'googlescholar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'morphbank' => 
    array (
      'filename' => false,
      'name' => 'morphbank',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nbnmap' => 
    array (
      'filename' => false,
      'name' => 'nbnmap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ncbi' => 
    array (
      'filename' => false,
      'name' => 'ncbi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'wikipedia' => 
    array (
      'filename' => false,
      'name' => 'wikipedia',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'yahooimages' => 
    array (
      'filename' => false,
      'name' => 'yahooimages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'ispecies' => 
    array (
      'filename' => false,
      'name' => 'ispecies',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'itis_term' => 
    array (
      'filename' => false,
      'name' => 'itis_term',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jquery_aop' => 
    array (
      'filename' => false,
      'name' => 'jquery_aop',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jquery_form_update' => 
    array (
      'filename' => false,
      'name' => 'jquery_form_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jquery_ui' => 
    array (
      'filename' => false,
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jquery_update' => 
    array (
      'filename' => false,
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jsalter' => 
    array (
      'filename' => false,
      'name' => 'jsalter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'jstools' => 
    array (
      'filename' => false,
      'name' => 'jstools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'leftandright' => 
    array (
      'filename' => false,
      'name' => 'leftandright',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'legal' => 
    array (
      'filename' => false,
      'name' => 'legal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'lightbox2' => 
    array (
      'filename' => false,
      'name' => 'lightbox2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'link' => 
    array (
      'filename' => false,
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_addanother' => 
    array (
      'filename' => false,
      'name' => 'location_addanother',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_cck' => 
    array (
      'filename' => false,
      'name' => 'location_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_fax' => 
    array (
      'filename' => false,
      'name' => 'location_fax',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_generate' => 
    array (
      'filename' => false,
      'name' => 'location_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_phone' => 
    array (
      'filename' => false,
      'name' => 'location_phone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_search' => 
    array (
      'filename' => false,
      'name' => 'location_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_taxonomy' => 
    array (
      'filename' => false,
      'name' => 'location_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_node' => 
    array (
      'filename' => false,
      'name' => 'location_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location_user' => 
    array (
      'filename' => false,
      'name' => 'location_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'location' => 
    array (
      'filename' => false,
      'name' => 'location',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'lowername' => 
    array (
      'filename' => false,
      'name' => 'lowername',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'mado' => 
    array (
      'filename' => false,
      'name' => 'mado',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'matrix_editor' => 
    array (
      'filename' => false,
      'name' => 'matrix_editor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_debug' => 
    array (
      'filename' => false,
      'name' => 'messaging_debug',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_mail' => 
    array (
      'filename' => false,
      'name' => 'messaging_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_mime_mail' => 
    array (
      'filename' => false,
      'name' => 'messaging_mime_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_notify' => 
    array (
      'filename' => false,
      'name' => 'messaging_notify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_phpmailer' => 
    array (
      'filename' => false,
      'name' => 'messaging_phpmailer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_privatemsg' => 
    array (
      'filename' => false,
      'name' => 'messaging_privatemsg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_simple' => 
    array (
      'filename' => false,
      'name' => 'messaging_simple',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_sms' => 
    array (
      'filename' => false,
      'name' => 'messaging_sms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_twitter' => 
    array (
      'filename' => false,
      'name' => 'messaging_twitter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging_xmpp' => 
    array (
      'filename' => false,
      'name' => 'messaging_xmpp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'messaging' => 
    array (
      'filename' => false,
      'name' => 'messaging',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'modalframe' => 
    array (
      'filename' => false,
      'name' => 'modalframe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'modalframe_example' => 
    array (
      'filename' => false,
      'name' => 'modalframe_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'mollom' => 
    array (
      'filename' => false,
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'mollom_test' => 
    array (
      'filename' => false,
      'name' => 'mollom_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nagger' => 
    array (
      'filename' => false,
      'name' => 'nagger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nexus' => 
    array (
      'filename' => false,
      'name' => 'nexus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'clone' => 
    array (
      'filename' => false,
      'name' => 'clone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'node_import' => 
    array (
      'filename' => false,
      'name' => 'node_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'node_term_edit' => 
    array (
      'filename' => false,
      'name' => 'node_term_edit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nodereferencebiblio' => 
    array (
      'filename' => false,
      'name' => 'nodereferencebiblio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nodereferencethumb' => 
    array (
      'filename' => false,
      'name' => 'nodereferencethumb',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'nodereferrer' => 
    array (
      'filename' => false,
      'name' => 'nodereferrer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'noderelationships' => 
    array (
      'filename' => false,
      'name' => 'noderelationships',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_autosubscribe' => 
    array (
      'filename' => false,
      'name' => 'notifications_autosubscribe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_content' => 
    array (
      'filename' => false,
      'name' => 'notifications_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_feed' => 
    array (
      'filename' => false,
      'name' => 'notifications_feed',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_lite' => 
    array (
      'filename' => false,
      'name' => 'notifications_lite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_tags' => 
    array (
      'filename' => false,
      'name' => 'notifications_tags',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_ui' => 
    array (
      'filename' => false,
      'name' => 'notifications_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications_views' => 
    array (
      'filename' => false,
      'name' => 'notifications_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'notifications' => 
    array (
      'filename' => false,
      'name' => 'notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og_forum' => 
    array (
      'filename' => false,
      'name' => 'og_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og_user_roles' => 
    array (
      'filename' => false,
      'name' => 'og_user_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og_access' => 
    array (
      'filename' => false,
      'name' => 'og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og_actions' => 
    array (
      'filename' => false,
      'name' => 'og_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og_notifications' => 
    array (
      'filename' => false,
      'name' => 'og_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og_views' => 
    array (
      'filename' => false,
      'name' => 'og_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'og' => 
    array (
      'filename' => false,
      'name' => 'og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'path_redirect_generate' => 
    array (
      'filename' => false,
      'name' => 'path_redirect_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'path_redirect' => 
    array (
      'filename' => false,
      'name' => 'path_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'pathauto' => 
    array (
      'filename' => false,
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'pensoft' => 
    array (
      'filename' => false,
      'name' => 'pensoft',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'plupload' => 
    array (
      'filename' => false,
      'name' => 'plupload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'print_mail' => 
    array (
      'filename' => false,
      'name' => 'print_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'print_pdf' => 
    array (
      'filename' => false,
      'name' => 'print_pdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'print' => 
    array (
      'filename' => false,
      'name' => 'print',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'publication' => 
    array (
      'filename' => false,
      'name' => 'publication',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'quote' => 
    array (
      'filename' => false,
      'name' => 'quote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'remote_issue_tab' => 
    array (
      'filename' => false,
      'name' => 'remote_issue_tab',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'roleassign' => 
    array (
      'filename' => false,
      'name' => 'roleassign',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'sandbox' => 
    array (
      'filename' => false,
      'name' => 'sandbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scheduler' => 
    array (
      'filename' => false,
      'name' => 'scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpad_slickgrid' => 
    array (
      'filename' => false,
      'name' => 'scratchpad_slickgrid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpad_training' => 
    array (
      'filename' => false,
      'name' => 'scratchpad_training',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpad_apply' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
      'name' => 'scratchpad_apply',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Scratchpad Application form Service',
        'description' => 'Provides the data from the Scratchpad application form.  Used by the Aegir site installer',
        'package' => 'EDIT',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpad' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/scratchpad/scratchpad.module',
      'name' => 'scratchpad',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Scratchpad',
        'description' => 'Defines whether or not a Drupal site is a Scratchpad. Reports to a central location to enable lists of other Scratchpads, and also to report stats about the site.',
        'package' => 'EDIT',
        'core' => '6.x',
        'project' => 'scratchpad',
        'project status url' => 'http://modules.scratchpads.eu',
        'version' => '6.x-1.0',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'scratchpadify_help' => 
    array (
      'filename' => false,
      'name' => 'scratchpadify_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpadify_jquery_update' => 
    array (
      'filename' => false,
      'name' => 'scratchpadify_jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpadify' => 
    array (
      'filename' => false,
      'name' => 'scratchpadify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'scratchpads_migrate' => 
    array (
      'filename' => false,
      'name' => 'scratchpads_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'search_files_attachments' => 
    array (
      'filename' => false,
      'name' => 'search_files_attachments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'search_files_directories' => 
    array (
      'filename' => false,
      'name' => 'search_files_directories',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'search_files' => 
    array (
      'filename' => false,
      'name' => 'search_files',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'simplenews_action' => 
    array (
      'filename' => false,
      'name' => 'simplenews_action',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'simplenews' => 
    array (
      'filename' => false,
      'name' => 'simplenews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'slickgrid' => 
    array (
      'filename' => false,
      'name' => 'slickgrid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'spambot' => 
    array (
      'filename' => false,
      'name' => 'spambot',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'spm' => 
    array (
      'filename' => false,
      'name' => 'spm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tablesorter' => 
    array (
      'filename' => false,
      'name' => 'tablesorter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'taxonlist' => 
    array (
      'filename' => false,
      'name' => 'taxonlist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'taxonomy_tree' => 
    array (
      'filename' => false,
      'name' => 'taxonomy_tree',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'taxtab' => 
    array (
      'filename' => false,
      'name' => 'taxtab',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'term_node' => 
    array (
      'filename' => false,
      'name' => 'term_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'thickbox' => 
    array (
      'filename' => false,
      'name' => 'thickbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tinytax' => 
    array (
      'filename' => false,
      'name' => 'tinytax',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'token_test' => 
    array (
      'filename' => false,
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'token_actions' => 
    array (
      'filename' => false,
      'name' => 'token_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'token' => 
    array (
      'filename' => false,
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tokenSTARTER' => 
    array (
      'filename' => false,
      'name' => 'tokenSTARTER',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tree' => 
    array (
      'filename' => false,
      'name' => 'tree',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'tui' => 
    array (
      'filename' => false,
      'name' => 'tui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'twitterscript' => 
    array (
      'filename' => false,
      'name' => 'twitterscript',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'urllogin' => 
    array (
      'filename' => false,
      'name' => 'urllogin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'uwho_client' => 
    array (
      'filename' => false,
      'name' => 'uwho_client',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'uwho_site' => 
    array (
      'filename' => false,
      'name' => 'uwho_site',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'vbranteu' => 
    array (
      'filename' => false,
      'name' => 'vbranteu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'vertical_tabs' => 
    array (
      'filename' => false,
      'name' => 'vertical_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'view_sort' => 
    array (
      'filename' => false,
      'name' => 'view_sort',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_accordion' => 
    array (
      'filename' => false,
      'name' => 'views_accordion',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_batch_page' => 
    array (
      'filename' => false,
      'name' => 'views_batch_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_bonus_export' => 
    array (
      'filename' => false,
      'name' => 'views_bonus_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_bonus_paged_feed' => 
    array (
      'filename' => false,
      'name' => 'views_bonus_paged_feed',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_bonus_panels' => 
    array (
      'filename' => false,
      'name' => 'views_bonus_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_json' => 
    array (
      'filename' => false,
      'name' => 'views_json',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_rdf' => 
    array (
      'filename' => false,
      'name' => 'views_rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_xhtml' => 
    array (
      'filename' => false,
      'name' => 'views_xhtml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_xml' => 
    array (
      'filename' => false,
      'name' => 'views_xml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_export' => 
    array (
      'filename' => false,
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views_ui' => 
    array (
      'filename' => false,
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'views' => 
    array (
      'filename' => false,
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'webform' => 
    array (
      'filename' => false,
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'weight' => 
    array (
      'filename' => false,
      'name' => 'weight',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'workflow_access' => 
    array (
      'filename' => false,
      'name' => 'workflow_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'workflow' => 
    array (
      'filename' => false,
      'name' => 'workflow',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'wysiwyg' => 
    array (
      'filename' => false,
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
    'wysiwygcck' => 
    array (
      'filename' => false,
      'name' => 'wysiwygcck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
    ),
  ),
  'themes' => 
  array (
    'minnelli' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/themes/garland/minnelli/minnelli.info',
      'name' => 'minnelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.37',
        'core' => '6.x',
        'base theme' => 'garland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'minnelli.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/stats.scratchpads.eu/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.37',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020160',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '157.140.2.32',
  '@server_websilicanhmacuk' => '157.140.2.132',
);
$options['installed'] = true;
$options['profile'] = 'standard';
$options['language'] = 'en';
$options['aliases'] = array (
  0 => 'www.stats.scratchpads.eu',
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
# local non-aegir-generated additions
@include_once('/var/aegir/platforms/stats.scratchpads.eu/sites/stats.scratchpads.eu/local.drushrc.php');
