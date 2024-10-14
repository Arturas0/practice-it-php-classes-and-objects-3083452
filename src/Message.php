<?php

class Message
{
   public function __construct(
    private string $content,
    private string $author,
    private DateTime $postedAt,
   ) {
        
    }
}
