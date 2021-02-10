<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            $table->string('title', 50);
            $table->string('subtitle');
            $table->text('description');
            $table->datetime('publication_date');
            $table->boolean('published');

            $table->foreingId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table){
            $table->dropColumn([
                'title',
                'subtitle',
                'description',
                'publication_date',
                'published',

            ]);
            $table->dropConstrainedForeignId('user_id');
        });
    }
}
