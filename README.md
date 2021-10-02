# Registration

Three sins that I have addressed in the codes are the following: 

1. No hidden or magic inputs 
2. Using httponly and secure
3. using appropriate data types 


1. There are no hidden input fields in the codes that I have made.
2. This was addressed using this code: ini_set("session.cookie_httponly", True);
3. Each of the input field has a required type which made it possible to add text to all three fields (First Name, Last Name and Password) while 
only emails were accepted in the email field

The password were also encrpyted using the password_hash function in Php.
