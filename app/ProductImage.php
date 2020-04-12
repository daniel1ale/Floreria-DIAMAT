<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    // $product->images
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function getUrlAttribute(){
    	if(substr($this->image, 0, 4) === "http"){
    		return $this->image;
    	}
        return '../../../../public/images/products/' . $this->image;         //ver carrito de compras
    }

    public function getcarAttribute(){
        if(substr($this->image, 0, 4) === "http"){
            return $this->image;
        }
        return '../public/images/products/' . $this->image;         //ver carrito de compras
    }

    public function getDestacAttribute(){
        if(substr($this->image, 0, 4) === "http"){
            return $this->image;
        }
        return '../images/products/' . $this->image; //ver destacar imajen
        //return '../public/images/products/' . $this->image;         //ver carrito de compras
    }
}
