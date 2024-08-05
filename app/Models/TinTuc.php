<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = 'tins';

    protected $fillable = [
        'tieu_de',
        'tom_tat',
        'noi_dung',
        'hinh_anh',
        'ngay_dang',
        'id_danh_muc',
        'luotXem',
    ];
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['ngay_dang'] = Carbon::now();
    }
    public function danhmuc()
    {
        return $this->belongsTo(DanhMuc::class);
    }
}
