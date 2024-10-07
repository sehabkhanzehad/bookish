<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productColorVariation;
use App\Models\ProductStock;
use DB;
class ProductFilePdf extends Model
{
    use HasFactory;
    
    // protected $table = 'product_pdffile_image';
    protected $guarded= [];

}
