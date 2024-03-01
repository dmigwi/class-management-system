[![Laravel - v10.41.0](https://img.shields.io/badge/Laravel%20Framework-v10.41.0-f9322b?style=flat-square&logo=laravel&logoColor=%23f9322b)](https://laravel.com/docs/10.x) [![License](https://img.shields.io/badge/License-ISC-blue?style=flat-square)](/LICENSE) [![PHP - v8.2.4](https://img.shields.io/badge/PHP-v8.2.4-336699?style=flat-square&logo=php&logoColor=%23336699)](https://pkg.go.dev/github.com/dmigwi/class-management-system/client) [![chartjs - v4.4.2](https://img.shields.io/badge/chartjs-v4.4.2-rgb(255%2C%2099%2C%20132)?logo=npm&logoColor=rgb(255%2C%2099%2C%20132)&label=chartjs)
](/contracts/)


<p align="center">
    <img alt="ClassMgmtSystem" src="https://github.com/dmigwi/class-management-system/assets/22055953/9a5b3f6e-2877-4e38-8f7d-3124b9bd47e8" height="150">
  </a>
</p>
<p align="center">Built to intergrate modern technology with the management of classes in learning institutions/environment.</p>

<!--
<p align="center">
  <a href="https://itunes.apple.com/us/app/gitpoint/id1251245162?mt=8">
    <img alt="Download on the App Store" title="App Store" src="http://i.imgur.com/0n2zqHD.png" width="140">
  </a>
  <a href="https://play.google.com/store/apps/details?id=com.gitpoint">
    <img alt="Get it on Google Play" title="Google Play" src="http://i.imgur.com/mtGRPuM.png" width="140">
  </a>-->
</p>

### Introduction

The system allows the following modern technologies to be applied in a class management set up.

1. The use of a [QR code](https://en.wikipedia.org/wiki/QR_code) to sign into a class/lesson attendance.
2. The use of a chat interface similar to what is used in most social media applications when sharing messages between the various roles/users of the system.
3. Informative dashboards that display simple statistic metrics in tabular or charts format for all system users.
4. Intentional reduction in the number of steps needed to perform a specific task. i.e most data input is only done by the system admin. All other users (i.e Instructors and Students) input data into the system mostly with mouse clicks or screen tap (for touch screens).

### Table of Contents
- [Getting Started](#getting-started)
- [Features](#features)
    - [Admin](#-admin-role)
    - [Instructor](#-instructor-role)
    - [Student](#-student-role)
- [Feedback](#feedback)
- [Acknowledgments](#acknowledgments)

### Getting Started

#### =>Install PHP and Laravel Framework

1. [Install XAMP](https://www.apachefriends.org/)
This is the most popular PHP development environment. It is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.
2. [Install PHP Composer](https://getcomposer.org/download/)
Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
    - [Unix/Linux/MacOs installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
    - [Windows Installation](https://getcomposer.org/doc/00-intro.md#installation-windows) 
    To test for successful composer installation: run command `composer -v` on your terminal i.e.
    ```
    $ composer -v
    ______
    / ____/___  ____ ___  ____  ____  ________  _____
    / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
    / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
    \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                        /_/
    Composer version 2.6.5 2023-10-06 10:11:52
    ...
    ```
    _**NB:** For the above command to work on Linux or MacOs you might need to add the following bash file configurations file:_
    ```
    # Laravel configuration
    export PATH="{path/to/XAMPP/installation/folder}/XAMPP/bin:$PATH"
    alias composer="php {path/to/composer.phar/installation/folder}/composer.phar"
    ```

#### => Setup the Project
1. Clone the [project](https://github.com/dmigwi/class-management-system) via git and navigate to the root folder i.e. folder with the __*composer.json*__ file.
2. Install the project dependencies by running command: `$composer install`
3. Create db and set its configuration in the `.env` file within the root folder. XAMPP provides a UI interface for creating a db via <http://localhost/phpmyadmin/> (_If XAMPP installation was successful this link should open the local instance of the phpmyadmin server running_) Any other SQL based DB configuration can be used in place of the default XAMPP configuration.
3. Run the migrations and insert the seed data:
    
    ```
    php artisan migrate:fresh --seed

    Dropping all tables .............................................. 49ms DONE

    INFO  Preparing database.

    Creating migration table ......................................... 29ms DONE

    INFO  Running migrations.

    2014_10_12_100000_create_password_reset_tokens_table ............. 25ms DONE
    2019_08_19_000000_create_failed_jobs_table ....................... 42ms DONE
    2019_12_14_000001_create_personal_access_tokens_table ............ 63ms DONE
    2024_01_30_084750_create_users_table ............................. 47ms DONE
    2024_01_30_084759_create_units_table ............................ 116ms DONE
    2024_01_30_084822_create_chats_table ............................ 144ms DONE
    2024_01_31_072917_create_timer_table ............................ 118ms DONE
    2024_01_31_125230_create_unit_user_table ........................ 123ms DONE
    2024_01_32_084840_create_attendances_table ...................... 116ms DONE


    INFO  Seeding database.

    Database\Seeders\UserSeeder ........................................ RUNNING
    Database\Seeders\UserSeeder ..................................... 14 ms DONE

    Database\Seeders\UnitSeeder ........................................ RUNNING
    Database\Seeders\UnitSeeder ...................................... 8 ms DONE

    Database\Seeders\ChatSeeder ........................................ RUNNING
    Database\Seeders\ChatSeeder ...................................... 9 ms DONE

    Database\Seeders\TimerSeeder ....................................... RUNNING
    Database\Seeders\TimerSeeder .................................... 11 ms DONE

    Database\Seeders\UnitUserSeeder .................................... RUNNING
    Database\Seeders\UnitUserSeeder ................................. 11 ms DONE

    Database\Seeders\AttendanceSeeder .................................. RUNNING
    Database\Seeders\AttendanceSeeder ............................... 41 ms DONE
    ```

- Start the laravel server by executing command:
    ```
    $php artisan serve

    INFO  Server running on [http://127.0.0.1:8000].

    Press Ctrl+C to stop the server

    2024-03-01 22:17:42 ................................................... ~ 0s
    2024-03-01 22:17:42 /css/custom.css ................................... ~ 0s
    2024-03-01 22:17:42 /css/app.css ...................................... ~ 0s
    2024-03-01 22:17:42 /images/cms.png ................................... ~ 0s
    2024-03-01 22:17:42 /images/bg-image.jpg .............................. ~ 0s
    2024-03-01 22:17:42 /images/cms.png ................................... ~ 0s
    ```
    Access the running instance on <http://127.0.0.1:8000>

### Features
The sign in page requires **Student/Staff ID** + **Password** user inputs. The seed data contains users with IDs **1-10** and all of them are preset with the password "**changeme**". ID **1** is reserved for the default Admin role. IDs **2**, **4** and **10** are set to role Instructor/Lecturer. IDs **3**, **5**, **6**, **7**, **8** and **9** are set to role Student.
On the first sign in, all users are prompted to change their default passwords. This also happens when the admin updates a given user account information

There are 5 distinct main views on the app:
<details>
<summary>1. <strong>Sign In Page</strong></summary>
<img width="800" alt="Screenshot 2024-03-01 at 23 20 57" src="https://github.com/dmigwi/class-management-system/assets/22055953/135e358c-bfea-42ee-8f86-693d1ad4424b">
</details>

<details>
<summary>2. <strong>Home Page</strong></summary>
<img width="800" alt="Screenshot 2024-03-01 at 23 23 53" src="https://github.com/dmigwi/class-management-system/assets/22055953/f86a3747-e3fc-4015-88de-bf2bcc7766bf">
</details>

<details>
<summary>3. <strong>Admin Page</strong></summary>
<img width="1586" alt="Screenshot 2024-03-01 at 23 30 12" src="https://github.com/dmigwi/class-management-system/assets/22055953/95b6f8ee-437c-4a55-b4c2-84cf8a84f7d2">
</details>

<details>
<summary>4. <strong>Attendance Page</strong></summary>
<img width="1578" alt="Screenshot 2024-03-01 at 23 26 13" src="https://github.com/dmigwi/class-management-system/assets/22055953/3ae34ccc-d214-473a-a848-0544332afacc">
</details>

<details>
<summary>5. <strong>Chat Page</strong></summary>
<img width="800" alt="Screenshot 2024-03-01 at 23 25 10" src="https://github.com/dmigwi/class-management-system/assets/22055953/5c51f2ea-d1db-4699-af46-ba975de786b2">
</details>
Depending on the role of the user accessing the specific page, information on display is curated for that specific role.

#### => Admin Role

- Has access only to the _signin page_, _admin page_ and _chats page_.
- Admin page is accessible only to the admin role.
- Admin is incharge of the majority of the data entry and updates required by the system.
- Admins cannot initiate a conversation on the chats page but can reply to messages sent to them.
- For all the user information updates made by the admin, the concerned user must use the newly admin set password to set a new unique password.
- The admin assigns classes/units to both the student and instructor roles.

#### => Instructor Role

- Has access only to the _signin page_, _home page_, _attendance page_ and _chats page_.
- The Home page contains charts illustrating the attendance rate for the select unit assigned to them and top 3 units by attendance. (_all this units must be assigned to the current signed in user_).
- The Home page also contains more details about the currently selected unit and some other last activity information.
- On the Home page, the instructor should update the exam dates (_Coming Soon!_)
- On the attendance page, The instructor generates the QR code which learners scan to sign into the class.
- On the Chats page, the instructor can initiate a conversation with any student assigned to their class or respond to messages send to them.
- The instructor can also initiate a conversation with the admin role on the system.

#### => Student Role

- Has access only to the _signin page_, _home page_, _attendance page_ and _chats page_.
- The Home page contains charts illustrating the attendance rate for the select unit assigned to them and top 3 units by attendance. (_all this units must be assigned to the current signed in user_).
- The Home page also contains more details about the currently selected unit and some other last activity information.
- On the attendance page, the students sign into a class as long the attendance taking is still open.
- On the chats page, the student can message either the instructor or the admin roles. 

### Feedback

For all bugs, feature requests or other custom modifications, please create an issue [here](https://github.com/dmigwi/class-management-system/issues/new/choose).
We love feedback and can't wait to hear your opinion about the software.

Enjoy using the software! (🎉🎉🎉🎉🎉)

### Acknowledgments

Contributions List
1. [dmigwi](https://www.linkedin.com/in/migwi-ndungu/)