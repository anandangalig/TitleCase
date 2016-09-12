<?php

    class TitleCaseGenerator
    {
        private $title;

        function __construct($title="")
        {
            $this->title = $title;
        }

        function setTitle($new_title)
        {
            $this->title = (string) $new_name;
        }

        function getTitle()
        {
            return $this->title;
        }

        //TODO: Work on this as we test one spec at a time
        function formatTitleCase($input_title)
        {
            $output_title = $input_title;
            $output_title_words = explode(" ", $output_title);


            /*NOTE: go through all words in input string and make first letter of each word upper case. The for-loop helps avoid single word tests failing*/

            for ($word_index = 0; $word_index < count($output_title_words); $word_index++) {
                $output_title_words[$word_index][0] = strtoupper($output_title_words[$word_index][0]);
            }

            $output_title = implode(" ", $output_title_words);

            return $output_title;
        }
    }


 ?>
