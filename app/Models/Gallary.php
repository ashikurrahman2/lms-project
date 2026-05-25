<?php

namespace App\Models;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    use HasFactory;

    protected $table = 'gallaries';

    private static $image, $imageName, $directory, $imageUrl;

    protected $fillable = [
        'g_img',
        'g_title',
    ];

    // Get image URL using Intervention Image
    private static function getImageUrl($request)
    {
        self::$image     = $request->file('g_img');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "upload/gallery-images/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize using Intervention Image (প্রয়োজন অনুযায়ী ৮০০ এবং ৪০০ সাইজ পরিবর্তন করে নিতে পারেন)
        $imageManager = new ImageManager(new Driver());
        $imageUrl     = $imageManager->read(self::$directory . self::$imageName);
        $imageUrl->resize(800, 400); 
        $imageUrl->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    // Create a new Gallery entry
    public static function newGallery($request)
    {
        self::$imageUrl = $request->file('g_img') ? self::getImageUrl($request) : '';

        $gallery = new Gallary();
        self::saveGalleryInfo($gallery, $request, self::$imageUrl);
    }

    // Update an existing Gallery entry
    public static function updateGallery($request, $id)
    {
        $gallery = self::findOrFail($id);

        if ($request->file('g_img')) {
            if (file_exists($gallery->g_img)) {
                unlink($gallery->g_img);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $gallery->g_img;
        }

        self::saveGalleryInfo($gallery, $request, self::$imageUrl);
    }

    // Save or update Gallery info
    private static function saveGalleryInfo($gallery, $request, $imageUrl)
    {
        $gallery->g_img   = $imageUrl;
        $gallery->g_title = $request->g_title;
        $gallery->save();
    }

    // Delete a Gallery entry
    public static function deleteGallery($gallery)
    {
        if (file_exists($gallery->g_img)) {
            unlink($gallery->g_img);
        }
        $gallery->delete();
    }
}