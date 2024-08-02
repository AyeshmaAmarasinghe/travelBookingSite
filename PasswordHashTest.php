<?php
use PHPUnit\Framework\TestCase;

class PasswordHashTest extends TestCase
{
    private $con;

    protected function setUp(): void
    {
        // Database connection setup
        $this->con = new mysqli("localhost", "root", "", "book_db");

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    protected function tearDown(): void
    {
        $this->con->close();
    }

    public function testPasswordIsHashed()
    {
        // Query to fetch all passwords
        $result = $this->con->query("SELECT Password FROM users");

        while ($row = $result->fetch_assoc()) {
            $password = $row['Password'];

            // Check if the password is not hashed (i.e., it is a plain text password)
            if (password_get_info($password)['algo'] === 0) {
                $this->fail("Unhashed password found: " . $password);
            }
        }

        // If no unhashed passwords are found, the test will pass
        $this->assertTrue(true);
    }
}
