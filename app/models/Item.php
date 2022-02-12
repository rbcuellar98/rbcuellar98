<?php

    class Item extends Model{
        var $name;
        public function get(){
            $SQL = 'SELECT * FROM Item';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Item');
            return $stmt->fetchAll();
        }

        public function create(){
            $SQL = 'INSERT INTO Item(name) VALUE(:name)';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['name'=>$this->name]);
            return $stmt->rowCount();
        }
    }