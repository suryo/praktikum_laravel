<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat contoh data produk
        $products = [
            [
                'title' => 'Product 1',
                'description' => 'Description of Product 1',
                'price' => 100.00,
                'discount_percentage' => 10.00,
                'rating' => 4.5,
                'stock' => 100,
                'brand' => 'Brand A',
                'category' => 'Category 1',
                'thumbnail' => 'product1.jpg',
                'images' => json_encode(['image1.jpg', 'image2.jpg']),
            ],
            [
                'title' => 'Product 2',
                'description' => 'Description of Product 2',
                'price' => 150.00,
                'discount_percentage' => null,
                'rating' => 4.0,
                'stock' => 50,
                'brand' => 'Brand B',
                'category' => 'Category 2',
                'thumbnail' => 'product2.jpg',
                'images' => json_encode(['image3.jpg', 'image4.jpg']),
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Masukkan data produk ke dalam database
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
