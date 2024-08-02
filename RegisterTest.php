<?php

use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    protected $con;

    protected function setUp(): void
    {
        // Database connection setup
        $this->con = new mysqli("localhost", "root", "", "book_db");

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }

        // Ensure the users table is empty before each test
        $this->con->query("TRUNCATE TABLE users");
    }

    protected function tearDown(): void
    {
        // Close the database connection
        $this->con->close();
    }

    public function testUniqueEmail()
    {
        // Insert a user with a specific email
        $email = "test@example.com";
        $this->con->query("INSERT INTO users (Username, Email, Age, Password) VALUES ('user1', '$email', 25, 'password1')");

        // Try to insert another user with the same email
        $duplicateEmailQuery = $this->con->query("SELECT Email FROM users WHERE Email = '$email'");

        // Assert that the email is not unique
        $this->assertEquals(1, $duplicateEmailQuery->num_rows);
    }

    public function testSuccessfulRegistration()
    {
        // Register a new user with a unique email
        $email = "unique@example.com";
        $username = "uniqueUser";
        $age = 30;
        $password = "uniquePassword";

        $this->con->query("INSERT INTO users (Username, Email, Age, Password) VALUES ('$username', '$email', $age, '$password')");

        // Verify the user was inserted
        $result = $this->con->query("SELECT * FROM users WHERE Email = '$email'");
        $this->assertEquals(1, $result->num_rows);

        $row = $result->fetch_assoc();
        $this->assertEquals($username, $row['Username']);
        $this->assertEquals($age, $row['Age']);
        $this->assertEquals($password, $row['Password']);
    }
}
