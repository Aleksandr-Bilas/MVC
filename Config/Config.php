<?php
namespace Config;

class Config
{
    protected array $configs = [];

    protected static Config|null $instance = null;

    public static function get(string $name): mixed
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance->getParam($name);
    }

    public function getParam(string $name): mixed
    {
//        $this->loadConfigs();

        $keys = explode('.', $name);

        return $this->findParamByKeys($keys, $this->getConfigs());
    }

    protected function getConfigs(): array
    {
        $configs = [];
        if (empty($this->configs)) {
            $this->configs = include 'configs.php';
        }
        return $configs;
    }

    protected function findParamByKeys(array $keys = [], array $configs = [])
    {

        if (empty($keys)){
            return null;
        }

        $search = array_shift($keys);

        if (array_key_exists($search, $configs)) {
            return is_array($configs[$search]) ? $this->findParamByKeys($keys, $configs) : $configs[$search];
        }
        return null;
    }
}