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

        // TEST MULTIPLE WORDS LOWER CASE WORDS WITH NO SPECIAL WORDS
        function testMultipleNoSpecial() {
            //ARRANGE
            $input = "american beauty";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals("American Beauty", $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WITH A SINGLE SPECIAL WORD AT THE BEGINNING OF THE TITLE
        function testMultipleSpecialAtStart() {
            //ARRANGE
            $input = "in bruges";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals("In Bruges", $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WITH SPECIAL WORD AT END OF TITLE
        function testMultipleSpecialAtEnd() {
            //ARRANGE
            $input = "the jig is up";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals("The Jig Is Up", $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WITH SPECIAL SOMEWHERE IN THE MIDDLE
        function testMultipleSpecialInMiddle() {
            //ARRANGE
            $input = "the thing living in my closet but";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals("The Thing Living in My Closet But", $test_result);
        }
    }
 ?>
