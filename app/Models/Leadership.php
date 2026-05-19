<?php

namespace App\Models;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    protected $fillable = [
        'l_name',
        'l_img',
        'l_desg',
        'l_ldn',
        'l_fc',
    ];

    // Get image URL using Intervention Image
    private static function getImageUrl($request)
    {
        self::$image     = $request->file('l_img');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "upload/leadership-images/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize using Intervention Image
        $imageManager = new ImageManager(new Driver());
        $imageUrl     = $imageManager->read(self::$directory . self::$imageName);
        $imageUrl->resize(800, 400);
        $imageUrl->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    // Create a new Leadership entry
    public static function newLeadership($request)
    {
        self::$imageUrl = $request->file('l_img') ? self::getImageUrl($request) : '';

        $leadership = new Leadership();
        self::saveLeadershipInfo($leadership, $request, self::$imageUrl);
    }

    // Update an existing Leadership entry
    public static function updateLeadership($request, $id)
    {
        $leadership = self::findOrFail($id);

        if ($request->file('l_img')) {
            if (file_exists($leadership->l_img)) {
                unlink($leadership->l_img);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $leadership->l_img;
        }

        self::saveLeadershipInfo($leadership, $request, self::$imageUrl);
    }

    // Save or update Leadership info
    private static function saveLeadershipInfo($leadership, $request, $imageUrl)
    {
        $leadership->l_img  = $imageUrl;
        $leadership->l_name = $request->l_name;
        $leadership->l_desg = $request->l_desg;
        $leadership->l_ldn  = $request->l_ldn;
        $leadership->l_fc   = $request->l_fc;
        $leadership->save();
    }

    // Delete a Leadership entry
    public static function deleteLeadership($leadership)
    {
        if (file_exists($leadership->l_img)) {
            unlink($leadership->l_img);
        }
        $leadership->delete();
    }
}