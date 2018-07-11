<?php 


$options['sites'] = array (
  0 => 'stats.scratchpads.eu',
);
$options['profiles'] = array (
  0 => 'default',
  1 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
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
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
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
        'schema_version' => '6000',
        'version' => '6.37',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
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
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
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
        'schema_version' => '6001',
        'version' => '6.37',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
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
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
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
        'schema_version' => '6001',
        'version' => '6.37',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
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
        'schema_version' => '6055',
        'version' => '6.37',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
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
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'scratchpad_apply' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
        'basename' => 'scratchpad_apply.module',
        'name' => 'scratchpad_apply',
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
        'schema_version' => 0,
        'version' => NULL,
      ),
      'scratchpad' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/scratchpad/scratchpad.module',
        'basename' => 'scratchpad.module',
        'name' => 'scratchpad',
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
        'schema_version' => '6102',
        'version' => '6.x-1.0',
      ),
      'memcache_admin' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/contrib/memcache/memcache_admin/memcache_admin.module',
        'basename' => 'memcache_admin.module',
        'name' => 'memcache_admin',
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
        'schema_version' => '6001',
        'version' => '6.x-1.9',
      ),
      'memcache' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/contrib/memcache/memcache.module',
        'basename' => 'memcache.module',
        'name' => 'memcache',
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
        'schema_version' => 0,
        'version' => '6.x-1.9',
      ),
    ),
    'themes' => 
    array (
      'minnelli' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
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
        ),
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
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
        ),
        'owner' => '/var/aegir/platforms/stats.scratchpads.eu/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
    ),
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
      'default' => 
      array (
        'name' => 'default',
        'filename' => './profiles/default/default.profile',
        'info' => 
        array (
          'name' => 'Drupal',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '6.37',
      ),
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
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'scratchpad_apply' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
        'basename' => 'scratchpad_apply.module',
        'name' => 'scratchpad_apply',
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
        'schema_version' => 0,
        'version' => NULL,
      ),
      'scratchpad' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/scratchpad/scratchpad.module',
        'basename' => 'scratchpad.module',
        'name' => 'scratchpad',
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
        'schema_version' => '6102',
        'version' => '6.x-1.0',
      ),
      'memcache_admin' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/contrib/memcache/memcache_admin/memcache_admin.module',
        'basename' => 'memcache_admin.module',
        'name' => 'memcache_admin',
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
        'schema_version' => '6001',
        'version' => '6.x-1.9',
      ),
      'memcache' => 
      array (
        'filename' => '/var/aegir/platforms/stats.scratchpads.eu/sites/all/modules/contrib/memcache/memcache.module',
        'basename' => 'memcache.module',
        'name' => 'memcache',
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
        'schema_version' => 0,
        'version' => '6.x-1.9',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);