<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents'; // Ensure correct table name

    protected $fillable = [
       'DocCategory',
        'DocumentName',
        'DocumentDate',
        'DocumentAuthor',
        'DocumentVersion',
        'DocumentRef',
        'DocumentSubject',
        'AccessType',
        'DocumentStorageName',
        'UploadedByName', // Column exists in the table
        'created_by', // You can use this instead of `UploadedBy`
        'updated_by',
        'is_deleted',
        'deleted_by',
    ];
}
