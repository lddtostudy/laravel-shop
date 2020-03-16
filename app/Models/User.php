<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','sex','age','introduction','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
        return $this->hasMany(UserAddress::class);
    }

    public function favoriteProducts()
    {
        return $this->belongsToMany(Product::class, 'user_favorite_products')
            ->withTimestamps()
            ->orderBy('user_favorite_products.created_at', 'desc');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    //后台修改密码或者自己修改密码
    public function setPasswordAttribute($value)
    {
        if (empty($value)) {
            return;
        }
        // 如果值的长度等于 60，即认为是已经做过加密的情况
        if (strlen($value) != 60) {

            // 不等于 60，做密码加密处理
            $value = bcrypt($value);
        }

        $this->attributes['password'] = $value;
    }

    public function setAgeAttribute($value)
    {
        if ($value == '暂未填写~') {
            $value = '';
        }
        $this->attributes['age'] = $value;
    }

    public function setIntroductionAttribute($value)
    {
        if ($value == '暂未填写~') {
            $value = '';
        }
        $this->attributes['introduction'] = $value;
    }

    public function getAvatarAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['avatar'], ['http://', 'https://'])) {
            return $this->attributes['avatar'];
        }
        $PHP_SELF=$_SERVER['PHP_SELF'];
        $url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);

        if (empty($this->attributes['avatar'])) {
            $this->attributes['avatar'] = 'none.jpg';
        }

        return $url.'avatars/'.$this->attributes['avatar'];
    }

    public function getSexAttribute()
    {
        if (empty($this->attributes['sex'])) {
            $this->attributes['sex'] = '暂未选择~';
        }

        return $this->attributes['sex'];
    }

    public function getAgeAttribute()
    {
        if (empty($this->attributes['age'])) {
            $this->attributes['age'] = '暂未填写~';
        }

        return $this->attributes['age'];
    }

    public function getIntroductionAttribute()
    {
        if (empty($this->attributes['introduction'])) {
            $this->attributes['introduction'] = '暂未填写~';
        }

        return $this->attributes['introduction'];
    }
}
