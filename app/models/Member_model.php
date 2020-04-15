<?php 

class Member_model{

    protected $table = 'member';
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMember()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMemberById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahMember($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES
                    (null,:nama,:region,:email)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('region', $data['region']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusMember($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
