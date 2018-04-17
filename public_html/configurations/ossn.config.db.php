<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
error_log("Connecting");

// replace localhost with your database host name;
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

//

$Ossn->host = 'eu-cdbr-west-02.cleardb.net';

// replace 3306 with your database host name;
$Ossn->port = '3306';

// replace id5368494_sportslovers with your database username;
$Ossn->user = 'bd0f176f121976';

// replace dublin2018 with your database password;
$Ossn->password = '7ae06067';

// replace id5368494_sp with your database name;
$Ossn->database = 'heroku_7b0d115e3fe3586';

$conn = new mysqli($server, $username, $password, $db);
if(!$conn->ping()){
  error_log("Error");
}
else{
    error_log("Connected");
}
$conn->close();
error_log("Closed");

