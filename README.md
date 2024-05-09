# LARAVEL-RESTAURANT

[![Youtube][youtube-shield]][youtube-url]
[![Facebook][facebook-shield]][facebook-url]
[![Instagram][instagram-shield]][instagram-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

Thanks for visiting my GitHub account!

<img src ="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" height = "200px" width = "200px"/> **Laravel** is a free and open-source PHP- based web framework for building high-end web applications. It was created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. [see-more](https://laravel.com/docs/)

## Source Code (Download)

-   [Source-code]()
-   [Documentation](https://mega.nz/folder/RGFiUApD#PoKIVCwF8IkQhE2PHw1XxQ)

## Required Software (Download)

-   VS Code, Download ->https://code.visualstudio.com/download
-   XAMPP ,Download-> https://www.apachefriends.org/download.html
-   Composer ,Download (Composer-Setup.exe)-> https://getcomposer.org/download/
-   Nodejs ,Download -> https://nodejs.org/en/download

## Project Features

|                                                    |                                                |
| :------------------------------------------------: | :--------------------------------------------: |
|                     Dashboard                      |                    Profile                     |
|   ![roadmap](DOCUMENTS/screanshot/dashboard.png)   |  ![roadmap](DOCUMENTS/screanshot/profile.png)  |
|                      Logo-MGT                      |                   Chefs-MGT                    |
|   ![roadmap](DOCUMENTS/screanshot/logo-mgt.png)    | ![roadmap](DOCUMENTS/screanshot/chefs-mgt.png) |
|                     Hero-Area                      |                    Message                     |
| ![roadmap](DOCUMENTS/screanshot/hero-area-mgt.png) |  ![roadmap](DOCUMENTS/screanshot/mgs-mgt.png)  |
|                    Product-MGT                     |                   Admin-MGT                    |
|  ![roadmap](DOCUMENTS/screanshot/product-mgt.png)  | ![roadmap](DOCUMENTS/screanshot/admin-mgt.png) |
|                    Upload-Image                    |
|  ![roadmap](DOCUMENTS/screanshot/upload-img.png)   |

|                                           |
| :---------------------------------------: |
|                   HOME                    |
| ![roadmap](DOCUMENTS/screanshot/home.png) |

## How to use this template?

Step-1: **For Set up Project**

-   Clone this to your local machine using `gh repo clone learnwithfair/laravel-restaurant`
-   Run command in the root directory `npm install`

Step-2: **Connect Database**

-   In the .env file change the configuration as-

```cmd
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DatabaseName
DB_USERNAME=root
DB_PASSWORD=
```

-   For Send Mail

    -   Create a Mailtrap account using path -> https://mailtrap.io/
    -   Get the username & password from Mailtrap account using path->https://mailtrap.io/inboxes/2087677/settings
    -   Set up .env file as-

    ```cmd
    MAIL_MAILER=smtp
    MAIL_HOST=sandbox.smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=YourUserName
    MAIL_PASSWORD=YourPassword
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="yourEmailAddress"
    MAIL_FROM_NAME="${APP_NAME}"
    ```

-   Create data table write the command in cmd

```cmd
php artisan migrate
```

-   Note: If it's not working correctly then following the s

    -   Manually, Create the desired database in the path-> `http://localhost/phpmyadmin/`
    -   Or Create database using cmd as-

        -   Set up the Environment variabel `C:\xampp\mysql\bin`
        -   Write the command in the cmd

        ```cmd
        mysql -u root -p (password: Not Used)
        create database DatabaseName; (semicolon must be add in the end)
        show databases;
        exit;
        ```

        -   Again run the command in the cmd as-

        ```cmd
        php artisan migrate
        ```

**For Run Project**

-   Start the Xampp server
-   Run command in the root directory `php artisan serve`
-   Run command (Another CMD) in the root directory `npm run dev`
-   Visit path -> http://127.0.0.1:8000/

## Follow Me

[<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/github.svg' alt='github' height='40'>](https://github.com/learnwithfair) [<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/facebook.svg' alt='facebook' height='40'>](https://www.facebook.com/learnwithfair/) [<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/instagram.svg' alt='instagram' height='40'>](https://www.instagram.com/learnwithfair/) [<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/twitter.svg' alt='twitter' height='40'>](https://www.twiter.com/learnwithfair/) [<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/youtube.svg' alt='YouTube' height='40'>](https://www.youtube.com/@learnwithfair)

<!-- MARKDOWN LINKS & IMAGES -->

[youtube-shield]: https://img.shields.io/badge/-Youtube-black.svg?style=flat-square&logo=youtube&color=555&logoColor=white
[youtube-url]: https://youtube.com/@learnwithfair
[facebook-shield]: https://img.shields.io/badge/-Facebook-black.svg?style=flat-square&logo=facebook&color=555&logoColor=white
[facebook-url]: https://facebook.com/learnwithfair
[instagram-shield]: https://img.shields.io/badge/-Instagram-black.svg?style=flat-square&logo=instagram&color=555&logoColor=white
[instagram-url]: https://instagram.com/learnwithfair
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=flat-square&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/company/learnwithfair
