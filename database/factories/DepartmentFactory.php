<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Công nghệ thông tin', 
                'Kinh tế', 
                'Cơ khí', 
                'Xây dựng', 
                'Điện tử - Viễn thông',
                'Môi trường'
            ]),
        ];
    }
}
