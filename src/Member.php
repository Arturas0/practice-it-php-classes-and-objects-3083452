<?php

class Member
{
    public function __construct(
        public string $username,
        public string $role,
    ) {

    }


    public function addWorkspaceMember()
    {

    }

    public function createWorkspace()
    {

    }

    public function createChat(string $title, Chat $chat)
    {

    }

    public function postMessageToChat(Message $message, Chat $chat)
    {

    }
}
