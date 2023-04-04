<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('adidas', function (Blueprint $table) {

            $table->id();
            $table->float("cm");
            $table->string("eu");
            $table->float("uk");
            $table->float("usm");
            $table->string("usw");
            $table->dateTime("updated_at")->nullable();
            $table->dateTime("created_at")->nullable();
        });


        DB::table('adidas')->insert(
            array(
                ['cm' => '22.1',
                 'eu' => '36',
                 'uk' => '3.5',
                 'usm' => '4',
                 'usw' => '5'],

                ['cm' => '22.5',
                 'eu' => '36 2/3',
                 'uk' => '4',
                 'usm' => '4.5',
                 'usw' => '5.5'],

                ['cm' => '22.9',
                 'eu' => '37 1/3',
                 'uk' => '4.5',
                 'usm' => '5',
                 'usw' => '6'],

                ['cm' => '23.3',
                 'eu' => '38',
                 'uk' => '5',
                 'usm' => '5.5',
                 'usw' => '6.5'],

                ['cm' => '23.8',
                 'eu' => '38 2/3',
                 'uk' => '5.5',
                 'usm' => '6',
                 'usw' => '7'],

                ['cm' => '24.2',
                 'eu' => '39 1/3',
                 'uk' => '6',
                 'usm' => '6.5',
                 'usw' => '7.5'],

                ['cm' => '24.6',
                 'eu' => '40',
                 'uk' => '6.5',
                 'usm' => '7',
                 'usw' => '8'],

                ['cm' => '25',
                 'eu' => '40 2/3',
                 'uk' => '7',
                 'usm' => '7.5',
                 'usw' => '8.5'],

                ['cm' => '25.5',
                 'eu' => '41 1/3',
                 'uk' => '7.5',
                 'usm' => '8',
                 'usw' => '9'],

                ['cm' => '25.9',
                 'eu' => '42',
                 'uk' => '8',
                 'usm' => '8.5',
                 'usw' => '9.5'],

                ['cm' => '26.3',
                 'eu' => '42 2/3',
                 'uk' => '8.5',
                 'usm' => '9',
                 'usw' => '10'],

                ['cm' => '26.7',
                 'eu' => '43 1/3',
                 'uk' => '9',
                 'usm' => '9.5',
                 'usw' => '10.5'],

                ['cm' => '27.1',
                 'eu' => '44',
                 'uk' => '9.5',
                 'usm' => '10',
                 'usw' => '11'],

                ['cm' => '27.6',
                 'eu' => '44 2/3',
                 'uk' => '10',
                 'usm' => '10.5',
                 'usw' => '11.5'],

                ['cm' => '28',
                 'eu' => '45 1/3',
                 'uk' => '10.5',
                 'usm' => '11',
                 'usw' => '12'],

                ['cm' => '28.4',
                 'eu' => '46',
                 'uk' => '11',
                 'usm' => '11.5',
                 'usw' => '12.5'],

                ['cm' => '28.8',
                 'eu' => '46 2/3',
                 'uk' => '11.5',
                 'usm' => '12',
                 'usw' => '13'],

                ['cm' => '29.3',
                 'eu' => '47 1/3',
                 'uk' => '12',
                 'usm' => '12.5',
                 'usw' => '13.5'],

                ['cm' => '29.7',
                 'eu' => '48',
                 'uk' => '12.5',
                 'usm' => '13',
                 'usw' => '14'],

                ['cm' => '30.1',
                 'eu' => '48 2/3',
                 'uk' => '13',
                 'usm' => '13.5',
                 'usw' => '14.5'],

                ['cm' => '30.5',
                 'eu' => '49 1/3',
                 'uk' => '13.5',
                 'usm' => '14',
                 'usw' => '15'],

                ['cm' => '31',
                 'eu' => '50',
                 'uk' => '14',
                 'usm' => '14.5',
                 'usw' => '15.5'],

                ['cm' => '31.4',
                 'eu' => '50 2/3',
                 'uk' => '14.5',
                 'usm' => '15',
                 'usw' => '--'],

                ['cm' => '31.8',
                 'eu' => '51 1/3',
                 'uk' => '15',
                 'usm' => '16',
                 'usw' => '--'],

                ['cm' => '32.6',
                 'eu' => '52 2/3',
                 'uk' => '16',
                 'usm' => '17',
                 'usw' => '--'],

                ['cm' => '33.5',
                 'eu' => '53 1/3',
                 'uk' => '17',
                 'usm' => '18',
                 'usw' => '--'],

                ['cm' => '34.3',
                 'eu' => '54 2/3',
                 'uk' => '18',
                 'usm' => '19',
                 'usw' => '--'],

                ['cm' => '35.2',
                 'eu' => '55 2/3',
                 'uk' => '19',
                 'usm' => '20',
                 'usw' => '--']
            )
        );
    }


    public function down()
    {
        Schema::dropIfExists('adidas');
    }
};
