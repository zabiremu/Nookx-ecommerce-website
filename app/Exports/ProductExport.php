<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProductExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Product::latest()->get(['id','title','image']);
    }
    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Image Name',
        ];
    }
}
