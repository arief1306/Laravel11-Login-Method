Hi there,
Thank you for visit my project.

I'd like to share my project, showcasing a login method without using Breeze. Here are the steps I took to create this project:

1. Set up the environment depending on your database settings.
2. Change the code on welcome.blade.php to include a login form.
3. Add code to 0001_01_01_000000_create_users_table.php to insert dummy data for testing. Use Hash::make on passwords to bcrypt() them for security purposes.
4. Create a Login Controller and a login function inside it to execute the login process.
5. Add login and dashboard routes.

Let me know if you need further assistance!