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
            $table->bigInteger('pinjam_id')->unsigned();
            $table->bigInteger('barang_id')->unsigned();
            $table->integer('jumlah');
            $table->double('tanggal_pinjam');
            $table->double('tanggal_kembalian');
            $table->double('kondisi');
            $table->timestamps();
        });
        Schema::table('peminjams', function(Blueprint $table) {

            $table->foreign('pinjam_id')->references('id')->on('pinjams')
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
        Schema::table('peminjmas', function(Blueprint $table) {
            $table->dropForeign('peminjmas_pinjam_id_foreign');
        });
   
        Schema::table('peminjmas', function(Blueprint $table) {
            $table->dropIndex('peminjmas_pinjam_id_foreign');
        });

        Schema::table('peminjmas', function(Blueprint $table) {
            $table->dropForeign('peminjmas_barang_id_foreign');
        });
   
        Schema::table('peminjmas', function(Blueprint $table) {
            $table->dropIndex('peminjmas_barang_id_foreign');
        });
       
        Schema::dropIfExists('peminjmas');

    }
};
