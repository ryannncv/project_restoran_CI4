<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class User_M extends Model{

        protected $table = 'tbluser';

        protected $primaryKey = 'iduser';

        protected $allowedFields =['user','email','password','level','aktif'];

        
        protected $validationRules = [
            'user' => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
            'email' => 'valid_email'
        ];
        
        protected $validationMessages = [
            'user' => [
                'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
                'min_length'          => 'Kategori minimal berisi 3 karakter',
                'is_unique'           => 'Nama sudah digunakan'
            ],
            'email' => [
                'valid_email'       => 'Email Salah'
            ]
        ];

    }

?>