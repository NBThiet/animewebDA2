<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentModel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
       
        'comment_content',
        'bloger_id',
        'product_id'
    ];
    protected $primaryKey = 'comment_id';
    protected $table = 'tbl_comment';
}
