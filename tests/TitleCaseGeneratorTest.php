<?php
    require_once(__DIR__ . "/../src/TitleCaseGenerator.php");

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        // TEST SINGLE LOWER CASE CHARACTER
        function testSingleCharacter() {
            //ARRANGE
            $input = "t";
            $expected_output = "T";
            //NOTE: We need an instance in order to test the method we are interested in.
            // Methods only exist on specific instances of objects
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            //NOTE: $test_result is what comes out of the black box (formatTitleCase method)
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            //NOTE: assertion checks: is $test_result === $our_desired_output
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST SINGLE LOWER CASE WORD
        function testSingleWord() {
            //ARRANGE
            $input = "friendship";
            $expected_output = "Friendship";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WORDS WITH NO SPECIAL WORDS
        function testMultipleNoSpecial() {
            //ARRANGE
            $input = "american beauty";
            $expected_output = "American Beauty";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WITH A SINGLE SPECIAL WORD AT THE BEGINNING OF THE TITLE
        function testMultipleSpecialAtStart() {
            //ARRANGE
            $input = "in bruges";
            $expected_output = "In Bruges";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WITH SPECIAL WORD AT END OF TITLE
        function testMultipleSpecialAtEnd() {
            //ARRANGE
            $input = "the jig is up";
            $expected_output = "The Jig Is Up";
            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST MULTIPLE WORDS LOWER CASE WITH SPECIAL SOMEWHERE IN THE MIDDLE
        function testMultipleSpecialInMiddle() {
            //ARRANGE
            $input = "the thing living in my closet but";
            $expected_output = "The Thing Living in My Closet But";

            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST FOR MIXED CAPITALIZATION AMONG MULTIPLE WORDS INCLUDING SPECIAL WORDS
        function testMixedCapitalsIncludeSpecial() {
            //ARRANGE
            $input = "tHe Thing LIVING iN MY CloSet BUt";
            $expected_output = "The Thing Living in My Closet But";

            $test_TitleCaseGenerator = new TitleCaseGenerator($input);

            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        // TEST FOR AN INPUT WITH NUMERICAL VALUE AMONG ANY NUMBER OF WORDS
        function testMultipleWordsForNumerical() {
            //ARRANGE
            $input = "The 9 horsemen";
            $expected_output = "The 9 Horsemen";

            $test_TitleCaseGenerator = new TitleCaseGenerator($input);
            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);
            //ASSERT
            $this->assertEquals($expected_output, $test_result);

        }
        // TEST FOR AN INPUT WITH NUMERICAL VALUES, NON-ALPHANUMERIC, AND LETTERS MIXED TO MAKE A STRING
        function testLetterDigitNonalphanumericMix() {
            //ARRANGE
            $input = "tH3 Th!ng LIVING---> IN My cl0s31 BUt!!!!!!!";
            $expected_output = "Th3 Th!ng Living---> in My Cl0s31 But!!!!!!!";

            $test_TitleCaseGenerator = new TitleCaseGenerator($input);
            //ACT
            $test_result = $test_TitleCaseGenerator->formatTitleCase($input);
            //ASSERT
            $this->assertEquals($expected_output, $test_result);

        }
    }
 ?>
