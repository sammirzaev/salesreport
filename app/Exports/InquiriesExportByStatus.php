<?php

namespace App\Exports;

use App\Inquiries;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InquiriesExportByStatus implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('inquiries')
            ->join('statuses', 'statuses.id', '=', 'inquiries.status_id')
            ->select('inquiries.id',
                'statuses.name',
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
            'Status',
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
