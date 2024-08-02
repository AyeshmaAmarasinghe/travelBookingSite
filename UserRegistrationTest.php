<?php

use PHPUnit\Framework\TestCase;

class UserRegistrationTest extends TestCase
{
    protected $mysqli;

    protected function setUp(): void
    {
        // Connect to test database
        $this->mysqli = new mysqli("localhost", "root", "", "book_db");

        // Clear the users table before each test
        $this->mysqli->query("DELETE FROM users");
    }

    protected function tearDown(): void
    {
        // Close the database connection
        $this->mysqli->close();
    }

    public function testValidUserRegistration()
    {
        // Simulate form input
        $_POST['submit'] = true;
        $_POST['username'] = 'testuser';
        $_POST['email'] = 'testuser@example.com';
        $_POST['age'] = 25;
        $_POST['password'] = 'password123';

        // Include the script that handles the registration
        ob_start();
        include 'C:\xampp\htdocs\WebSite\register.php';
        $output = ob_get_clean();

        // Check that the output contains the success message
        $this->assertStringContainsString('Registration Successful!', $output);

        // Verify that the user was added to the database
        $result = $this->mysqli->query("SELECT * FROM users WHERE Email = 'testuser@example.com'");
        $this->assertEquals(1, $result->num_rows);

        // Verify that the user is redirected to the login page
        $this->assertStringContainsString('<a href=\'index.php\'', $output);
    }
}
