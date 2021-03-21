<?php
declare(strict_types=1);

namespace App\Models;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function getData(): string
    {
        return "{$this->id} : {$this->name} ({$this->age})";
    }

    public function scopeNameEqual($query, string $str): Builder
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan(Builder $query, int $n): Builder
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan(Builder $query, int $n): Builder
    {
        return $query->where('age', '<=', $n);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ScopePerson());
    }
}
