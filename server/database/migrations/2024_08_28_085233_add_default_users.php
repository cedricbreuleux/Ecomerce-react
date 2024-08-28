<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up()
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'first_name' => 'admin',
            'last_name' => 'admin',
            'birth_date' => '1996-06-14',
            'role' => 'admin',
            'is_google_user' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
            'first_name' => 'test',
            'last_name' => 'test',
            'birth_date' => '1996-06-14',
            'role' => 'user',
            'is_google_user' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorie')->insert([
            'name'=>'Téléphonie',
            'categorie_name'=> NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('collection')->insert([
            'name'=>'Iphone',
            'categorie_name'=> 'Téléphonie',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'Iphone 26 ultras',
            'caracteristique'=> 'Le meilleur iphone du marché.',
            'collection_name' => 'Iphone',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 1,
            'urlPhoto'=> 'photosArticle/HsId0qdJxqTRYPnRbTxHBMXKxOi3ZUCOysrnXjNd.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'Iphone 26 ultras',
            'caracteristique'=> 'Le meilleur iphone du marché.',
            'collection_name' => 'Iphone',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 2,
            'urlPhoto'=> 'photosArticle/HsId0qdJxqTRYPnRbTxHBMXKxOi3ZUCOysrnXjNd.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'Iphone 26 ultras',
            'caracteristique'=> 'Le meilleur iphone du marché.',
            'collection_name' => 'Iphone',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 3,
            'urlPhoto'=> 'photosArticle/HsId0qdJxqTRYPnRbTxHBMXKxOi3ZUCOysrnXjNd.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'Iphone 26 ultras',
            'caracteristique'=> 'Le meilleur iphone du marché.',
            'collection_name' => 'Iphone',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 4,
            'urlPhoto'=> 'photosArticle/HsId0qdJxqTRYPnRbTxHBMXKxOi3ZUCOysrnXjNd.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'Iphone 26 ultras',
            'caracteristique'=> 'Le meilleur iphone du marché.',
            'collection_name' => 'Iphone',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 5,
            'urlPhoto'=> 'photosArticle/HsId0qdJxqTRYPnRbTxHBMXKxOi3ZUCOysrnXjNd.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorie')->insert([
            'name'=>'Gaming',
            'categorie_name'=> NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('collection')->insert([
            'name'=>'Ordinateur',
            'categorie_name'=> 'Gaming',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'PC ALIEN',
            'caracteristique'=> 'Le meilleur iphone du marché.',
            'collection_name' => 'Ordinateur',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 6,
            'urlPhoto'=> 'photosArticle/ZE9CMcKJus0f2YlgMmabCUza9r6ceXOIP2Pai9U3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'PC ALIEN',
            'caracteristique'=> 'Le meilleur PC du marché.',
            'collection_name' => 'Ordinateur',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 7,
            'urlPhoto'=> 'photosArticle/ZE9CMcKJus0f2YlgMmabCUza9r6ceXOIP2Pai9U3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'PC ALIEN',
            'caracteristique'=> 'Le meilleur PC du marché.',
            'collection_name' => 'Ordinateur',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 8,
            'urlPhoto'=> 'photosArticle/ZE9CMcKJus0f2YlgMmabCUza9r6ceXOIP2Pai9U3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'PC ALIEN',
            'caracteristique'=> 'Le meilleur PC du marché.',
            'collection_name' => 'Ordinateur',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 9,
            'urlPhoto'=> 'photosArticle/ZE9CMcKJus0f2YlgMmabCUza9r6ceXOIP2Pai9U3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'description'=>'PC ALIEN',
            'caracteristique'=> 'Le meilleur PC du marché.',
            'collection_name' => 'Ordinateur',
            'prix'=> 15999,
            'poids'=> 2,
            'couleur'=> 'or',
            'promotion'=> 5,
            'stock_bobine' => 10,
            'stock_bande' => 100,
            'stock_vrac' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photosArticles')->insert([
            'articleId'=> 10,
            'urlPhoto'=> 'photosArticle/ZE9CMcKJus0f2YlgMmabCUza9r6ceXOIP2Pai9U3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorie')->insert([
            'name'=>'Photographie',
            'categorie_name'=> NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorie')->insert([
            'name'=>'Protection',
            'categorie_name'=> NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorie')->insert([
            'name'=>'Assurance',
            'categorie_name'=> NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
