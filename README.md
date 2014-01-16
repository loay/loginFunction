loginFunction
=============
Most of simple login functions online use session_register, which does not work anymore with PHP5.
This simple login function will provide solution for the following:

1) solving the problem with session_register and works fine with PHP5

2) security: fixed the back page security leak. 

3) I did run accross some servers who might have a session start error due to the fact that the server doesn't store sessions which may create the latter error. 

This problem could be simply fixed by creating the  the folder "tmp" --> The session path will be saved as per the code in login_process.php
