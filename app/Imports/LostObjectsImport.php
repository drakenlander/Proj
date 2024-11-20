<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class LostObjectsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'object' => $row[0],
            'image' => 'img/1.jpg',
            'description' => $row[1],
            'color' => $row[2],
            'location' => $row[3],
            'idcard' => $row[4],
        ]);
    }
}
