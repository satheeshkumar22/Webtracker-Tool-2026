<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Country;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Country::where('iso', 'CD')
        ->where('iso3', 'COD')
        ->update(['phonecode' => 243]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Country::where('iso', 'CD')
        ->where('iso3', 'COD')
        ->update(['phonecode' => 242]);
    }
};
