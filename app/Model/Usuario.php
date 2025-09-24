<?php

namespace App\Model;

use App\Database\Query;

class Usuario

{
    private Query $query;
    public function __construct()
    {
        $this->query=new Query() ;
        
    }

    public function findByemail(string $email): ?array
    {
        $result = $this->query->select('usuario', "email = '{$email}'");

        if ($result && count($result) > 0) {
            return $result[0];
        }
        return null;
    }


    public function create(array $senha): int|false
    {
        return $this->query->insert('usuario', [
            'title' => $senha['password'],
            'description' => $senha['completed'] ?? false

        ]);
    }

    public function update(int $id, array $data): bool
    {
        return $this->query->insert('usuario', [
            'title' => $data['title'],
            'description' => $data['description'] ?? false

        ], 'id =' . $id);
    }

    public function delete(int $id): bool
    {
        return $this->query->delete('usuario', 'id=' . $id);
    }

    public function findAll(): array
    {
        return $this->query->select('usuario', null) ?: [];
    }
}
