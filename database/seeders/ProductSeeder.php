<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Scarf',
                'slug' => 'scarf',
                'price' => 140000,
                'material' => 'Voal Premium',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in dolor nibh. Proin mattis ligula in ante auctor fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras a sem molestie, pulvinar turpis vitae, volutpat lorem. Suspendisse a ligula id nisl lobortis posuere. Mauris dui nulla, facilisis ac auctor tincidunt, accumsan vitae nunc. Sed imperdiet eleifend odio suscipit placerat. Etiam nec est viverra, imperdiet ex non, fermentum massa. Curabitur ac eros eu sapien elementum ullamcorper. Suspendisse imperdiet, urna vestibulum tincidunt gravida, massa elit vulputate sapien, ac euismod ante nunc nec neque. Cras egestas neque felis, vehicula venenatis tellus ullamcorper at. Donec mollis sit amet mauris quis mollis.

                Aenean in turpis sit amet nulla bibendum aliquam. Donec at nulla dictum, tristique dui a, consequat neque. Cras venenatis vitae diam fermentum mollis. Sed a lectus eget turpis hendrerit aliquam eget non risus. Praesent finibus accumsan diam vitae sagittis. Ut maximus et lacus a ornare. Vivamus tempor arcu ac lobortis tempor. In vulputate dui vel lorem interdum, ac convallis tortor scelerisque. Donec posuere odio risus, id aliquam eros rutrum in. Donec mollis nulla ac risus ornare, eu mattis mauris bibendum. Fusce leo lectus, tincidunt eu dolor sit amet, tempus venenatis tellus. Duis in nisi tellus. Vivamus feugiat neque vehicula lacus placerat, sed lobortis nisi mollis.',
                'product_status' => 'active',
                'agenda_status' => 'release'
            ],
            [
                'name' => 'Tote Bag',
                'slug' => 'tote-bag',
                'price' => 210000,
                'material' => 'Canvas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in dolor nibh. Proin mattis ligula in ante auctor fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras a sem molestie, pulvinar turpis vitae, volutpat lorem. Suspendisse a ligula id nisl lobortis posuere. Mauris dui nulla, facilisis ac auctor tincidunt, accumsan vitae nunc. Sed imperdiet eleifend odio suscipit placerat. Etiam nec est viverra, imperdiet ex non, fermentum massa. Curabitur ac eros eu sapien elementum ullamcorper. Suspendisse imperdiet, urna vestibulum tincidunt gravida, massa elit vulputate sapien, ac euismod ante nunc nec neque. Cras egestas neque felis, vehicula venenatis tellus ullamcorper at. Donec mollis sit amet mauris quis mollis.

                Aenean in turpis sit amet nulla bibendum aliquam. Donec at nulla dictum, tristique dui a, consequat neque. Cras venenatis vitae diam fermentum mollis. Sed a lectus eget turpis hendrerit aliquam eget non risus. Praesent finibus accumsan diam vitae sagittis. Ut maximus et lacus a ornare. Vivamus tempor arcu ac lobortis tempor. In vulputate dui vel lorem interdum, ac convallis tortor scelerisque. Donec posuere odio risus, id aliquam eros rutrum in. Donec mollis nulla ac risus ornare, eu mattis mauris bibendum. Fusce leo lectus, tincidunt eu dolor sit amet, tempus venenatis tellus. Duis in nisi tellus. Vivamus feugiat neque vehicula lacus placerat, sed lobortis nisi mollis.',
                'product_status' => 'active',
                'agenda_status' => 'release'
            ],
            [
                'name' => 'Shirt',
                'slug' => 'shirt',
                'price' => 150000,
                'material' => 'Voal Premium',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in dolor nibh. Proin mattis ligula in ante auctor fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras a sem molestie, pulvinar turpis vitae, volutpat lorem. Suspendisse a ligula id nisl lobortis posuere. Mauris dui nulla, facilisis ac auctor tincidunt, accumsan vitae nunc. Sed imperdiet eleifend odio suscipit placerat. Etiam nec est viverra, imperdiet ex non, fermentum massa. Curabitur ac eros eu sapien elementum ullamcorper. Suspendisse imperdiet, urna vestibulum tincidunt gravida, massa elit vulputate sapien, ac euismod ante nunc nec neque. Cras egestas neque felis, vehicula venenatis tellus ullamcorper at. Donec mollis sit amet mauris quis mollis.

                Aenean in turpis sit amet nulla bibendum aliquam. Donec at nulla dictum, tristique dui a, consequat neque. Cras venenatis vitae diam fermentum mollis. Sed a lectus eget turpis hendrerit aliquam eget non risus. Praesent finibus accumsan diam vitae sagittis. Ut maximus et lacus a ornare. Vivamus tempor arcu ac lobortis tempor. In vulputate dui vel lorem interdum, ac convallis tortor scelerisque. Donec posuere odio risus, id aliquam eros rutrum in. Donec mollis nulla ac risus ornare, eu mattis mauris bibendum. Fusce leo lectus, tincidunt eu dolor sit amet, tempus venenatis tellus. Duis in nisi tellus. Vivamus feugiat neque vehicula lacus placerat, sed lobortis nisi mollis.',
                'product_status' => 'active',
                'agenda_status' => 'release'
            ],
            [
                'name' => 'Bag',
                'slug' => 'bag',
                'price' => 300000,
                'material' => 'Canvas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in dolor nibh. Proin mattis ligula in ante auctor fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras a sem molestie, pulvinar turpis vitae, volutpat lorem. Suspendisse a ligula id nisl lobortis posuere. Mauris dui nulla, facilisis ac auctor tincidunt, accumsan vitae nunc. Sed imperdiet eleifend odio suscipit placerat. Etiam nec est viverra, imperdiet ex non, fermentum massa. Curabitur ac eros eu sapien elementum ullamcorper. Suspendisse imperdiet, urna vestibulum tincidunt gravida, massa elit vulputate sapien, ac euismod ante nunc nec neque. Cras egestas neque felis, vehicula venenatis tellus ullamcorper at. Donec mollis sit amet mauris quis mollis.

                Aenean in turpis sit amet nulla bibendum aliquam. Donec at nulla dictum, tristique dui a, consequat neque. Cras venenatis vitae diam fermentum mollis. Sed a lectus eget turpis hendrerit aliquam eget non risus. Praesent finibus accumsan diam vitae sagittis. Ut maximus et lacus a ornare. Vivamus tempor arcu ac lobortis tempor. In vulputate dui vel lorem interdum, ac convallis tortor scelerisque. Donec posuere odio risus, id aliquam eros rutrum in. Donec mollis nulla ac risus ornare, eu mattis mauris bibendum. Fusce leo lectus, tincidunt eu dolor sit amet, tempus venenatis tellus. Duis in nisi tellus. Vivamus feugiat neque vehicula lacus placerat, sed lobortis nisi mollis.',
                'product_status' => 'active',
                'agenda_status' => 'release'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
