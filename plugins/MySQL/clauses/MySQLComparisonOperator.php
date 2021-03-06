<?php
namespace Lucinda\Query;

require_once(dirname(dirname(dirname(__DIR__)))."/src/clauses/ComparisonOperator.php");

/**
 * Enum encapsulating possible MySQL WHERE comparison operators, extending those in standard SQL
 */
interface MySQLComparisonOperator extends ComparisonOperator {
	// regular expression comparison operators
	const REGEXP = "REGEXP";
	const NOT_REGEXP = "NOT REGEXP";
}