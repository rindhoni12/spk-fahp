<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengguna extends CI_Model
{
    private $_table = "tbl_user";

    public $id_user;
    public $nama_user;
    public $username;
    public $password;
    public $role;
    public $foto = "default.jpg";
    public $tanggal_dibuat;
    public $login_terakhir;

    public function rules()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'Nama User',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[5]|max_length[12]|is_unique[tbl_user.username]'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Role',
            'rules' => 'required']
            
        ];
    }

    public function rulesupdate()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'Nama User',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Role',
            'rules' => 'required']
        ];
    }

    public function rulesupdateprofil()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'Nama User',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $NOW = date("Y-m-d");
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->nama_user = $post["nama_user"];
        $this->username = $post["username"];
        $this->password = MD5($post["password"]);
        // $this->password = $post[MD5("password")];
        $this->role = $post["role"];
        $this->foto = $this->_uploadFoto();
        $this->tanggal_dibuat = $NOW;
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->nama_user = $post["nama_user"];
        $this->username = $post["username"];

        if (!empty($_POST['password'])) {
            $this->password = MD5($post["password"]);
        } else {
            $this->password = $post["password_lama"];
        }

        $this->role = $post["role"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadFoto();
        } else {
            $this->foto = $post["foto_lama"];
        }

        $this->tanggal_dibuat = $post["tanggal_dibuat"];
        $this->login_terakhir = $post["login_terakhir"];

        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        $this->_hapusFoto($id);
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    private function _uploadFoto()
    {
        $config['upload_path']          = './upload/pengguna/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_user;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _hapusFoto($id)
    {
        $user = $this->getById($id);
        if ($user->foto != "default.jpg") {
            $filename = explode(".", $user->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/pengguna/$filename.*"));
        }
    }

    public function update_profil()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->nama_user = $post["nama_user"];
        $this->username = $post["username"];

        if (!empty($_POST['password'])) {
            $this->password = MD5($post["password"]);
        } else {
            $this->password = $post["password_lama"];
        }

        $this->role = $post["role"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadFoto();
        } else {
            $this->foto = $post["foto_lama"];
        }

        $this->tanggal_dibuat = $post["tanggal_dibuat"];
        $this->login_terakhir = $post["login_terakhir"];

        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    // public function _updateTerakhirLogin($id_user){
    //     $sql = "UPDATE {$this->_table} SET login_terakhir=now() WHERE id_user={$id_user}";
    //     $this->db->query($sql);
    // }

    // public function _updateTerakhirLogin($table, $field1, $field2, $field3)
    // {
    //     $this->db->update($table);
    //     $this->db->set($field1);
    //     $this->db->where($field2);
    //     $this->db->where($field3);

    //     // $sql = "UPDATE {$this->_table} SET login_terakhir=now() WHERE id_user={$id_user}";
    //     // $this->db->query($sql);
    //     $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    // }
    
    // public function _updateTerakhirLogin($table, $field1, $field2, $field3)
    // {
    //     $NOW = date("Y-m-d H:i:s");
    //     $data = array(
    //         'login_terakhir' => $NOW
    //     );

    //     $this->db->set($data);
    //     $this->db->where('id_user', $id_user);
    //     $this->db->update($table);
    // }


}