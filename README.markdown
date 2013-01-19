
NOT THE CODE YOU'RE LOOKING FOR
===============================
NOT THE REAL BankAccount, Go get it from the source: thePHP.cc

What?
-----

See, I bought this book from Sebastian to get prepared for a demo I want to do tomorrow.  But, my VM is running
php 5.3 (and kind of needs to be because I'm using my "dev" vm).  But, I need the tests to run, 
because it's a Jenkins demo.  Well, yada, yada...this fork removes the traits and replaces them with extends.





BankAccount
===========

Sample application used for PHPUnit training.

Disclaimer
----------

This example code is no production code and should be used for educational purposes only.

Testing with PHP 5.4's Built-in Webserver
-----------------------------------------

Start PHP 5.4's built-in webserver as shown below:

    ➜ sudo php -S localhost:80 -t htdocs htdocs/router.php

    PHP 5.4.8-dev Development Server started at Thu Sep 13 13:22:15 2012
    Listening on http://localhost:80
    Document root is /usr/local/src/bankaccount/htdocs
    Press Ctrl-C to quit.

Now you can access `http://localhost/bankaccounts` and `http://localhost/bankaccount/id/1`.
