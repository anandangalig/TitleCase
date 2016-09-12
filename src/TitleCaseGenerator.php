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
            $output_title[0] = strtoupper($output_title[0]);
            return $output_title;
        }
    }


 ?>
