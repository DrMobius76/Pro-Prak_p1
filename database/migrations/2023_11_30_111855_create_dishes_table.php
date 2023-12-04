<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->json('allergy');
            $table->decimal('price_exc', 5,2)->default(0);
            $table->decimal('price_inc',5,2)->default(0);
            $table->enum('category', ['Voorgerecht', 'Hoofdgerecht', 'Nagerecht']);
            $table->enum('seasonCategory', ['Lente','Zomer', 'Herfst', 'Winter', 'HeelJaarRond']);
            $table->timestamps();
        });

        //Appetizers

        DB::table('dishes')->insert([
            'name' => 'Tomaten Soep',
            'allergy' => json_encode(['G:1', 'L:0', 'N:0', 'V:0', 'S:0', 'Vs:0']), 
            'price_exc' => 10.99,
            'price_inc' => 12.99,
            'category' => 'Voorgerecht',
            'seasonCategory' => 'HeelJaarRond',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Prei Room Soep',
            'allergy' => json_encode(['G:1', 'L:1', 'N:0', 'V:1' ,'S:0' ,'Vs:0']), 
            'price_exc' => 13.99,
            'price_inc' => 15.99,
            'category' => 'Voorgerecht',
            'seasonCategory' => 'HeelJaarRond',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Franse Uien Soep',
            'allergy' => json_encode(['G:1', 'L:1', 'N:0', 'V:1' ,'S:0' ,'Vs:0']), 
            'price_exc' => 11.99,
            'price_inc' => 13.99,
            'category' => 'Voorgerecht',
            'seasonCategory' => 'HeelJaarRond',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Caprese Salade',
            'allergy' => json_encode(['G:0', 'L:1', 'N:1', 'V:1', 'S:1', 'Vs:0']), 
            'price_exc' => 16.99,
            'price_inc' => 18.99,
            'category' => 'Voorgerecht',
            'seasonCategory' => 'Zomer',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Garnalen Cocktail',
            'allergy' => json_encode(['G:1', 'L:0', 'N:0', 'V:1', 'S:1', 'Vs:0']), 
            'price_exc' => 20.99,
            'price_inc' => 22.99,
            'category' => 'Voorgerecht',
            'seasonCategory' => 'HeelJaarRond',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Carpaccio van rundvlees met rucola en Parmezaanse kaas',
            'allergy' => json_encode(['G:0', 'L:1', 'N:1', 'V:0','S:1', 'Vs:0']), 
            'price_exc' => 19.99,
            'price_inc' => 21.99,
            'category' => 'Voorgerecht',
            'seasonCategory' => 'HeelJaarRond',
        ]);

        //Main dishes

        DB::table('dishes')->insert([
            'name' => 'Coq au Vin',
            'allergy' => json_encode(['G:1', 'L:0', 'N:0', 'V:0','S:1', 'Vs:0']), 
            'price_exc' => 24.99,
            'price_inc' => 26.99,
            'category' => 'Hoofdgerecht',
            'seasonCategory' => 'Zomer',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Boeuf Bourguignon',
            'allergy' => json_encode(['G:1', 'L:0', 'N:0', 'V:0','S:1', 'Vs:0']), 
            'price_exc' => 29.99,
            'price_inc' => 31.99,
            'category' => 'Hoofdgerecht',
            'seasonCategory' => 'Zomer',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Zalmfilet met citroen-dille saus, geserveerd met gestoomde groenten',
            'allergy' => json_encode(['G:1', 'L:0', 'N:0', 'V:0','S:1', 'Vs:1']), 
            'price_exc' => 33.99,
            'price_inc' => 35.99,
            'category' => 'Hoofdgerecht',
            'seasonCategory' => 'Zomer',
        ]);

        //Deserts

        DB::table('dishes')->insert([
            'name' => 'Crème Brûlée',
            'allergy' => json_encode(['G:0', 'L:1', 'N:0', 'V:1', 'S:0', 'Vs:0']), 
            'price_exc' => 8.99,
            'price_inc' => 10.99,
            'category' => 'Nagerecht',
            'seasonCategory' => 'Zomer',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Tarte Tatin',
            'allergy' => json_encode(['G:1', 'L:1', 'N:0', 'V:1', 'S:0', 'Vs:0']), 
            'price_exc' => 12.99,
            'price_inc' => 15.99,
            'category' => 'Nagerecht',
            'seasonCategory' => 'Zomer',
        ]);

        DB::table('dishes')->insert([
            'name' => 'Chocolade Lava Cake met een romige vanillesaus',
            'allergy' => json_encode(['G:1', 'L:1', 'N:0', 'V:1','S:0', 'Vs:0']), 
            'price_exc' => 8.99,
            'price_inc' => 10.99,    
            'category' => 'Nagerecht',
            'seasonCategory' => 'Zomer',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
