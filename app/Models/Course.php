<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'image', 'price', 'rating', 
        'review_count', 'instructor_name', 'duration', 'student_count'
    ];

    private static function getImageUrl($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . Str::random(5) . '.' . $image->getClientOriginalExtension();
            $directory = 'upload/course-images/';
            $path = public_path($directory);

            // ফোল্ডার না থাকলে তৈরি করবে
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // মূল ইমেজটি আগে মুভ করি (যাতে রিসাইজ ফেইল করলেও ইমেজ থাকে)
            $image->move($path, $imageName);
            $imageUrl = $directory . $imageName;

            // Intervention Image v3 দিয়ে রিসাইজ করার চেষ্টা
            try {
                if (class_exists('Intervention\Image\ImageManager')) {
                    $manager = new ImageManager(new Driver());
                    $img = $manager->read(public_path($imageUrl));
                    $img->resize(700, 500);
                    $img->save(public_path($imageUrl));
                }
            } catch (\Exception $e) {
                // রিসাইজ ফেইল করলে কিছুই করার দরকার নেই, মূল ইমেজটি অলরেডি সেভ হয়েছে
            }

            return $imageUrl;
        }

        return 'upload/no-image.png'; // ইমেজ না দিলে এটি সেভ হবে
    }

    public static function newCourse($request)
    {
        $imageUrl = self::getImageUrl($request);

        $course = new self();
        $course->title           = $request->title;
        $course->slug            = Str::slug($request->title);
        $course->image           = $imageUrl;
        $course->price           = $request->price;
        $course->rating          = $request->rating ?? 5;
        $course->review_count    = $request->review_count ?? 0;
        $course->instructor_name = $request->instructor_name;
        $course->duration        = $request->duration;
        $course->student_count   = $request->student_count ?? 0;
        $course->save();
    }

    public static function updateCourse($request, $id)
    {
        $course = self::findOrFail($id);
        
        if ($request->hasFile('image')) {
            if ($course->image && file_exists(public_path($course->image)) && $course->image != 'upload/no-image.png') {
                unlink(public_path($course->image));
            }
            $imageUrl = self::getImageUrl($request);
        } else {
            $imageUrl = $course->image;
        }

        $course->title           = $request->title;
        $course->slug            = Str::slug($request->title);
        $course->image           = $imageUrl;
        $course->price           = $request->price;
        $course->rating          = $request->rating ?? 5;
        $course->review_count    = $request->review_count ?? 0;
        $course->instructor_name = $request->instructor_name;
        $course->duration        = $request->duration;
        $course->student_count   = $request->student_count ?? 0;
        $course->save();
    }

    public static function deleteCourse($course)
    {
        if ($course->image && file_exists(public_path($course->image)) && $course->image != 'upload/no-image.png') {
            unlink(public_path($course->image));
        }
        $course->delete();
    }
}