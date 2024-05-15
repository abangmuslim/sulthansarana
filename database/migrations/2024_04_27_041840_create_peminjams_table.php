<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('barangs_id')->unsigned();
            $table->bigInteger('pinjams_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->integer('jumlah');
            $table->double('tanggal_pinjam');
            $table->double('tanggal_kembalian');
            $table->double('kondisi');
            $table->timestamps();
        });

        Schema::table('peminjams', function(Blueprint $table) {

         $table->foreign('barangs_id')->references('id')->on('barangs')
                ->onUpdate('cascade')->onDelete('cascade');
               
           
     $table->foreign('pinjams_id')->references('id')->on('pinjams')
                ->onUpdate('cascade')->onDelete('cascade');

     $table->foreign('users_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropForeign('peminjams_barangs_id_foreign');
        });
   
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropIndex('peminjams_barangs_id_foreign');
        });

        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropForeign('peminjams_pinjams_id_foreign');
        });
   
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropIndex('peminjams_pinjams_id_foreign');
        });

        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropForeign('peminjams_users_id_foreign');
        });
   
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropIndex('peminjams_users_id_foreign');
        });
       
        Schema::dropIfExists('peminjams');
    }

};
