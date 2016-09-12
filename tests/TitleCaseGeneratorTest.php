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

        // TEST SINGLE LOWER CASE WORD
        function testSingleWord() {
            //ARRANGE
            $input = "friendship";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals("Friendship", $test_result);
        }

        // TEST MULTIPLE WORDS FOR LOWERCASE AND FOR THE EXISTENCE OF SPECIAL WORDS
        function testMultipleAndForSpecial() {
            //ARRANGE
            $input = "american beauty";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals("American Beauty", $test_result);
        }
    }
 ?>
