<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo', 'nombre', 'precio', 'talla', 'color', 'categoria', 'imagen', 'stock'];
}
