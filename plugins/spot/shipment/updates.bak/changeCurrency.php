<?php namespace Spot\Shipment\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class ChangeCurrency extends Migration {

	public function up()
    {
		if (!Schema::hasColumn('responsiv_currency_currencies', 'with_space')) {
			Schema::table('responsiv_currency_currencies', function($table) {
	            $table->boolean('with_space')->default(false);
			});
		}
	}

	public function down()
    {
		if (Schema::hasColumn('responsiv_currency_currencies', 'with_space')) {
            Schema::table('responsiv_currency_currencies', function($table)
            {
                $table->dropColumn('with_space');
            });
        }
	}
}
