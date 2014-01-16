loginFunction
=============
Most of simple login functions online use session_register, which does not work anymore with PHP5.</br>
This simple login function will provide solution for the following:</br>

1) solving the problem with session_register and works fine with PHP5
2) security: fixed the back page security leak. 
3) Some servers might have a session start error due to the fact that the server doesn't store sessions which may create
the latter error. This problem could be simply fixed by creating the  the folder "tmp" --> more instructions are within
the code
