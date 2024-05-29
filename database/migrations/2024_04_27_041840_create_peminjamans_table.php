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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('peminjam_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('barang_id')->unsigned();
            $table->integer('jumlah');
            $table->double('tanggal_peminjam');
            $table->double('tanggal_kembalian');
            $table->double('kondisi');
            $table->timestamps();
        });
        Schema::table('peminjamans', function(Blueprint $table) {

            $table->foreign('peminjam_id')->references('id')->on('peminjams')
                   ->onUpdate('cascade') ->onDelete('cascade');

                   $table->foreign('user_id')->references('id')->on('users')
                   ->onUpdate('cascade') ->onDelete('cascade');       
                  
              
        $table->foreign('barang_id')->references('id')->on('barangs')
                   ->onUpdate('cascade') ->onDelete('cascade');
           });
   

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropForeign('peminjamans_peminjam_id_foreign');
        });
   
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropIndex('peminjamans_peminjam_id_foreign');
        });

        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_peminjam_id_foreign');
        });
   
        Schema::table('users', function(Blueprint $table) {
            $table->dropIndex('users_peminjam_id_foreign');
        });


        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropForeign('peminjamans_barang_id_foreign');
        });
   
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropIndex('peminjamans_barang_id_foreign');
        });
       
        Schema::dropIfExists('peminjamans');

    }
};
