<?php

    namespace App\Containers\Post\Data\Seeders;

    use App\Containers\Post\Models\Post;
    use App\Ship\Parents\Seeders\Seeder;

    class PostSeeder extends Seeder
    {
        public function run()
        {
            factory(Post::class, 20)->create();
        }
    }
