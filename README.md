Changes made from the original source:

1 file: I remove **#cell**  and  **heading row**  and just left with the data need to be export to avoid filtering data before saving them to the database to improve performance download it here [https://drive.google.com/open?id=17z4PowSbUc-CvZJyB5aO_8oEs_mvoScD](https://drive.google.com/open?id=17z4PowSbUc-CvZJyB5aO_8oEs_mvoScD)

2 database: column constraint was not aligned with data from the file, example, some file column contain some  characters that are restricted from  on the database column

#### Cron job

QUEUE_CONNECTION=database


run migrate command import update schema which al so include two cron job table (**jobs**, **failed_jobs**)

 run queue: work command before importing file
 
Alternative you can install Supervisor on a server as explan here [https://laravel.com/docs/5.7/queues#supervisor-configuration](https://laravel.com/docs/5.7/queues#supervisor-configuration)

#### Email
i used mailtrap
