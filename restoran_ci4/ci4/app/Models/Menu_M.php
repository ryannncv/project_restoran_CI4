<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Menu_M extends Model{

        protected $table = 'tblmenu';

        protected $allowedFields =['idkategori','menu','gambar','harga'];

        protected $primaryKey = 'idmenu';

        protected $validationRules = [
            'menu' => 'alpha_numeric_space|min_length[3]|is_unique[tblmenu.menu]',
            'harga' => 'numeric'
        ];
        
        protected $validationMessages = [
            'menu' => [
                'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
                'min_length'          => 'Kategori minimal berisi 3 karakter',
                'is_unique'           => 'Nama sudah digunakan'
            ],
            'harga' => [
                'numeric' => 'Harus menggunakan angka'
            ]
        ];

    }

?>