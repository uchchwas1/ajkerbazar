<?PHP
/**
 * Class to initiate a new MySQL connection based on $dbInfo settings found in dbSettings.php
 *
 * @example $db = new database(); // Initiate a new database connection
 * @example mysql_close($db); // close the connection
 */
class database{
    protected $databaseLink;
    function __construct(){
        include "dbSettings.php";
        $this->database = $dbInfo['host'];
        $this->mysql_user = $dbInfo['user'];
        $this->mysql_pass = $dbInfo['pass'];
        $this->openConnection();
        return $this->get_link();
    }
    function openConnection(){
    $this->databaseLink = mysql_connect($this->database, $this->mysql_user, $this->mysql_pass);
    }

    function get_link(){
    return $this->databaseLink;
    }
}
?>