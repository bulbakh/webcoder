<?php declare(strict_types=1);

namespace App\Models;

use App\Core\Entity;

class Worker extends Entity
{
    public function __construct()
    {
        $this->table = 'workers';
        parent::__construct();
    }

    /**
     * @return array|bool
     */
    public function selectWithDepartment(): array|bool
    {
        //@todo реалізувати метод join()
        return $this->db->execute("
        SELECT $this->table.*, departments.name department_name 
        FROM $this->table 
        LEFT JOIN departments on $this->table.department_id = departments.id 
        ORDER BY id");
    }

    /**
     * @param array $params
     * @return bool
     */
    public function save(array $params): bool
    {
        if ($params['department_id'] == '0') {
            unset($params['department_id']);
        }
        $worker = [
            'email' => $params['email'],
            'name' => $params['name'] ?? null,
            'address' => $params['address'] ?? null,
            'phone' => $params['phone'] ?? null,
            'comments' => $params['comments'] ?? null,
            'department_id' => $params['department_id'] ?? null,
        ];
        return $this->db->insert($this->table, $worker);
    }

    public function selectEmails(): array
    {
        $res = [];
        $emails = $this->db->execute("SELECT email FROM $this->table");
        foreach ($emails as $email) {
            $res[]=$email['email'];
        }
        return $res;
    }
}
