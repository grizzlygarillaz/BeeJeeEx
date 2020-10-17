<?php

namespace application\models;

use application\core\Model;

class Task extends Model
{
    public function addTask($task,$name,$mail)
    {
        $params = [
            'task' => $task,
            'author_name' => $name,
            'author_mail' => $mail
        ];
        $this->db->query('INSERT INTO tasks(task, author_name, author_mail) VALUES (:task, :author_name, :author_mail)', $params);
    }

    public function getTasks()
    {
        $result = $this->db->row('SELECT task, author_name, author_mail, done, changed FROM tasks');
        return $result;
    }

    public function sortBy($sort)
    {
        $params = [
            'sort' => $sort
        ];
        $checkFieldExist = $this->db->query('SELECT :sort FROM tasks', $params);
        if ($checkFieldExist)
        {
            $return = $this->db->row('SELECT task, author_name, author_mail, done, changed FROM tasks ORDER BY :sort', $params);
            return $return;
        }
    }

    public function authorize($login, $password)
    {
        $params = [
            'login' => $login,
            'password' => $password
        ];
        $checkUserExist = $this->db->row('SELECT * FROM users WHERE login = :login AND password = :password', $params);
        if (count($checkUserExist) > 0)
        {
            $_SESSION['user'] = 'admin';
            return true;
        }
        return false;
    }
}