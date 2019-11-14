<?php
namespace alexLE\DHLExpress;

class Credentials {

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var bool
     */
    protected $testMode;

    /**
     * @param bool $testMode
     */
    public function __construct($testMode = false) {
        $this->testMode = $testMode;
    }

    /**
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Credentials
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Credentials
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTestMode() {
        return $this->testMode;
    }

    /**
     * @param bool $testMode
     * @return Credentials
     */
    public function setTestMode($testMode) {
        $this->testMode = $testMode;

        return $this;
    }
}