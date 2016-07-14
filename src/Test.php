<?php

namespace CodeCollab\Test;

class Test
{
    public function bare()
    {
        session_start();
    }

    public function withCookieParams()
    {
        session_set_cookie_params(0, '/', '.example.com', true, true);
        session_start();
    }
}
