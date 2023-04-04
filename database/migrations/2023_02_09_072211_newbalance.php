<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('newbalance', function (Blueprint $table) {

            $table->id();
            $table->float("cm");
            $table->float("eu");
            $table->float("uk");
            $table->float("usm");
            $table->string("usw");
            $table->dateTime("updated_at")->nullable();
            $table->dateTime("created_at")->nullable();
        });

        DB::table('newbalance')->insert(
            array(
                ['cm' => '22',
                 'eu' => '36',
                 'uk' => '3.5',
                 'usm' => '4',
                 'usw' => '5.5'],

                ['cm' => '22.5',
                 'eu' => '37',
                 'uk' => '4',
                 'usm' => '4.5',
                 'usw' => '6'],

                ['cm' => '23',
                 'eu' => '37.5',
                 'uk' => '4.5',
                 'usm' => '5',
                 'usw' => '6.5'],

                ['cm' => '23.5',
                 'eu' => '38',
                 'uk' => '5',
                 'usm' => '5.5',
                 'usw' => '7'],

                ['cm' => '24',
                 'eu' => '38.5',
                 'uk' => '5.5',
                 'usm' => '6',
                 'usw' => '7.5'],

                ['cm' => '24.5',
                 'eu' => '39.5',
                 'uk' => '6.5',
                 'usm' => '8.5',
                 'usw' => '7'],

                ['cm' => '25',
                 'eu' => '40',
                 'uk' => '6.5',
                 'usm' => '7',
                 'usw' => '8.5'],

                ['cm' => '25.5',
                 'eu' => '40.5',
                 'uk' => '7',
                 'usm' => '7.5',
                 'usw' => '9'],

                ['cm' => '26',
                 'eu' => '41.5',
                 'uk' => '7.5',
                 'usm' => '8',
                 'usw' => '9.5'],

                ['cm' => '26.5',
                 'eu' => '42',
                 'uk' => '8',
                 'usm' => '8.5',
                 'usw' => '10'],

                ['cm' => '27',
                 'eu' => '42.5',
                 'uk' => '8.5',
                 'usm' => '9',
                 'usw' => '10.5'],

                ['cm' => '27.5',
                 'eu' => '43',
                 'uk' => '9',
                 'usm' => '9.5',
                 'usw' => '11'],

                ['cm' => '28',
                 'eu' => '44',
                 'uk' => '9.5',
                 'usm' => '10',
                 'usw' => '11.5'],

                ['cm' => '28.5',
                 'eu' => '44.5',
                 'uk' => '10',
                 'usm' => '10.5',
                 'usw' => '12'],

                ['cm' => '29',
                 'eu' => '45',
                 'uk' => '10.5',
                 'usm' => '11',
                 'usw' => '12.5'],

                ['cm' => '29.5',
                 'eu' => '45.5',
                 'uk' => '11',
                 'usm' => '11.5',
                 'usw' => '13'],

                ['cm' => '30',
                 'eu' => '46.5',
                 'uk' => '11.5',
                 'usm' => '12',
                 'usw' => '13.5'],

                ['cm' => '30.5',
                 'eu' => '47',
                 'uk' => '12',
                 'usm' => '12.5',
                 'usw' => '14'],

                ['cm' => '31',
                 'eu' => '47.5',
                 'uk' => '12.5',
                 'usm' => '13',
                 'usw' => '15'],

                ['cm' => '32',
                 'eu' => '49',
                 'uk' => '13.5',
                 'usm' => '14',
                 'usw' => '--'],

                ['cm' => '33',
                 'eu' => '50',
                 'uk' => '14.5',
                 'usm' => '15',
                 'usw' => '--'],

                ['cm' => '34',
                 'eu' => '51',
                 'uk' => '15.5',
                 'usm' => '16',
                 'usw' => '--'],

                ['cm' => '35',
                 'eu' => '52',
                 'uk' => '16.5',
                 'usm' => '17',
                 'usw' => '--'],

                ['cm' => '36',
                 'eu' => '53',
                 'uk' => '17.5',
                 'usm' => '18',
                 'usw' => '--'],

                ['cm' => '37',
                 'eu' => '54',
                 'uk' => '18.5',
                 'usm' => '19',
                 'usw' => '--'],

                ['cm' => '38',
                 'eu' => '55',
                 'uk' => '19.5',
                 'usm' => '20',
                 'usw' => '--']
            )
        );
    }


    public function down()
    {
        Schema::dropIfExists('newbalance');
    }
};
