<?php
require_once("classes/exceptions/SQLLanguageException.php");
require_once("classes/statements/schema/SQLSchemaCreateStatement.php");
require_once("classes/statements/schema/SQLSchemaDropStatement.php");
require_once("classes/statements/table/SQLTableAlterStatement.php");
require_once("classes/statements/table/SQLTableCreateStatement.php");
require_once("classes/statements/table/SQLTableDeleteStatement.php");
require_once("classes/statements/table/SQLTableDropStatement.php");
require_once("classes/statements/table/SQLTableInsertStatement.php");
require_once("classes/statements/table/SQLTableInsertSelectStatement.php");
require_once("classes/statements/table/SQLTableSelectStatement.php");
require_once("classes/statements/table/SQLTableSelectGroupStatement.php");
require_once("classes/statements/table/SQLTableTruncateStatement.php");
require_once("classes/statements/table/SQLTableUpdateStatement.php");
require_once("classes/statements/view/SQLViewAlterStatement.php");
require_once("classes/statements/view/SQLViewCreateStatement.php");
require_once("classes/statements/view/SQLViewDropStatement.php");
require_once("classes/statements/server/AbstractSQLServerStatement.php");