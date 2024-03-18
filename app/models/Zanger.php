<?php

class Zanger
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getZangers()
    {
        /**
         * Deze sql-query selecteert alle records uit de tabel countries
         * in de database
         */
        $sql = 'SELECT  Id
                       ,Naam
                       ,NettoWaarde
                       ,Land
                       ,Mobiel
                       ,Leeftijd
                FROM   Zangers';

        /**
         * We gaan de sql-query gereed maken voor de PDO class om mee te werken
         */
        $this->db->query($sql); 

        /**
         * Met de method resultSet voeren we de query uit en stoppen we de objecten in 
         * een array $result
         */
        $result = $this->db->resultSet();

        /**
         * We geven $result terug aan de controller method
         */
        return $result;
    }
}