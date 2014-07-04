<?php echo $this->Html->tableHeaders(
    array('Date','Title','Active'),
    array('class' => 'status'),
    array('class' => 'product_table')
);?>

<?php echo $this->Html->tableCells(array(
    array('Jul 7th, 2007', array('Best Brownies', array('class'=>'highlight')) , 'Yes'),
    array('Jun 21st, 2007', 'Smart Cookies', 'Yes'),
    array('Aug 1st, 2006', 'Anti-Java Cake', array('No', array('id'=>'special'))),
));?>