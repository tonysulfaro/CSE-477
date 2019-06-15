<?php
/**
 * Function to localize our site
 * @param $site The Site object
 */
return function(Felis\Site $site) {
    // Set the time zone
    date_default_timezone_set('America/Detroit');

    $site->setEmail('sulfaroa@cse.msu.edu');
    $site->setRoot('/~sulfaroa/step7');
    $site->dbConfigure('mysql:host=mysql-user.cse.msu.edu;dbname=sulfaroa',
        'sulfaroa',       // Database user
        'A52995491',     // Database password
        'test8_');            // Table prefix
};


