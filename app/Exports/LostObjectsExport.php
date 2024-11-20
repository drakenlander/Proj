<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LostObjectsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::all()->makeHidden(['image']);
    }

    public function headings(): array
    {
        return [ 'ID', 'Nombre', 'Descripción', 'Color', 'Ubicación', 'Cédula del Remitente', 'Última Actualización'];
    }
}
