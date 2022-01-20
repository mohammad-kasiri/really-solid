<?php

namespace Task\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Task\Factory\TaskFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id' , 'title' , 'description'];

    public static function schema(){
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title' , 30);
            $table->string('description' , 500);
            $table->timestamps();
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory()
    {
        return TaskFactory::new();
    }
}
