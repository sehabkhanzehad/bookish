<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productColorVariation;
use App\Models\ProductStock;
use DB;
class ProductPdf extends Model
{
    use HasFactory;


    protected $table = 'product_pdf_image';
    protected $guarded= [];


    function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }



}
