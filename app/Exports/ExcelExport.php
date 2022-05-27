<?php 
namespace App\Exports;
 
use App\Models\Data;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class StudentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return['id','Name','email','department','title','Created_at','Updated_at'];
    } 
    public function collection()
    {
        return Data::all();
    }
}