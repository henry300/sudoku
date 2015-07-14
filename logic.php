<?php
/**
 * Created By: Henry Teigar
 * Date: 13.07.2015
 *
 * Sudoku solver 0.1
 */


/**
 * Check if POST request and grab the data
 */




if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // Variable to store all user entered data
    $input = $_POST;

    // Temporary Variable to store all validated and escaped data
    $input_checked = array();

    // Validate data
    foreach ($_POST as $square => $value)
    {

        // Checks if there is any non numeric values
        if (!is_numeric($value) && !empty($value))
        {
            die('Only numbers are allowed!');
        }

        // Turns all HTML chars into HTML entity format
        $input_checked[$square] = htmlentities($value);
    }
    // Reassign corrected and verified input to $input varaible. Deleting temporary variable
    $input = $input_checked;
    unset($input_checked);

    $solver = new SudokuSolver($input);
    $m1 = microtime(true);
    $solver->solve2();
    echo 'Total time: ' . (microtime(true) - $m1) . '<br>';
    echo 'setRows.. time: ' . $solver->time1 . '<br>';
    echo $solver->_deep;


}


/**
 * SudokuSolver class
 */
class SudokuSolver {

    // Array of all the squares ($id => $value)
    protected $_squares;
    // Original inputted values ($id => $value)
    protected $_orig;
    // Multidimensional array of rows
    protected $_rows;
    // Multidimensional array of columns
    protected $_cols;
    // Multidimensional array of blocks (Square made out from 3 X 3 squares)
    protected $_blocks;

    public $_deep = 0;
    public $time1 = 0;

    /**
     * Stores the input
     * Puts data to _rows, _cols, _blocks
     *
     * @param array $input
     */
    public function __construct($input)
    {
        $this->_squares = $input;
        $this->_orig = $input;
        $this->setRowsColsBlocks();
    }


    public function solve($id = 1, $value = 1)
    {
        $orig = $this->_orig;

        if (empty($squares[$id]))  // If square is empty start trying to put numbers into it
        {
            if ($this->fits($value, $id))
            {  // If number fits into square, change the square array and move on!
                $this->_squares[$id] = $value;
                $this->solve($id + 1, 1);
            } else
            {
                $this->solve($id, $value + 1);
            }
        } else
        {
            $this->solve($id + 1, 1);
        }
    }


    public function solve2($value = 1, $id = 1, $back = false)
    {
        $micro1 = microtime(true);
        //$this->setRowsColsBlocks();
        $this->time1 += microtime(true) - $micro1;

        $this->_deep += 1;

        //echo $this->_deep . " - " . microtime(true) . '<br>';

        if ($this->_deep >= 12500) {
            return;
        }

        if (!$back && $id > 81) {
            return;
        }

        // Make sure not to change original value when moving backwards
        if ($back && $this->in_orig($id))
        {
            $this->solve2(1, $id - 1, true);
            return;
        }

        // Make sure not to change original value when moving forward
        if (!$back && $this->in_orig($id))
        {
            $this->solve2(1, $id + 1);
            return;
        }

        // If value is bigger than 9 move back and try different number
        if (!$back && $value > 9) {
            $prevValue = $this->_squares[$id - 1];
            $prevId = $id - 1;
            $this->_squares[$id] = "";
            $this->solve2($prevValue + 1, $prevId);
            return ;
        }

        // If value doesn't fit into box
        if (!$back && !$this->fits($value, $id)) {
            $this->solve2($value + 1, $id);
            return;
        }

        if (!$back && $this->fits($value, $id)) {
            $this->_squares[$id] = $value;
            $this->solve2(1, $id + 1);
            return;
        }



    }

    /**
     * Returns true when sudoku all the fields have been filled and false otherwise
     * @return bool
     */
    protected function is_solved()
    {
        $squares = $this->_squares;

        foreach ($squares as $value)
        {
            if (empty($value))
            {
                return false;
            }
        }

        return true;
    }


    /**
     * Returns true if no conflicts and false if conflicts exist.
     * @param int $value Some number
     * @param int $square Square_id
     * @return boolean
     */
    protected function fits($value, $square)
    {
        if ($this->fits_row($value, $square) &&
            $this->fits_col($value, $square) &&
            $this->fits_block($value, $square)
        )
        {
            return true;
        }
    }

    protected function fits_row($value, $square)
    {
        $row = $this->getRow($square);



        //if (!in_array($value, $this->_rows[$row]))
        //{
        //    return true;
        //}
        $start = 9 * $row - 8;
        $end = 9 * $row;

        for ($id = $start; $id <= $end; $id++){
            if ($this->_squares[$id] == $value) {
                return false;
            }
        }

        return true;

    }

    protected function fits_col($value, $square)
    {
        $col = $this->getCol($square);
        //if (!in_array($value, $this->_cols[$col]))
        //{
        //    return true;
        //}
        for ($id = $col; $id <= 72; $id = $id + 9) {
            if ($this->_squares[$id] == $value) {
                return false;
            }
        }

        return true;


    }

    protected function fits_block($value, $square)
    {
        $block = $this->getBlock($square);
        //if (!in_array($value, $this->_blocks[$block]))
        //{
        //    return true;
        //}
        $row = ceil($block / 3) - 1;
        $col = ($block % 3 == 0) ? 2 : $block % 3 - 1;
        $start = 1 + 3 * $col + 27 * $row;

        for ($i = 0; $i < 3; $i++) {
            for ($e = 0; $e < 3; $e++) {
                $id = $start + $e + $i * 9;
                if ($this->_squares[$id] == $value) {
                    return false;
                }
            }
        }

        return true;



    }

    /**
     * Checks if square has been filled by user
     *
     * @param $square
     * @return bool
     */
    protected function in_orig($square)
    {
        if (!empty($this->_orig[$square]))
        {
            return true;
        }
    }

    /**
     * Assigns data to _rows, _cols, _blocks multidimensional arrays.
     */
    protected function setRowsColsBlocks()
    {
        $squares = $this->_squares;
        $rows = array();
        $cols = array();
        $blocks = array();

        foreach ($squares as $id => $value)
        {
            // Assign square value to correct spot in the rows and cols array.

            $row = $this->getRow($id);
            $col = $this->getCol($id);
            $rows[$row][$col] = $value;
            $cols[$col][$row] = $value;

            // Assign square value to correct spot in the blocks array


            $block = $this->getBlock($id);
            $blocks[$block][$id] = $value;

        }
        $this->_rows = $rows;
        $this->_cols = $cols;
        $this->_blocks = $blocks;
    }

    /**
     * Returns the row number based on square number
     *
     * @param int $square Square id
     * @return int
     */
    protected function getRow($square)
    {
        return ceil($square / 9);
    }

    /**
     * Returns the column number based on square number
     *
     * @param int $square Square id
     * @return int
     */
    protected function getCol($square)
    {
        $row = $this->getRow($square);

        return $square - ($row - 1) * 9;
    }

    /**
     * Returns the block number based on the square number
     *
     * @param int $square
     * @return int
     */
    protected function getBlock($square)
    {
        $row = $this->getRow($square);
        $col = $this->getCol($square);

        $block_row = ceil($row / 3);
        $block_column = ceil($col / 3);
        $block = ($block_row - 1) * 3 + $block_column;

        return $block;

    }


    /**
     * Method to retrieve value from specific square to be used in form
     *
     * @param $id
     * @return array
     */
    public function sqGet($id)
    {
        return $this->_squares[$id];
    }

    /**
     * Set a new value for a specific square
     *
     * @param $sq
     * @param $value
     */
    public function sqSet($sq, $value)
    {
        $this->_squares[$sq] = $value;
    }


    // TEMPORARY TESTING METHOD
    public function dd($value)
    {
        $printed = print_r($value, true);
        echo '<pre>' . $printed . '</pre>';
    }
}
