<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class kategori_M extends Model{

        protected $table = 'tblkategori';

        protected $allowedFields =['kategori','keterangan'];

        protected $primaryKey = 'idkategori';

        protected $validationRules = [
            'kategori' => 'alpha_numeric_space|min_length[3]|is_unique[tblkategori.kategori]'
        ];
        
        protected $validationMessages = [
            'kategori' => [
                'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
                'min_length'          => 'Kategori minimal berisi 3 karakter',
                'is_unique'           => 'Nama sudah digunakan'
            ]
        ];
    }

?>