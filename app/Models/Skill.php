<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	use HasFactory;

	public function userProfiles(): BelongsToMany
	{
		return $this->belongsToMany(UserProfile::class, 'user_profile_skill');
	}
}
