<?php
/**
 * Created by PhpStorm.
 * User: bhps690
 * Date: 3/22/2019
 * Time: 5:32 PM
 */
Route::get('/getMailsds','MailList\GmailList\GmailController@retrieveMails');
Route::get('/getMail','MailList\GmailList\mailSearchController@getMail');
