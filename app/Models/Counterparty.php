<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counterparty extends Model
{
    use HasFactory;

    protected $fillable = [
      '1c_id', 'group_id', 'name', 'opf_id', 'short_name', 'full_name', 'inn', 'kpp', 'code_okpo', 'is_security_document', 'is_physical_face', 'is_non_resident', 'is_supplier', 'is_buyer', 'user_id'
    ];
}
