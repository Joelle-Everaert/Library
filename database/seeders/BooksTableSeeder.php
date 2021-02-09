<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;


class BooksTableSeeder extends CsvSeeder
{

    public function __construct(){
        $this->file = '/database/seeds/csvs/books.csv';
        $this->delimiter = ',';
        $this->tablename ='books';
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        parent::run();
    }
}
