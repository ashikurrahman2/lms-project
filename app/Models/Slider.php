<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Slider extends Model
{
    use HasFactory;

    private static $imageUrl;
    private static $directory = "upload/slider-images/";

    protected $fillable = [
        's_img',
        'caption_text',
        'heading_text',
    ];

    // Function to upload and store image
    private static function getImageUrl($imageFile)
    {
        // Directory না থাকলে automatic create করবে
        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0777, true);
        }

        $imageName    = hexdec(uniqid()) . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move(self::$directory, $imageName);

        // Resize image
        $imageManager = new ImageManager(new Driver());
        $image        = $imageManager->read(self::$directory . $imageName);
        $image->resize(500, 500);
        $image->save(self::$directory . $imageName);

        return self::$directory . $imageName;
    }

    // Create a new Slider entry
    public static function newSlider($request)
    {
        self::$imageUrl = $request->hasFile('s_img')
            ? self::getImageUrl($request->file('s_img'))
            : null;

        $slider = new self();
        self::saveSliderInfo($slider, $request, self::$imageUrl);
    }

    // Update an existing Slider entry
    public static function updateSlider($request, $id)
    {
        $slider = self::findOrFail($id);

        if ($request->hasFile('s_img')) {
            if ($slider->s_img && file_exists($slider->s_img)) {
                unlink($slider->s_img);
            }
            self::$imageUrl = self::getImageUrl($request->file('s_img'));
        } else {
            self::$imageUrl = $slider->s_img;
        }

        self::saveSliderInfo($slider, $request, self::$imageUrl);
    }

    // Save or update slider info in the database
    private static function saveSliderInfo($slider, $request, $imageUrl)
    {
        $slider->s_img        = $imageUrl;
        $slider->caption_text = $request->caption_text;
        $slider->heading_text = $request->heading_text;
        $slider->save();
    }

    // Delete a Slider entry
    public static function deleteSlider($slider)
    {
        if ($slider->s_img && file_exists($slider->s_img)) {
            unlink($slider->s_img);
        }

        $slider->delete();
    }
}