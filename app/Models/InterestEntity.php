<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Interest;
use App\Models\Research;
use App\Models\Teaching;
use App\Models\Personal;

class InterestEntity extends Model
{
    /**
     * @var string
     */
    protected $table = 'fresco.expertise_entity';

    /**
     * @var string
     */
    protected $primaryKey = 'entities_id';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interest()
    {
        return $this->hasMany('App\Models\Interest','attribute_id','expertise_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interest_research()
    {
        return $this->hasMany('App\Models\Research','attribute_id','expertise_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interest_teaching()
    {
        return $this->hasMany('App\Models\Teaching','attribute_id','expertise_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interest_personal()
    {
        return $this->hasMany('App\Models\Personal','attribute_id','expertise_id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function interest_project()
    {
        return $this->hasOne('App\Models\Interest','attribute_id','expertise_id');
    }
}
