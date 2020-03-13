<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


use App\User;
use Modules\User\Entities\Unit;
use Modules\Project\Entities\Project;
use Modules\Project\Entities\ProjectTask;
use Modules\User\Entities\Group;
use Modules\Project\Entities\ProjectSubTask;

class StartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Create users
        $user = User::create([
            "first_name"    =>  "Mohsen",
            "last_name"     =>  "Bagheri",
            "phone_number"  =>  "09106769465",
            "job_title"     =>  "programmer",
            "password"      =>  Hash::make("admin"),
            'is_active'     =>  True
        ]);

        $second_user = User::create([
            "first_name"    =>  "Sadegh",
            "last_name"     =>  "Bagheri",
            "phone_number"  =>  "09196769466",
            "job_title"     =>  "programmer",
            "password"      =>  Hash::make("admin"),
            'is_active'     =>  True
        ]);

        // create units
        $unit = Unit::create([
            'user_id'   =>  $user->id,
            'name'      =>  "Programming"
        ]);

        $unit = Unit::create([
            'user_id'   =>  $user->id,
            'name'      =>  "Support"
        ]);

        $user->update(['unit_id'=>1]);
        $second_user->update(['unit_id'=>2]);




        // Create new project
        $project = Project::create([
            'user_id'               =>  1,
            'title'                 =>  "Golang",
            'slug'                  =>  "Golang",
            'subject'               =>  "Golang is prgramming language",
            'operating_unit_id'     =>  1,
            'applicant_unit_id'     =>  2,
            'manager_id'            =>  1,
            'supervisor_id'         =>  2,
            'priority'              =>  "high",
            'req_date'              =>  Carbon::now(),
            'start_date'            =>  Carbon::now(),
            'dead_date'             =>  Carbon::now(),
            'desc'                  =>  "description",
            'color'                 =>  "white",
            'status'                =>  "in_progress",
            'is_public'             =>  False,
            'is_verify'             =>  True
        ]);
        
            // Project Task 
            #1
            $task = ProjectTask::create([
                'user_id'           =>  $user->id,
                'project_id'        =>  $project->id,
                'operator_id'       =>  $user->id,
                'title'             =>  "first task",
                'slug'              =>  "first-task",
                'percent'           =>  10,
                'estimated_time'    =>  10.30,
                'priority'          =>  "low",
                'color'             =>  "red",
                'desc'              =>  "description for first task",
                'status'            =>  "in_progress",
            ]);
                #sub task
                #1
                ProjectSubTask::create([
                    'user_id'           =>  $user->id,
                    'project_task_id'   =>  $task->id,
                    'title'             =>  "first sub task",
                    'percent'           =>  10,
                    'time_passes'       =>  2.2,
                    'priority'          =>  "low",
                    'color'             =>  "green",
                ]);
                #2
                ProjectSubTask::create([
                    'user_id'           =>  $user->id,
                    'project_task_id'   =>  $task->id,
                    'title'             =>  "second sub task",
                    'percent'           =>  10,
                    'priority'          =>  "low",
                    'color'             =>  "red",
                ]);

            #2
            ProjectTask::create([
                'user_id'           =>  1,
                'project_id'        =>  $project->id,
                'operator_id'       =>  $second_user->id,
                'title'             =>  "second task",
                'slug'              =>  "second-task",
                'percent'           =>  20,
                'estimated_time'    =>  20.30,
                'priority'          =>  "normal",
                'color'             =>  "red",
                'desc'              =>  "description for second task",
                'status'            =>  "complete",
            ]);
            #3
            ProjectTask::create([
                'user_id'           =>  1,
                'project_id'        =>  $project->id,
                'operator_id'       =>  $user->id,
                'title'             =>  "third task",
                'slug'              =>  "third-task",
                'percent'           =>  70,
                'estimated_time'    =>  70.30,
                'priority'          =>  "low",
                'color'             =>  "red",
                'desc'              =>  "description for third task",
                'status'            =>  "close",
            ]);

        $project = Project::create([
                'user_id'               =>  1,
                'title'                 =>  "PHP",
                'slug'                  =>  "PHP",
                'subject'               =>  "PHP is prgramming language",
                'operating_unit_id'     =>  1,
                'applicant_unit_id'     =>  2,
                'manager_id'            =>  1,
                'supervisor_id'         =>  2,
                'priority'              =>  "high",
                'req_date'              =>  Carbon::now(),
                'start_date'            =>  Carbon::now(),
                'dead_date'             =>  Carbon::now(),
                'desc'                  =>  "description",
                'color'                 =>  "white",
                'status'                =>  "complete",
                'is_public'             =>  False,
                'is_verify'             =>  True
            ]);
            // Project Task 
            #1
            ProjectTask::create([
                'user_id'           =>  $user->id,
                'project_id'        =>  $project->id,
                'operator_id'       =>  $user->id,
                'title'             =>  "first task",
                'slug'              =>  "first-task",
                'percent'           =>  10,
                'estimated_time'    =>  10.30,
                'priority'          =>  "low",
                'color'             =>  "red",
                'desc'              =>  "description for first task",
                'status'            =>  "in_progress",
            ]);
            #2
            ProjectTask::create([
                'user_id'           =>  1,
                'project_id'        =>  $project->id,
                'operator_id'       =>  2,
                'title'             =>  "second task",
                'slug'              =>  "second-task",
                'percent'           =>  20,
                'estimated_time'    =>  20.30,
                'priority'          =>  "normal",
                'color'             =>  "red",
                'desc'              =>  "description for second task",
                'status'            =>  "complete",
            ]);
            #3
            ProjectTask::create([
                'user_id'           =>  1,
                'project_id'        =>  $project->id,
                'operator_id'       =>  2,
                'title'             =>  "third task",
                'slug'              =>  "third-task",
                'percent'           =>  70,
                'estimated_time'    =>  70.30,
                'priority'          =>  "low",
                'color'             =>  "red",
                'desc'              =>  "description for third task",
                'status'            =>  "close",
            ]);



        $project = Project::create([
                'user_id'               =>  1,
                'title'                 =>  "Python",
                'slug'                  =>  "Python",
                'subject'               =>  "Python is prgramming language",
                'operating_unit_id'     =>  1,
                'applicant_unit_id'     =>  2,
                'manager_id'            =>  1,
                'supervisor_id'         =>  2,
                'priority'              =>  "high",
                'req_date'              =>  Carbon::now(),
                'start_date'            =>  Carbon::now(),
                'dead_date'             =>  Carbon::now(),
                'desc'                  =>  "description",
                'color'                 =>  "white",
                'status'                =>  "close",
                'is_public'             =>  False
            ]);

        // Create Team
        $group = Group::create([
            "name"      =>  "First Team",
            "user_id"   =>  $user->id
        ]);

        $group->users()->attach([1,2]);
    }



}
