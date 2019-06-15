<?php
/*
 * This file is part of the php-mvc-project <https://github.com/php-mvc-project>
 * 
 * Copyright (c) 2018 Aleksey <https://github.com/meet-aleksey>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace PhpMvc;

/**
 * Represents a cache provider that does nothing.
 */
final class IdleCacheProvider implements CacheProvider {

    /**
     * Inserts a cache entry into the cache.
     * 
     * @param string $key A unique identifier for the cache entry.
     * @param mixed|callback $value The value to insert.
     * @param int $duration The duration of storage the cache entry (in seconds).
     * @param string $regionName A named region in the cache to which the cache entry can be added.
     * 
     * @return void
     */
    public function add($key, $value, $duration, $regionName = null) {
    }

    /**
     * Removes all cache entries.
     * 
     * @param string $regionName A name of region.
     * 
     * @return int Number of deleted records.
     */
    public function clear($regionName = null) {
        return 0;
    }

    /**
     * Checks whether the cache entry already exists in the cache.
     * 
     * @param string $key A unique identifier for the cache entry.
     * @param string $regionName A name of region.
     * 
     * @return bool
     */
    public function contains($key, $regionName = null) {
        return false;
    }

    /**
     * Gets the total number of cache entries in the cache.
     * 
     * @param string $regionName A name of region.
     * 
     * @return int
     */
    public function count($regionName = null) {
        return 0;
    }

    /**
     * Initializes the provider.
     * 
     * @return void
     */
    public function init() {
    }

    /**
     * Gets the specified cache entry from the cache as an object.
     * 
     * @param string $key A unique identifier for the cache entry.
     * @param string $regionName A name of region.
     * 
     * @return mixed
     */
    public function get($key, $regionName = null) {
        return null;
    }

    /**
     * Gets a cache entry, or adds it if there is no cache entry.
     * 
     * @param string $key A unique identifier for the cache entry.
     * @param mixed|callback $value The value to insert.
     * @param int $duration The duration of storage the cache entry (in seconds).
     * @param string $regionName A name of region.
     * 
     * @return mixed
     */
    public function getOrAdd($key, $value, $duration, $regionName = null) {
        if (is_callable($value) === true) {
            return $value();
        }
        else {
            return $value;
        }
    }

    /**
     * Removes the cache entry from the cache.
     * 
     * @param string $key A unique identifier for the cache entry.
     * @param string $regionName A name of region.
     * 
     * @return mixed An object that represents the value of the removed cache entry that was specified by the key,
     * or null if the specified entry was not found.
     */
    public function remove($key, $regionName = null) {
        return null;
    }

}