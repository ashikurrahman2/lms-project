<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    private static $video, $videoName, $directory, $videoUrl;

    protected $fillable = [
        'video_file',
    ];

    // Get video URL after upload
    private static function getVideoUrl($request)
    {
        self::$video     = $request->file('video_file');
        self::$videoName = time() . '_' . self::$video->getClientOriginalName();
        self::$directory = "upload/videos/";

        self::$video->move(self::$directory, self::$videoName);

        self::$videoUrl = self::$directory . self::$videoName;
        return self::$videoUrl;
    }

    // Create a new Video entry
    public static function newVideo($request)
    {
        self::$videoUrl = $request->file('video_file') ? self::getVideoUrl($request) : '';

        $video = new Video();
        self::saveVideoInfo($video, $request, self::$videoUrl);
    }

    // Update an existing Video entry
    public static function updateVideo($request, $id)
    {
        $video = self::findOrFail($id);

        if ($request->file('video_file')) {
            if (file_exists($video->video_file)) {
                unlink($video->video_file);
            }
            self::$videoUrl = self::getVideoUrl($request);
        } else {
            self::$videoUrl = $video->video_file;
        }

        self::saveVideoInfo($video, $request, self::$videoUrl);
    }

    // Save or update Video info
    private static function saveVideoInfo($video, $request, $videoUrl)
    {
        $video->video_file = $videoUrl;
        $video->save();
    }

    // Delete a Video entry
    public static function deleteVideo($video)
    {
        if (file_exists($video->video_file)) {
            unlink($video->video_file);
        }
        $video->delete();
    }
}