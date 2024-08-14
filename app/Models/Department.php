<?php declare(strict_types=1);

namespace App\Models;

use App\Core\Entity;

class Department extends Entity
{
    public function __construct()
    {
        $this->table = 'departments';
        parent::__construct();
    }

    /**
     * @param array $params
     * @return bool
     */
    public function save(array $params): bool
    {
        return $this->db->insert($this->table, ['name' => $params['name']]);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
