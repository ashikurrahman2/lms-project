<?php

namespace App\Models;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    protected $fillable = [
        'student_id',
        'name',
        'image',
        'facebook',
        'linkedin',
    ];

    // Auto generate student_id
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($student) {
            do {
                $last = Student::latest('id')->first();
                $nextNumber = $last ? ($last->id + 1) : 1;
                $studentId = 'STD-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
            } while (Student::where('student_id', $studentId)->exists());

            $student->student_id = $studentId;
        });
    }

    // Get image URL using Intervention Image
    private static function getImageUrl($request)
    {
        self::$image     = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "upload/student-images/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize using Intervention Image
        $imageManager = new ImageManager(new Driver());
        $imageUrl     = $imageManager->read(self::$directory . self::$imageName);
        $imageUrl->resize(800, 400);
        $imageUrl->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    // Create a new Student entry
    public static function newStudent($request)
    {
        self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : '';

        $student = new Student();
        self::saveStudentInfo($student, $request, self::$imageUrl);
    }

    // Update an existing Student entry
    public static function updateStudent($request, $id)
    {
        $student = self::findOrFail($id);

        if ($request->file('image')) {
            if (file_exists($student->image)) {
                unlink($student->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $student->image;
        }

        self::saveStudentInfo($student, $request, self::$imageUrl);
    }

    // Save or update Student info
    private static function saveStudentInfo($student, $request, $imageUrl)
    {
        $student->name      = $request->name;
        $student->image     = $imageUrl;
        $student->facebook  = $request->facebook;
        $student->linkedin   = $request->linkedin;
        $student->save();
    }

    // Delete a Student entry
    public static function deleteStudent($student)
    {
        if (file_exists($student->image)) {
            unlink($student->image);
        }
        $student->delete();
    }
}