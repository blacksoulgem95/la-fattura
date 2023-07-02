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
        Schema::create('legal_entities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("legal_name");
            $table->string("fiscal_code")->nullable();
            $table->string("vat_id")->nullable();

            $table->string("contact_email")->nullable();
            $table->string("contact_pec")->nullable();

            $table->string("sdi_code")->nullable();

            $table->string("address_line_1")->nullable();
            $table->string("address_line_2")->nullable();
            $table->string("address_zip")->nullable();
            $table->string("address_city")->nullable();
            $table->string("address_county")->nullable();
            $table->string("address_country")->nullable();

            $table->boolean('is_customer')->default(false);
            $table->boolean('is_provider')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_entities');
    }
};
