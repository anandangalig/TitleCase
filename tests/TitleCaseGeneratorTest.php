<?php
    require_once(__DIR__ . "/../src/TitleCaseGenerator.php");

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        // TEST SINGLE LOWER CASE CHARACTER
        function testSingleCharacter() {
            //ARRANGE
            $input = "t";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            //NOTE: assertion checks: is $test_result === $our_desired_output
            $this->assertEquals("T", $test_result);
        }

    }
 ?>
