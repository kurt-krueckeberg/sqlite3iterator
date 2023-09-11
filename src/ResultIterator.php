<?php
declare (strict_types=1);
namespace SQLite;

class ResultIterator implements Iterator {

    private $current_ = array();
    
    public readonly SQLite3Result $result;
    public int $mode;
    private bool $valid;

    private int $row_num;

    public function __construct(\SQLite3Result $r, int $mode)
    {
        $this->result = $r;
        $this->mode = mode;
        $this->row_num = 0;
        $this->fetchArray();
    }

    private function fetchArray()
    {
       $current_ = $this->result->fetchArray($this->mode);

       $this->valid = $result !== false ? true : false;

       if ($this->valid)
          ++$this->row_num;
    }

    public function next()
    {
        if ($this->valid)
           $this->fetchArray();
    }

    public function __destruct()
    {
        $this->row_num = 0;
        $this->result->finalize(); // ?
    }

    public function key() : int
    {
       return $this->row_num;
    }

    public function valid() : bool
    {
       return $this->valid;
    }
    
    public function current() : array
    {
        return $this->current_;
    }

    public function rewind()
    {
        $this->result->reset();
        $this->row_num = 0;
    }
}
