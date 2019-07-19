<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Kinh Tế'
        ]
        
    );
    Category::create([
        'name' => 'Giáo Dục'
    ]
    
);
    Category::create([
    'name' => 'Đời Sống'
]

);
Category::create([
    'name' => 'Thời Trang'
]

);
Category::create([
    'name' => 'Giải Trí'
]

);
Category::create([
    'name' => 'Bóng Đá'
]

);
    }
}
