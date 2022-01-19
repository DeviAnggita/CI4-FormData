<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'username';

    /*
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    */

    public function saveMhs($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getMhs($username = "")
    {
        if($username == ""){
            return $this->findAll();
        } else {
            return $this->where(['username' => $username])->first();
        }
    }
}