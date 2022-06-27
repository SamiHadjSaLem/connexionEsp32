
<?php

class Database
{

  private static $servername = "localhost";
  private static $username = "root";
  private static $dbName = 'test';
  private static $password = "";
  private static $cont  = null;


  public function __construct()
  {
    die('Init function is not allowed');
  }

  public static function connect()
  { 
    if ( null == self::$cont ) {     
        		try {
        			self::$cont = new PDO("mysql:host=".self::$servername.";"."dbname=".self::$dbName, self::$username, self::$password);
            } 
            catch (PDOException $e) {
              die($e->getMessage());
      }
    }
    return self::$cont;
  }
  public static function disconnect()
  {
    self::$cont = null;
  }
}
   // set the PDO error mode to exception
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";

  // $requete = $conn->prepare("
  //   SELECT IP_adress FROM smart_box WHERE connected=1");
  // $requete->execute();
  // $resultat = $requete->fetchall();
  // echo'<pre>';
  // print_r($resultat);
  // echo'</pre>';
 
  // $requete = $conn->query(" SELECT IP_adress FROM smart_box WHERE connected=1");
  // $requete->execute();
  // $resultat = $requete->fetch(PDO::FETCH_ASSOC);
  
  // echo "<br>";
  // echo $resultat['IP_adress'];
  // echo "<br>";
  // $vari=$resultat['IP_adress'];
 


  
 

