<?php

namespace Tests\Feature\Task;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Task\Database\TaskStore;
use Task\Models\Task;
use Tests\TestCase;

class CreateAndStoreTest extends TestCase
{
    /** @test **/
    public function TaskFormIsAuthenticated()
    {
        $response = $this->get(route('tasks.create'));
        $response->assertRedirect(route('login'));

        $response = $this->post(route('tasks.store'));
        $response->assertRedirect(route('login'));
    }

    /** @test **/
    public function UserCanNotCreateTooManyTasks()
    {
        Task::schema();

        $this->Login(1);


        config()->set('task.maximum_daily_task' , 2);

        $response = $this->submitForm();
        $this->assertTaskCount(1);


        $response = $this->checkFormValidation();

        $response = $this->submitForm();
        $this->assertTaskCount(2);

        $response = $this->submitForm();
        $this->assertTaskCount(2);

        $response->assertRedirect(route('tasks.index'));
    }


    public function checkFormValidation(): \Illuminate\Testing\TestResponse
    {
        $count = TaskStore::countTask(1);
        $response = $this->submitForm(['title' => '']);
        $response->assertSessionHasErrors(['title']);
        $response->assertRedirect();
        $this->assertTaskCount($count);
        return $response;
    }

    public function Login($ID): void
    {
        $user = new User();
        $user->id = $ID;
        $this->actingAs($user);
    }


    public function submitForm(array $data= ['title' => 'salam' , 'description' => 'chetori?']): \Illuminate\Testing\TestResponse
    {
        return $this->post(route('tasks.store'), $data);
    }

    /**
     * @param int $count
     */
    public function assertTaskCount(int $count): void
    {
        $this->assertEquals(TaskStore::countTask(1) , $count);
    }
}
