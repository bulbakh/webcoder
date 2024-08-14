<?php declare(strict_types=1);

namespace App\Core;

use App\Core\Db;
use Exception;

class Entity
{
    protected Db $db;
    protected string $table;

    public function __construct()
    {
        $this->db = new Db(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    }

    /**
     * @param array $where
     * @return array|bool
     */
    public function select(array $where = []): array|bool
    {
        return $this->db->select($this->table, $where);
    }

    /**
     * @throws Exception
     */
    public function get(array|int $where): array|Exception
    {
        if (is_int($where)) {
            $where = ['id' => $where];
        }

        $res = $this->select($where);

        if (count($res) > 1) {
            throw new Exception('More than one item selected');
        }
        return reset($res);
    }
}