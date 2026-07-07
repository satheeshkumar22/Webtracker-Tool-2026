<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AttendanceSetting;
use App\Models\EmployeeShift;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $attendanceSetting = AttendanceSetting::first();

        if($attendanceSetting){
            EmployeeShift::where('id', $attendanceSetting->default_employee_shift)
            ->update(['halfday_mark_time' => '13:00:00']);
        }else{
            $employeeShift = EmployeeShift::first();
            if($employeeShift){
                EmployeeShift::where('halfday_mark_time', null)->update(['halfday_mark_time' => '13:00:00']);
            }
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
