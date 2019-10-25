<?php

namespace SwooleCourse;

interface CacheInterface
{
    public function createTable(): void;

    public function isExpired(array $result): bool;

    public function put(string $key, string $value, int $ttl = 60): void;

    public function get(string $key): ?string;

    public function forget(string $key): void;

    public function flush(): void;

    public function recycle(): void;
}
