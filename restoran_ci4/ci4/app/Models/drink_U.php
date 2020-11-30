<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class drink_U extends Model{

        protected $table = 'tblmenu';

        protected $allowedFields =['idkategori','menu','gambar','harga'];


        // protected $validationRules = [
        //     'kategori' => 'alpha_numeric_space|min_length[3]|is_unique[tblkategori.kategori]'
        // ];
        
        // protected $validationMessages = [
        //     'kategori' => [
        //         'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
        //         'min_length'          => 'Kategori minimal berisi 3 karakter',
        //         'is_unique'           => 'Nama sudah digunakan'
        //     ]
        // ];
    }

?>