<?php

namespace App\Exports;

use App\Inquiries;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use phpDocumentor\Reflection\File;

class InquiriesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('inquiries')
            ->join('categories', 'categories.id', '=', 'inquiries.category_id')
            ->select('inquiries.id',
                'categories.name',
                'inquiries.date',
                'inquiries.company',
                'inquiries.industry',
                'inquiries.address',
                'inquiries.website',
                'inquiries.fullName',
                'inquiries.position',
                'inquiries.email',
                'inquiries.phnumber',
                'inquiries.subject',
                'inquiries.description',
                'inquiries.seller',
                'inquiries.created_at',
                'inquiries.updated_at')->orderBy('inquiries.id', 'ASC')
            ->get();
    }

    public function headings() : array{
        return [
            'ID',
            'Inquiry Type',
            'Date of Request',
            'Company Name',
            'Industry',
            'Address',
            'Website',
            'Full Name',
            'Position',
            'Email',
            'Phone Number',
            'Subject',
            'Description',
            'Seller',
            'Created Date',
            'Updated Date',
        ];
    }

}
