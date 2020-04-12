<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description','department_id'];
    //$category->products
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
    //$category->department
    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
    public function getDepartmentNameAttribute()
    {
        if ($this->department)
            return $this->department->name;
        return 'General';
    }
    public function getFeaturedImageUrlAttribute()
    {
        if ($this->image)
            return '../images/categories/'.$this->image;            // IMAGEN DE "CATEGORIA en vista Departaments" en categorias y circle imagen de categoria en "listado productos de esa categoria"
        //esle

        //return '../images/categories/'.$this->image;            // IMAGEN DE "CATEGORIA en vista Departaments" en categorias y circle imagen de categoria en "listado productos de esa categoria"
        //esle

        $firstProduct = $this->products()->first();
        if ($firstProduct)
            return $firstProduct->featured_image_url;

        return '../images/chida2.jpg';
    }

     
}
