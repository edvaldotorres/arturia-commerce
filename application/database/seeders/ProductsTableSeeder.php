<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->get();

        $products = [
            ['Caneca', 'Caneca Personalizada', 'Caneca de cerâmica personalizável com opções de design exclusivas.', 19.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708007845948/caneca.png?ex=65e9ff89&is=65d78a89&hm=f60cde32707f1e1f960f26e03a66145e61bf2f78db66705dd9f009ce29471964&format=webp&quality=lossless&'],
            ['Tênis', 'Tênis de Corrida', 'Tênis de corrida leve e respirável, ideal para longas distâncias.', 99.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708859416647/tenis.png?ex=65e9ff8a&is=65d78a8a&hm=09be0bdf8987a26fba3643a2b621f78c9a485e135b24e65c262e36469ad72b0d&=&format=webp&quality=lossless&width=358&height=365'],
            ['Moletom', 'Moletom Com Capuz', 'Moletom com capuz, bolsos frontais e tecido aconchegante.', 59.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283676227866704/blusa-1.png?ex=65e9ff82&is=65d78a82&hm=941d7a06e0b03cea29abc140eaaa388102f36516309abcc81a64c2a72f6bdc61&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Camisa', 'Camisa Polo', 'Camisa polo de algodão com variedade de cores e ajuste confortável.', 39.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283676668133426/camisa.png?ex=65e9ff82&is=65d78a82&hm=7c56fe322ac7533981472d3f7112d934d73c68d323abe64d9031d16a7257fc25&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Caneca', 'Caneca Mágica', 'Caneca mágica que revela imagens ao ser aquecida. Surpreenda-se!', 29.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708007845948/caneca.png?ex=65e9ff89&is=65d78a89&hm=f60cde32707f1e1f960f26e03a66145e61bf2f78db66705dd9f009ce29471964&format=webp&quality=lossless&'],
            ['Tênis', 'Tênis para Caminhada', 'Confortáveis para caminhadas longas, com suporte e durabilidade.', 89.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708859416647/tenis.png?ex=65e9ff8a&is=65d78a8a&hm=09be0bdf8987a26fba3643a2b621f78c9a485e135b24e65c262e36469ad72b0d&=&format=webp&quality=lossless&width=358&height=365'],
            ['Moletom', 'Moletom Sem Capuz', 'Moletom clássico sem capuz, ideal para o dia a dia.', 49.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283676227866704/blusa-1.png?ex=65e9ff82&is=65d78a82&hm=941d7a06e0b03cea29abc140eaaa388102f36516309abcc81a64c2a72f6bdc61&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Camisa', 'Camisa Casual', 'Perfeita para um look casual, disponível em várias cores.', 29.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283676668133426/camisa.png?ex=65e9ff82&is=65d78a82&hm=7c56fe322ac7533981472d3f7112d934d73c68d323abe64d9031d16a7257fc25&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Caneca', 'Caneca de Porcelana', 'Elegante caneca de porcelana, ideal para seu café ou chá.', 24.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708007845948/caneca.png?ex=65e9ff89&is=65d78a89&hm=f60cde32707f1e1f960f26e03a66145e61bf2f78db66705dd9f009ce29471964&format=webp&quality=lossless&'],
            ['Tênis', 'Tênis para Academia', 'Design moderno e suporte para todo tipo de atividade física.', 79.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708859416647/tenis.png?ex=65e9ff8a&is=65d78a8a&hm=09be0bdf8987a26fba3643a2b621f78c9a485e135b24e65c262e36469ad72b0d&=&format=webp&quality=lossless&width=358&height=365'],
            ['Moletom', 'Moletom com Zíper', 'Moletom com zíper frontal, prático para o uso diário.', 69.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283675795591228/blusa.png?ex=65e9ff82&is=65d78a82&hm=1ed69f41d882dc5b8065c44d3cd4036d89e851fbea7726192d24dd51fedd372a&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Camisa', 'Camisa Social', 'Camisa social sofisticada para ocasiões formais.', 49.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283676668133426/camisa.png?ex=65e9ff82&is=65d78a82&hm=7c56fe322ac7533981472d3f7112d934d73c68d323abe64d9031d16a7257fc25&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Caneca', 'Caneca Térmica', 'Caneca térmica com tampa e alça, mantém a temperatura por mais tempo.', 34.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708007845948/caneca.png?ex=65e9ff89&is=65d78a89&hm=f60cde32707f1e1f960f26e03a66145e61bf2f78db66705dd9f009ce29471964&format=webp&quality=lossless&'],
            ['Tênis', 'Tênis Casual', 'Tênis casual para um look despojado e confortável.', 69.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283708859416647/tenis.png?ex=65e9ff8a&is=65d78a8a&hm=09be0bdf8987a26fba3643a2b621f78c9a485e135b24e65c262e36469ad72b0d&=&format=webp&quality=lossless&width=358&height=365'],
            ['Moletom', 'Moletom com Capuz', 'Moletom com capuz e bolso canguru, ideal para dias frios.', 79.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283675795591228/blusa.png?ex=65e9ff82&is=65d78a82&hm=1ed69f41d882dc5b8065c44d3cd4036d89e851fbea7726192d24dd51fedd372a&=&format=webp&quality=lossless&width=1081&height=1081'],
            ['Camisa', 'Camisa Estampada', 'Camisa estampada com variedade de padrões e tecido leve.', 39.99, 'https://media.discordapp.net/attachments/1142059791276064819/1210283676668133426/camisa.png?ex=65e9ff82&is=65d78a82&hm=7c56fe322ac7533981472d3f7112d934d73c68d323abe64d9031d16a7257fc25&=&format=webp&quality=lossless&width=1081&height=1081'],
        ];

        foreach ($products as [$categoryName, $name, $description, $price, $image]) {
            $category = $categories->where('name', $categoryName)->first();
            DB::table('products')->insert([
                'category_id' => $category->id,
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'image' => $image,
            ]);
        }
    }
}
