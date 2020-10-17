<?php

namespace application\lib;

use PDO;

class DB
{
    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].';charset='.$config['charset'],$config['user'],$config['password']);
    }

    public function query($sql, $params = [])
    {
        $state = $this->db->prepare($sql);
        if (!empty($params))
        {
            foreach ($params as $key => $val){
                $state->bindValue(':'.$key, $val);
            }
        }
        $state->execute();
        return $state;
    }

    public function row($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}