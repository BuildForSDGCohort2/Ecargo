<?php namespace Spot\Shipment\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class ChangeTranslate extends Migration {

	public function up()
    {
		Schema::table('rainlab_translate_messages', function($table) {
			$table->string('code', 500)->change();
        });
	}

	public function down()
    {
		Schema::table('rainlab_translate_messages', function($table) {
			$table->string('code', 500)->change();
        });
	}
}
