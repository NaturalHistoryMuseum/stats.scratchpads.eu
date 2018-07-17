<?php 


$options['sites'] = array (
  0 => 'd6stats',
);
$options['profiles'] = array (
  0 => 'default',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to structure site pages in a hierarchy or outline.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.38',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'upload' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
        'info' => 
        array (
          'name' => 'Upload',
          'description' => 'Allows users to upload and attach files to content.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.38',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'ping' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
        'info' => 
        array (
          'name' => 'Ping',
          'description' => 'Alerts other sites when your site has been updated.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Enables threaded discussions about general topics.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.38',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'version' => '6.38',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the boxes that are displayed around the main content.',
          'package' => 'Core - required',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core - required',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update status',
          'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
          'version' => '6.38',
          'package' => 'Core - optional',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.38',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.38',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core - required',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6056',
        'version' => '6.38',
      ),
      'blogapi' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
        'info' => 
        array (
          'name' => 'Blog API',
          'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.38',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core - required',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows the user to change the color scheme of certain themes.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.38',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'version' => '6.38',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'throttle' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
        'info' => 
        array (
          'name' => 'Throttle',
          'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Handles the filtering of content in preparation for display.',
          'package' => 'Core - required',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '6.38',
          'package' => 'Core - optional',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.38',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent posts for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core - optional',
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.38',
      ),
      'scratchpad_apply' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
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
        'filename' => '/var/aegir/platforms/drupal_6/sites/all/modules/scratchpad/scratchpad.module',
        'basename' => 'scratchpad.module',
        'name' => 'scratchpad',
        'info' => 
        array (
          'name' => 'Scratchpad',
          'description' => 'Defines whether or not a Drupal site is a Scratchpad. Reports to a central location to enable lists of other Scratchpads, and also to report stats about the site.',
          'package' => 'EDIT',
          'core' => '6.x',
          'project' => 'scratchpad',
          'version' => '6.x-1.0',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.0',
      ),
    ),
    'themes' => 
    array (
      'bluemarine' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.38',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1456343372',
        ),
        'owner' => '/var/aegir/platforms/drupal_6/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
      'marvin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
        'info' => 
        array (
          'name' => 'Marvin',
          'description' => 'Boxy tabled theme in all grays.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'version' => '6.38',
          'core' => '6.x',
          'base theme' => 'chameleon',
          'project' => 'drupal',
          'datestamp' => '1456343372',
        ),
      ),
      'chameleon' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
        'info' => 
        array (
          'name' => 'Chameleon',
          'description' => 'Minimalist tabled theme with light colors.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'favicon',
            2 => 'name',
            3 => 'slogan',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
              1 => 'common.css',
            ),
          ),
          'version' => '6.38',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1456343372',
        ),
      ),
      'pushbutton' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.38',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1456343372',
        ),
        'owner' => '/var/aegir/platforms/drupal_6/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
      'minnelli' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
        'info' => 
        array (
          'name' => 'Minnelli',
          'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
          'version' => '6.38',
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
          'datestamp' => '1456343372',
        ),
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
          'version' => '6.38',
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
          'datestamp' => '1456343372',
        ),
        'owner' => '/var/aegir/platforms/drupal_6/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '6.38',
        'description' => 'This platform is running Drupal 6.38',
      ),
    ),
    'profiles' => 
    array (
      'default' => 
      array (
        'name' => 'default',
        'info' => 
        array (
          'name' => 'Drupal',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => './profiles/default/default.info',
        'version' => '6.38',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'scratchpad_apply' => 
      array (
        'filename' => '/var/aegir/platforms/drupal_6/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
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
        'filename' => '/var/aegir/platforms/drupal_6/sites/all/modules/scratchpad/scratchpad.module',
        'basename' => 'scratchpad.module',
        'name' => 'scratchpad',
        'info' => 
        array (
          'name' => 'Scratchpad',
          'description' => 'Defines whether or not a Drupal site is a Scratchpad. Reports to a central location to enable lists of other Scratchpads, and also to report stats about the site.',
          'package' => 'EDIT',
          'core' => '6.x',
          'project' => 'scratchpad',
          'version' => '6.x-1.0',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.0',
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
  ),
);