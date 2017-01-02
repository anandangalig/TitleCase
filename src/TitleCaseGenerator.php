<?php

    class TitleCaseGenerator
    {
        private $title;
        private $special_words = ["a", "an", "the", "at", "by", "for", "in", "of", "on", "to", "up", "and", "as", "but", "or", "nor"];

        function __construct($title="")
        {
            $this->title = $title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setTitle($new_title)
        {
            $this->title = (string) $new_name;
        }


        function getSpecialWords() {
            return $this->special_words;
        }

        function setSpecialWords($special_list) {
            $this->special_words = (string) $special_list;
        }


        function checkSpecialWords($word) {

            $special_list = $this->getSpecialWords();

            for ($special_index = 0; $special_index < count($special_list); $special_index++) {
                if ($word === $special_list[$special_index]) {
                    return true;
                }
            }
            return false;
        }



        function formatTitleCase($input_title)
        {
            $output_title = $input_title;
            $output_title = strtolower($output_title);
            $output_title_words = explode(" ", $output_title);

            for ($word_index = 0; $word_index < count($output_title_words); $word_index++) {
                if ($this->checkSpecialWords($output_title_words[$word_index])) {
                    if ($word_index == 0 || $word_index == count($output_title_words) - 1) {
                        $output_title_words[$word_index][0] = strtoupper($output_title_words[$word_index][0]);
                    }
                }
                else {
                    $output_title_words[$word_index][0] = strtoupper($output_title_words[$word_index][0]);
                }
            }

            $output_title = implode(" ", $output_title_words);

            return $output_title;
        }
    }
 ?>
