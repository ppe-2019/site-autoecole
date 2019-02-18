<?php
namespace Calendar;
define('HOST','localhost');
define('DB_NAME','sitewebdb');
define('USER','root');
define('PASS','');

class Events {


    /**
     * @param \DateTime $start
     * @param \DateTime $end
     * @return array
     */
    public function getEventsbetween (\DateTime $start, \DateTime $end):array
    {
        $pdo = new \PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS,[
        \PDO:: ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO:: ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);

        $sql = "SELECT * FROM events WHERE start BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
        $statement = $this->$pdo->query($sql);
        $results = $statement->fetchAll();
        return $results;

        return [];
   }
    }



