<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Tests\Stubs\Controllers\CategoryControllerStub;
use Tests\Stubs\Models\CategoryStub;
use Tests\TestCase;
use Tests\Traits\TestSaves;
use Tests\Traits\TestValidations;

class BasicCrudControllerTest extends TestCase{

    private $controller;

    protected function setUp(): void {
        parent::setUp();
        CategoryStub::dropTable();
        CategoryStub::createTable();
        $this->controller = new CategoryControllerStub();
    }

    protected function tearDown(): void {
        CategoryStub::dropTable();
        parent::tearDown();
    }

    public function testIndex(){

        $category = CategoryStub::create([
            'name' => 'test_name',
            'description' => 'test_description'
        ]);

        $result = $this->controller->index()->toArray();
        $this->assertEquals($category->toArray(), $result);
    }


    public function testInvalidationDataInStore(){

        $this->expectException(ValidationException::class);

        $request = \Mockery::mock(Request::class);

        $request
            ->shouldReceive('all')
            ->once()
            ->andReturn(['name' => '']);

        $this->controller->store($request);
    }

    public function testStore(){

        $request = \Mockery::mock(Request::class);

        $request
            ->shouldReceive('all')
            ->once()
            ->andReturn([
                'name' => 'test_name',
                'description' => 'test_description'
            ]);

        $obj = $this->controller->store($request);

        $this->assertEquals(
            CategoryStub::find(1)->toArray(),
            $obj->toArray()
        );
    }

}
