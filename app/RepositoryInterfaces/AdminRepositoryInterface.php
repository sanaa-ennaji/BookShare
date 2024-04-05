<?php


namespace App\RepositoryInterfaces;

interface UsersRepositoryInterface
{

    public function updateUser($id, array $data);
    public function deleteUser($id);
    public function getAllUsers();
    public function getArchivedUsers();
}