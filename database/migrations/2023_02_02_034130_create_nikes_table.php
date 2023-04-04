<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('nike', function (Blueprint $table) {

            $table->id();
            $table->float("cm");
            $table->float("eu");
            $table->float("uk");
            $table->float("usm");
            $table->float("usw");
            $table->dateTime("updated_at")->nullable();
            $table->dateTime("created_at")->nullable();
        });


        DB::table('nike')->insert(
            array(
                ['cm' => '22.5',
                 'eu' => '35.5',
                 'uk' => '3',
                 'usm' => '3.5',
                 'usw' => '5'],

                ['cm' => '23',
                 'eu' => '36',
                 'uk' => '3.5',
                 'usm' => '4',
                 'usw' => '5.5'],

                ['cm' => '23.5',
                 'eu' => '36.5',
                 'uk' => '4',
                 'usm' => '4.5',
                 'usw' => '6'],

                ['cm' => '23.5',
                 'eu' => '37.5',
                 'uk' => '4.5',
                 'usm' => '5',
                 'usw' => '6.5'],

                ['cm' => '24',
                 'eu' => '37',
                 'uk' => '4.5',
                 'usm' => '5.5',
                 'usw' => '7'],

                ['cm' => '24',
                 'eu' => '38.5',
                 'uk' => '5.5',
                 'usm' => '6',
                 'usw' => '7.5'],

                ['cm' => '24.5',
                 'eu' => '39',
                 'uk' => '6',
                 'usm' => '6.5',
                 'usw' => '8'],

                ['cm' => '25',
                 'eu' => '40',
                 'uk' => '6',
                 'usm' => '7',
                 'usw' => '8.5'],

                ['cm' => '25.5',
                 'eu' => '40.5',
                 'uk' => '6.5',
                 'usm' => '7.5',
                 'usw' => '9'],

                ['cm' => '26',
                 'eu' => '41',
                 'uk' => '7',
                 'usm' => '8',
                 'usw' => '9.5'],

                ['cm' => '26.5',
                 'eu' => '42',
                 'uk' => '7.5',
                 'usm' => '8.5',
                 'usw' => '10'],

                ['cm' => '27',
                 'eu' => '42.5',
                 'uk' => '8',
                 'usm' => '9',
                 'usw' => '10.5'],

                ['cm' => '27.5',
                 'eu' => '43',
                 'uk' => '8.5',
                 'usm' => '9.5',
                 'usw' => '11'],

                ['cm' => '28',
                 'eu' => '44',
                 'uk' => '9',
                 'usm' => '10',
                 'usw' => '11.5'],

                ['cm' => '28.5',
                 'eu' => '44.5',
                 'uk' => '9.5',
                 'usm' => '10.5',
                 'usw' => '12'],

                ['cm' => '29',
                 'eu' => '45',
                 'uk' => '10',
                 'usm' => '11',
                 'usw' => '12.5'],

                ['cm' => '29.5',
                 'eu' => '45.5',
                 'uk' => '10.5',
                 'usm' => '11.5',
                 'usw' => '13'],

                ['cm' => '30',
                 'eu' => '46',
                 'uk' => '11',
                 'usm' => '12',
                 'usw' => '13.5'],

                ['cm' => '30.5',
                 'eu' => '47',
                 'uk' => '11.5',
                 'usm' => '12.5',
                 'usw' => '14'],

                ['cm' => '31',
                 'eu' => '47.5',
                 'uk' => '12',
                 'usm' => '13',
                 'usw' => '14.5'],

                ['cm' => '31.5',
                 'eu' => '48',
                 'uk' => '12.5',
                 'usm' => '13.5',
                 'usw' => '15'],

                ['cm' => '32',
                 'eu' => '48.5',
                 'uk' => '13',
                 'usm' => '14',
                 'usw' => '15.5'],

                ['cm' => '32.5',
                 'eu' => '49',
                 'uk' => '13.5',
                 'usm' => '14.5',
                 'usw' => '16'],

                ['cm' => '33',
                 'eu' => '49.5',
                 'uk' => '14',
                 'usm' => '15',
                 'usw' => '16.5'],

                ['cm' => '33.5',
                 'eu' => '50',
                 'uk' => '14.5',
                 'usm' => '15.5',
                 'usw' => '17'],

                ['cm' => '34',
                 'eu' => '50.5',
                 'uk' => '15',
                 'usm' => '16',
                 'usw' => '17.5']
            )
        );
    }


    public function down()
    {
        Schema::dropIfExists('nike');
    }
};
