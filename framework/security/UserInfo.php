<?php

namespace framework\security;

class UserInfo {
    
    private $userId;
    private $userName;
    private $userRoles;
    
    
    public function getUserId() {
        return $this->userId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getUserRoles() {
        return $this->userRoles;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setUserRoles($userRoles) {
        $this->userRoles = $userRoles;
    }


    
}