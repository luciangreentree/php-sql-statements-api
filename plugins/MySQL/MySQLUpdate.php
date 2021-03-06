<?php
namespace Lucinda\Query;
require_once(dirname(dirname(__DIR__))."/src/Update.php");
require_once("clauses/MySQLCondition.php");

/**
 * Encapsulates MySQL statement: UPDATE {IGNORE} {TABLE} SET {SET} WHERE {CONDITION}
 */
class MySQLUpdate extends Update {
    protected $isIgnore=false;

    /**
     * Sets statement as "IGNORE" (ignoring foreign key errors / duplicates)
     */
    public function ignore() {
        $this->isIgnore = true;
        return $this;
    }

    /**
     * Compiles SQL statement based on data collected in class fields.
     *
     * @return string SQL that results from conversion
     * @throws Exception When statement could not be compiled due to incomplete class fields.
     */
    public function toString() {
        if(!$this->set) throw new Exception("running set() method is required");

        return "UPDATE ".($this->isIgnore?"IGNORE ":"").$this->table.
            "\r\n"."SET ".$this->set->toString().
            ($this->where?"\r\n"."WHERE ".$this->where->toString():"");
    }
}