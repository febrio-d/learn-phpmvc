<?php

class Students_model
{
    private $table = 'students';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStudents()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStudentsByID($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addNewStudent($data)
    {
        $query = "INSERT INTO students VALUES ('', :name, :cid, :email, :major)";

        $this->db->query($query);
        $this->db->bind('name', $data['inputName']);
        $this->db->bind('cid', $data['inputCid']);
        $this->db->bind('email', $data['inputEmail']);
        $this->db->bind('major', $data['inputMajor']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteStudent($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editStudent($data)
    {
        $query = "UPDATE students SET 
                    name = :name,
                    cid = :cid,
                    email = :email,
                    major = :major
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['inputId']);
        $this->db->bind('name', $data['inputName']);
        $this->db->bind('cid', $data['inputCid']);
        $this->db->bind('email', $data['inputEmail']);
        $this->db->bind('major', $data['inputMajor']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function searchStudentsData()
    {
        $keyword = $_POST['keyword'];
        $this->db->query('SELECT * FROM students WHERE name LIKE :keyword');
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
