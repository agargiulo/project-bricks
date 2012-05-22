<?php
require_once("./db_connect.php");
function processRecentBricks()
{
    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;
    $dbConnection = pg_connect("host=" . $DB_HOST . " dbname=" . $DB_NAME . " user=" . $DB_USER . " password=" . $DB_PASS)
    or die('Could not connect: ' . pg_last_error());

    $query = 'SELECT "name","username","date_completed","committee_name","description" FROM "projects" JOIN "users" ON "projects"."name" = "users"."project_name" ORDER BY "date_completed" LIMIT 5';
    $result = pg_query($query) or die('Query failed');

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC))
    {
        echo "\t\t\t\t\t<tr>\n";
        foreach ($line as $colVal)
        {
            echo "\t\t\t\t\t\t<td>$colVal</td>\n";
        }
        echo "\t\t\t\t\t</tr>\n";
    }
}
?>