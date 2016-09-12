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
            // $output_title[0] = strtoupper($output_title[0]);
            $output_title_words = explode(" ", $output_title);
            $first_word = $output_title_words[0];
            $second_word = $output_title_words[1];
            $first_word[0] = strtoupper($first_word[0]);
            $second_word[0] = strtoupper($second_word[0]);
            $output_title = $first_word . " " . $second_word;
            return $output_title;
        }
    }


 ?>
