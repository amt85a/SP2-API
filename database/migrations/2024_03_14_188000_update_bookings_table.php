<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
                        DROP PROCEDURE IF EXISTS ps_bookings_agency_state;

                        CREATE PROCEDURE ps_bookings_agency_state()
                        BEGIN
                            select bookings.id as Id,bookings.reference as Reference,states.name as State, agencies.address as Agency from bookings
                            inner join states on bookings.state_id = states.id
                            inner join groups on bookings.group_id = groups.id
                            inner join agencies on groups.agency_id = agencies.id;
                        END;'
        );
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('  DROP PROCEDURE IF EXISTS ps_bookings_agency_state;');
    }
};
