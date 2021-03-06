<?php

// This doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.iteratoraggregate.php )
 *
 * Interface to create an external Iterator.
 *
 */
interface IteratorAggregate extends Traversable {
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from
   * http://php.net/manual/en/iteratoraggregate.getiterator.php )
   *
   * Returns an external iterator.
   *
   * @return     mixed   An instance of an object implementing Iterator or
   *                     Traversable
   */
  public function getIterator();
}

interface Iterable extends IteratorAggregate {
  public function toArray();
  public function lazy();
  public function map($callback);
  public function filter($callback);
  public function zip($iterable);
}

