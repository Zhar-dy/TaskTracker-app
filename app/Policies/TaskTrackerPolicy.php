<?php

namespace App\Policies;

use App\Models\TaskTracker;
use App\Models\User;

class TaskTrackerPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user,TaskTracker $task)
    {
        return $user->id === $task->user_id;
    }

    public function delete(User $user,TaskTracker $task)
    {
        return $user->id === $task->user_id;
    }
}
