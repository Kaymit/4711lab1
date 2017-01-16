<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student class holds data representing a student.
 * Student contains first and last names, email addresses,
 * and grades, and has methods to calculate the average grade of each
 * student, and print their information.
 *
 * @author Kevin
 */
class Student {

    /**
     * Constructs a Student object with a first and last
     * name, email addresses, and grades.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds email(s) to a Student object
     * 
     * @param $which    student to add email(s) to
     * @param #address  emails to add
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds a grade to a Student object
     * 
     * @param $grade    grade to add
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * average() calculates the average mark of a given Student.
     * 
     * @return int   average grade
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * toString() formats and concatenates data from all the 
     * Student objects in the given array.
     * 
     * @return string   concatenated Student data
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= '    ' . $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
