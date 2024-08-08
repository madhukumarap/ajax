<?php 
// They allow for better organization by grouping classes that work together to perform a task
// They allow the same name to be used for more than one class
// Namespaces are declared at the beginning of a file using the namespace keyword:

namespace Html;
class Table{
    public $title = "";
    public $numRows = 0;

    public function message(){
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My Table";
$table->numRows = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $table->message();
    ?>

</body>
</html>