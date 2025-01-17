<?php

/**
 * @generate-class-entries
 */

namespace pmmp\thread;

/**
 * ThreadSafeArray objects are similar to regular arrays, with the exception that they can be shared between threads.
 *
 * @since 6.0.0
 *
 * @strict-properties
 */
final class ThreadSafeArray extends ThreadSafe implements \Countable, \ArrayAccess
{
    /**
     * Removes and returns $size items from the array. Equivalent to calling shift() $size times.
     * Similar to array_slice() with offset 0, but also removes the items returned.
     *
     * @param int $size The number of items to fetch
     * @param bool $preserve Preserve the keys of members
     *
     * @return array An array of items removed from the array
     */
    public function chunk(int $size, bool $preserve = false) : array{}

    /**
     * {@inheritdoc}
     */
    public function count() : int{}

    /**
     * Converts the given array into a ThreadSafeArray object (recursively)
     * @param array $array
     *
     * @return ThreadSafeArray A ThreadSafeArray object created from the provided array
     * @throws NonThreadSafeValueError if the array contains any non-thread-safe values
     */
    public static function fromArray(array $array) : ThreadSafeArray{}

    /**
     * Merges data into the current ThreadSafeArray, similar to array_merge()
     *
     * @param array|object $from The data to merge
     * @param bool $overwrite Overwrite existing keys flag
     *
     * @return bool A boolean indication of success
     * @throws NonThreadSafeValueError if $from contains any non-thread-safe values
     */
    public function merge(array|object $from, bool $overwrite = true) : bool{}

    /**
     * Pops an item from the end of the array, similar to array_pop()
     *
     * @return mixed The last item in the array
     */
    public function pop() : mixed{}

    /**
     * Shifts an item from the start of the array, similar to array_shift()
     *
     * @return mixed The first item in the array
     */
    public function shift() : mixed{}

    public function offsetGet(mixed $offset) : mixed{}

    public function offsetSet(mixed $offset, mixed $value) : void{}

    public function offsetExists(mixed $offset) : bool{}

    public function offsetUnset(mixed $offset) : void{}
}
