<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharitySearchIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('charities', function(Blueprint $table)
        {
            DB::statement("ALTER TABLE charities ADD COLUMN searchtext TSVECTOR");
            DB::statement("UPDATE charities SET searchtext = to_tsvector('russian', full_name || '' || locality || '' || purpose || '' || about)");
            DB::statement("CREATE INDEX searchtext_gin ON charities USING GIN(searchtext)");
            DB::statement("CREATE TRIGGER ts_searchtext BEFORE INSERT OR UPDATE ON charities FOR EACH ROW EXECUTE PROCEDURE tsvector_update_trigger('searchtext', 'pg_catalog.russian', 'full_name', 'locality', 'purpose', 'about')");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TRIGGER IF EXISTS tsvector_update_trigger ON charities");
        DB::statement("DROP INDEX IF EXISTS searchtext_gin");
        DB::statement("ALTER TABLE charities DROP COLUMN searchtext");
    }
}
