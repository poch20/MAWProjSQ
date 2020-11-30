<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManyToManyForms extends Model
{
    use HasFactory;


    protected $fillable = [
      'description',
      'document_files',
      'type',
      'extension',
      'user_id'
    ];

    // public function many_to_many_forms_tableHasManyUsersTable(){
    //   return $this->belongsToMany('App\Models\User')->wherePivot('user_id', '=', 'many_to_many_forms_id');
    // }
    public function myUploadPivotHasManyUsers(){
      return $this->belongsToMany('App\Models\User');
    }
}
