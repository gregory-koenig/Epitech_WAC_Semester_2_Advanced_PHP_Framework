<?php


namespace Core;


class ORM
{
    private $db;

    public function __construct()
    {
        $this->db = App::getDatabase();
    }

    public function create($table, $fields) {
        $sql = "INSERT INTO $table ()
                VALUES ()";
        $this->db->query($sql, []);
    }

    public function read($table, $id) {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $data = $this->db->query($sql, [$id])->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($table, $id, $fields) {}

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id = ?";
        $this->db->query($sql, [$id]);
    }

    public function find($table, $params = [
        'WHERE' => 1,
        'ORDER BY' => 'id ASC',
        'LIMIT' => ''
    ]) {}
}