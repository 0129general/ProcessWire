<?php

class AboutController
{
    public function index($page)
    {
        return [
            'title' => $page->title,
            // Add any custom fields here if needed
        ];
    }
}
