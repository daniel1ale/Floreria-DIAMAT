<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable=['name','description'];

    public function categories()
    {
    	return $this->hasMany(Category::class);
    }
    public function getFeaturedImageUrlAttribute()
    {
    	if ($this->image)
           return '../public/images/departments/'.$this->image;
        else              //ver imagenes en lista public
           return '../images/default.svg.png';


        // if ($this->image)
        //     return '../images/departments/'.$this->image;
        // else                                              //ver imagen en lista de departamentos
        // return '../images/default.svg.png';
    }


    public function getListAttribute()
    {
        // if ($this->image)
        //    return '../public/images/departments/'.$this->image;
        // else              //ver imagenes en lista public
        //    return '../images/default.svg.png';


        if ($this->image)
            return '../images/departments/'.$this->image;
        else                                              //ver imagen en lista de departamentos
        return '../images/default.svg.png';
    }
}
