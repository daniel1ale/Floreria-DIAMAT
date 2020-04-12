<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // $product->category
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    // $product->images
    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }
    // $product->subsistence
    public function subsistence()
    {
        return $this->belongsTo(Subsistence::class);
    }
    





    public function getFeaturedImageUrlAttribute(){
        
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage){
            return $featuredImage->destac;
        }

        return '../public/images/chechida.jpg';

    }

    


    public function getcarrAttribute(){
        
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage){
            return $featuredImage->car;
        }

        return '../public/images/default.svg.png';



    }



    public function getCategoryNameAttribute()
    {
        if ($this->category)
            return $this->category->name;

        return 'General';
    }
    public function getSubsistenceNameAttibute()
    {
        if ($this->subsistence)
            return $this->subsistence->description;

        return 'En existencia';
    }


    public function getFeaturedImageUrlSearchAttribute(){
        
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage){
            return $featuredImage->destac;
        }

        return '../public/images/chechida.jpg';

    }

}
