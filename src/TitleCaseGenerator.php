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


        //NOTE: Sees if input word is one of the elements of $special_words array
        function checkSpecialWords($word) {

            $special_list = $this->getSpecialWords();

            for ($special_index = 0; $special_index < count($special_list); $special_index++) {
                if ($word === $special_list[$special_index]) {
                    return true;
                }
            }
            return false;
        }



        //TODO: Work on this as we test one spec at a time
        function formatTitleCase($input_title)
        {
            $output_title = $input_title;
            $output_title = strtolower($output_title);
            $output_title_words = explode(" ", $output_title);
            


            /*NOTE: go through all words in input string and make first letter of each word upper case. The for-loop helps avoid single word tests failing*/

            for ($word_index = 0; $word_index < count($output_title_words); $word_index++) {

                //NOTE: if current word is a special word
                if ($this->checkSpecialWords($output_title_words[$word_index])) {

                    //NOTE: if we are looking at either the first or the last word
                    if ($word_index == 0 || $word_index == count($output_title_words) - 1) {
                        $output_title_words[$word_index][0] = strtoupper($output_title_words[$word_index][0]);
                    }
                }
                //NOTE: current word is not a special word
                else {
                    $output_title_words[$word_index][0] = strtoupper($output_title_words[$word_index][0]);
                }
            }

            $output_title = implode(" ", $output_title_words);

            return $output_title;
        }
    }


 ?>
