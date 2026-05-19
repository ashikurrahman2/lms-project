<?php

namespace App\Models;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    protected $fillable = [
        't_img',
        't_name',
        't_design',
    ];

    // Get image URL using Intervention Image
    private static function getImageUrl($request)
    {
        self::$image     = $request->file('t_img');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "upload/teacher-images/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize using Intervention Image
        $imageManager = new ImageManager(new Driver());
        $imageUrl     = $imageManager->read(self::$directory . self::$imageName);
        $imageUrl->resize(800, 400);
        $imageUrl->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    // Create a new Teacher entry
    public static function newTeacher($request)
    {
        self::$imageUrl = $request->file('t_img') ? self::getImageUrl($request) : '';

        $teacher = new Teacher();
        self::saveTeacherInfo($teacher, $request, self::$imageUrl);
    }

    // Update an existing Teacher entry
    public static function updateTeacher($request, $id)
    {
        $teacher = self::findOrFail($id);

        if ($request->file('t_img')) {
            if (file_exists($teacher->t_img)) {
                unlink($teacher->t_img);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $teacher->t_img;
        }

        self::saveTeacherInfo($teacher, $request, self::$imageUrl);
    }

    // Save or update Teacher info
    private static function saveTeacherInfo($teacher, $request, $imageUrl)
    {
        $teacher->t_img    = $imageUrl;
        $teacher->t_name   = $request->t_name;
        $teacher->t_design = $request->t_design;
        $teacher->save();
    }

    // Delete a Teacher entry
    public static function deleteTeacher($teacher)
    {
        if (file_exists($teacher->t_img)) {
            unlink($teacher->t_img);
        }
        $teacher->delete();
    }
}