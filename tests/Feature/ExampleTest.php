<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testNewsTest()
    {
        $response = $this->get('/');
        $value = 'news';
        $response->assertSee($value);
    }

    public function testCategoriesSeeTest()
    {
        $response = $this->get('/categories/1/2');
        $value = 'Nature';
        $response->assertSee($value);
    }

    public function testCategoriesTest()
    {
        $response = $this->get('/categories/1/2');

        $response->assertStatus(200);
    }

    public function testControllerViewTest()
    {
        $view = $this->blade(
            '<x-navigation :blogName="$blogName" />',
            ['blogName' => 'MyBlog']
        );

        $view->assertSee('MyBlog');
    }

    public function testAssertViewIsTest()
    {
        $response = $this->get('/');

        $response->assertViewIs('categories.index');
    }

    public function testAssertViewShowTest()
    {
        $response = $this->get('/categories/1');

        $response->assertViewIs('categories.show');
    }
    public function testAssertViewNewsTest()
    {
        $response = $this->get('/categories/1/2');

        $response->assertViewIs('news.showNews');
    }
    public function testAssertViewDownloadTest()
    {
        $response = $this->get('/form/request/create');

        $response->assertViewIs('forms.download.create');
    }
    public function testAssertViewCommentsTest()
    {
        $response = $this->get('/form/feedback/create');

        $response->assertViewIs('forms.create');
    }

}
