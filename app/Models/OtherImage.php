<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OtherImage extends Model
{
    use HasFactory;
    private static $otherImage,$otherImages, $directory, $imgUrl, $imgNewName, $imgExtension;
    public static function getImageUrl($image)
    {
        self::$imgExtension = $image->getClientOriginalExtension();
        self::$imgNewName = rand(1, 500000).'.'.self::$imgExtension;
        self::$directory = 'upload/product-other/images/';
        $image->move(self::$directory, self::$imgNewName);
        self::$imgUrl = self::$directory.self::$imgNewName;
        return self::$imgUrl;
    }
    public static function getOtherImages($images, $id)
    {
        foreach ($images as $image)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id = $id;
            self::$otherImage->image = self::getImageUrl($image);
            self::$otherImage->save();
        }
    }
    public static function updateOtherImage($images, $id)
    {
        self::deleteOtherImages($id);
        self::getOtherImages($images, $id);
    }
    public static function deleteOtherImages($id)
    {
        self::$otherImages = OtherImage::where('product_id', $id)->get();
        foreach (self::$otherImages as $image)
        {
            if(file_exists('image'))
            {
                unlink($image->image);
            }
            $image->delete();
        }
    }

}
