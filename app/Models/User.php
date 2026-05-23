<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'phone',
        'division', 'district', 'upazila', 'union',
        'postcode', 'address_details', 'image', 'password',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    // ──────────────────────────────────────────
    // Accessor
    // ──────────────────────────────────────────

    public function getImageAttribute($value): string
    {
        if ($value && file_exists(public_path($value))) {
            return asset($value);
        }
        return asset('assets/images/user/default.png');
    }

    // ──────────────────────────────────────────
    // Image helper
    // ──────────────────────────────────────────

    private static function uploadImage($file): string
    {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $directory = 'upload/user/';

        $file->move(public_path($directory), $imageName);

        $manager   = new ImageManager(new Driver());
        $imagePath = public_path($directory . $imageName);
        $manager->read($imagePath)->resize(50, 50)->save($imagePath);

        return $directory . $imageName;
    }

    private static function deleteImageFile(?string $imagePath): void
    {
        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }
    }

    // ──────────────────────────────────────────
    // CRUD methods
    // ──────────────────────────────────────────

    public static function createUser($request): self
    {
        $imageUrl = $request->hasFile('image')
            ? self::uploadImage($request->file('image'))
            : null;

        return self::create([
            'name'            => $request->name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'division'        => $request->division,
            'district'        => $request->district,
            'upazila'         => $request->upazila,
            'union'           => $request->union,
            'postcode'        => $request->postcode,
            'address_details' => $request->address_details,
            'image'           => $imageUrl,
            'password'        => Hash::make($request->password),
        ]);
    }

    public static function updateUser($request, $id): void
    {
        $user = self::findOrFail($id);

        if ($request->hasFile('image')) {
            self::deleteImageFile($user->getRawOriginal('image'));
            $imageUrl = self::uploadImage($request->file('image'));
        } else {
            $imageUrl = $user->getRawOriginal('image');
        }

        // Password update — current password check করে
        $passwordData = [];
        if ($request->filled('new_password')) {
            if (!Hash::check($request->current_password, $user->getRawOriginal('password'))) {
                throw new \Exception('Current password is incorrect.');
            }
            $passwordData['password'] = Hash::make($request->new_password);
        }

        $user->update(array_merge([
            'name'            => $request->name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'division'        => $request->division,
            'district'        => $request->district,
            'upazila'         => $request->upazila,
            'union'           => $request->union,
            'postcode'        => $request->postcode,
            'address_details' => $request->address_details,
            'image'           => $imageUrl,
        ], $passwordData));
    }

    public static function deleteUser($id): void
    {
        $user = self::findOrFail($id);
        self::deleteImageFile($user->getRawOriginal('image'));
        $user->delete();
    }
}