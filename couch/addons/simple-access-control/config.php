<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Names of the restricted templates with names of the users allowed access to them (use '|' to separate multiple users).
    // To leave access to everyone, don't list the page here.
    // If list of users left blank, *all* users (including the super-admin) will be denied access.

    // $t['blog.php'] = 'admin';   // only user 'admin' has access
    // $t['news.php'] = 'admin | jane | joe';     // users 'admin', 'jane', 'jone' have access
    // $t['test.php'] = '';      // no one has access!!
