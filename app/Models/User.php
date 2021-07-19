<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function constituency_area_name(): array
    {
        return [
            'وارڈ نمبر 1',
            'وارڈ نمبر 2',
            'وارڈ نمبر 3',
            'وارڈ نمبر 4',
            'وارڈ نمبر 5',
            'وارڈ نمبر 6',
            'وارڈ نمبر 7',
            'وارڈ نمبر 8',
            'وارڈ نمبر 9',
            'وارڈ نمبر 10',
            'وارڈ نمبر 11',
            'وارڈ نمبر 12',
            'وارڈ نمبر 13',
            'وارڈ نمبر 14',
            'وارڈ نمبر 15',
            'وارڈ نمبر 16',
            'وارڈ نمبر 17',
            'وارڈ نمبر 18',
            'وارڈ نمبر 19',
            'وارڈ نمبر 20',
            'وارڈ نمبر 21',
            'وارڈ نمبر 22',
            'وارڈ نمبر 23',
            'وارڈ نمبر 24',
            'وارڈ نمبر 25',
        ];
    }

    public static function gender(): array
    {
        return [
            'مرد',
            'عورت',
            'خواجہ سرا',
        ];
    }

    public static function potential_voter(): array
    {
        return [
            'پاکستان تحریک انصاف',
            'پاکستان مسلم لیک ن',
            'پاکستان پیپلز پارٹی',
            'مسلم کانفرس',
            'آزاد امیدوار',
        ];
    }


    public static function union_council(): array
    {
        return [
            'مظفرآباد'
        ];
    }

    public static function patwar_circle_name(): array
    {
        return [
            'میو نسپل کارپورشن مظفرآباد'
        ];
    }

    public static function tehsil(): array
    {
        return [
            'مظفرآباد'
        ];
    }

    public static function district(): array
    {
        return [
            'مظفرآباد'
        ];
    }
}
