<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    private static $subCategory, $image, $imgUrl, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/sub-category-img/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imgUrl = self::$directory . self::$imageName;
        return self::$imgUrl;

    }

    public static function newSubCategory($request)
    {

        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->image = self::getImageUrl($request);
        self::$subCategory->status = $request->status;
        self::$subCategory->save();
    }

    public static function updateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);
        if ($request->file('image')) {
            if (file_exists(self::$subCategory->image)) {
                unlink(self::$subCategory->image);
            }
            self::$imgUrl = self::getImageUrl($request);
        } else {
            self::$imgUrl = self::$subCategory->image;
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->image = self::$imgUrl;
        self::$subCategory->status = $request->status;
        self::$subCategory->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (file_exists('image')) {
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
