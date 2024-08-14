<?php declare(strict_types=1);

namespace App\Core;

class Alerts
{
    public static function getAlerts(array $msgs): array
    {
        $res = [];
        foreach ($msgs as $msg) {
            $res[] = [
                'class' => self::getClassByType($msg['type']),
                'text' => $msg['text']
            ];
        }
        return $res;
    }

    private static function getClassByType(string $type): string
    {
        $classes = [
            'error' => 'danger',
            'success' => 'success',
            'info' => 'primary',
        ];
        return $classes[$type];
    }
}
