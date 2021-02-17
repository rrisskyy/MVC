<?php 

class Blackbulls_model{
    private $table = 'blackbulls';
    private $db;

    public function __construct()
    {
        $this->db = new Database;        
    }


    public function getAllMembers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMemberByRank($Rank) 
    {
         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Rank=:Rank');
         $this->db->bind('Rank', $Rank);
         return $this->db->single();
    }

    public function tambahMember($data) {
        $query = "INSERT INTO blackbulls                                   
            VALUES 
        ('', :Name, :Power, :Magic, :Grimoire, :Position)";
        $this->db->query($query);

        $this->db->bind('Name', $data['Name']);
        $this->db->bind('Power', $data['Power']);
        $this->db->bind('Magic', $data['Magic']);
        $this->db->bind('Grimoire', $data['Grimoire']);
        $this->db->bind('Position', $data['Position']);;

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusMember($Rank) {
        $query = "DELETE FROM blackbulls WHERE Rank = :Rank";
        $this->db->query($query);
        $this->db->bind('Rank', $Rank);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMember($data) {
        $query = "UPDATE blackbulls SET
            Name = :Name,
            Power = :Power,
            Magic = :Magic,
            Grimoire = :Grimoire,
            Position = :Position
            WHERE Rank = :Rank";

        $this->db->query($query); 
        $this->db->bind('Name', $data['Name']);
        $this->db->bind('Power', $data['Power']);
        $this->db->bind('Magic', $data['Magic']);
        $this->db->bind('Grimoire', $data['Grimoire']);
        $this->db->bind('Position', $data['Position']);;
        $this->db->bind('Rank', $data['Rank']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataMembers(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM blackbulls WHERE Name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet(); 
    }
}

?>