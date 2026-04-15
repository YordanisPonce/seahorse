<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tracked_visits', function (Blueprint $table) {
            $table->id();

            $table->string('token')->nullable()->index();

            $table->ipAddress('ip')->nullable();
            $table->json('ips')->nullable();

            $table->text('user_agent')->nullable();
            $table->string('method')->nullable();

            $table->text('referer')->nullable();
            $table->text('origin')->nullable();
            $table->string('host')->nullable();

            $table->json('headers')->nullable();
            $table->text('bearer_token')->nullable();

            $table->text('full_url')->nullable();
            $table->text('url')->nullable();
            $table->string('path')->nullable();

            $table->string('domain')->nullable();
            $table->string('scheme')->nullable();
            $table->string('port')->nullable();

            $table->boolean('is_secure')->default(false);
            $table->boolean('is_ajax')->default(false);
            $table->boolean('expects_json')->default(false);

            $table->string('remote_addr')->nullable();
            $table->text('http_user_agent')->nullable();
            $table->string('request_method_raw')->nullable();
            $table->text('request_uri')->nullable();
            $table->text('http_referer_raw')->nullable();

            $table->json('server_data')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tracked_visits');
    }
};