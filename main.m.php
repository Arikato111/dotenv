<?php
return new class
{
    public function config($directory_env = '.env')
    {
        $_ENV = getenv();
        $sub_env = explode("\n", file_get_contents($directory_env));

        foreach ($sub_env as $value) {
            if (strpos($value, '=') !== false) {
                [$k, $v] = explode('=', $value);
                $_ENV[trim($k)] = trim($v);
            }
        }
    }
};
