<?php
require_once 'app/Controller/Migration/routes.php';


//Home Page
$router->get('','User\\HomeController@home');

//Login Page
$router->get('Login','User\\HomeController@Login');

//Logout
$router->get('Logout','User\\LoginController@logout');

//Login Check with post method
$router->post('Login_Check','User\\LoginController@Check');

//Register Page
$router->get('Register','User\\HomeController@Register');

//Register or Signup Check with Post Method
$router->post('Signup','User\\RegisterController@Signup');


//Forgot Password
$router->get('Forgot','User\\RegisterController@forgot');
$router->get('Reset_Password','User\\RegisterController@reset_password');
$router->post('Forgot_send','User\\RegisterController@forgotsend');
$router->post('Reset_pass','User\\RegisterController@reset_pass');



//User Activation Link
$router->get('Activation','User\\RegisterController@activation');



//System Route Needs
$router->get('Admin/Setup','SetupController@index');

$router->get('Admin/Dashboard','Admin\\AdminController@index');

$router->get('Admin/SeedFilesMake','Admin\\AdminController@createSeedFile');

//Location CRUD
$router->get('Admin/Location','Admin\\LocationController@index');

$router->get('Admin/Location_edit','Admin\\LocationController@edit');

$router->get('Admin/Location_delete','Admin\\LocationController@delete');

$router->post('Admin/Location_Add','Admin\\LocationController@create');

$router->post('Admin/Location_update','Admin\\LocationController@update');


//Contract Type CRUD
$router->get('Admin/Contract_type','Admin\\ContractTypeController@index');

$router->get('Admin/Contract_type_edit','Admin\\ContractTypeController@edit');

$router->get('Admin/Contract_type_delete','Admin\\ContractTypeController@delete');

$router->post('Admin/Contract_type_Add','Admin\\ContractTypeController@create');

$router->post('Admin/Contract_type_update','Admin\\ContractTypeController@update');



//Admin User Type CRUD
$router->get('Admin/Account','Admin\\AdminUserController@index');

$router->get('Admin/Account_edit','Admin\\AdminUserController@edit');

$router->get('Admin/Account_delete','Admin\\AdminUserController@delete');

$router->post('Admin/Account_Add','Admin\\AdminUserController@create');

$router->post('Admin/Account_update','Admin\\AdminUserController@update');



//Job Function CRUD

$router->get('Admin/JobFunction','Admin\\JobFunctionController@index');

$router->get('Admin/Jobfunction_edit','Admin\\JobFunctionController@edit');

$router->get('Admin/Jobfunction_delete','Admin\\JobFunctionController@delete');

$router->post('Admin/JobFunction_Add','Admin\\JobFunctionController@create');

$router->post('Admin/JobFunction_update','Admin\\JobFunctionController@update');



//Job Industry CRUD

$router->get('Admin/JobIndustry','Admin\\JobIndustryController@index');

$router->get('Admin/JobIndustry_edit','Admin\\JobIndustryController@edit');

$router->get('Admin/JobIndustry_delete','Admin\\JobIndustryController@delete');

$router->post('Admin/JobIndustry_Add','Admin\\JobIndustryController@create');

$router->post('Admin/JobIndustry_update','Admin\\JobIndustryController@update');




//Admin Job Pass
$router->get('Admin/Job_Pending','Admin\\JobPostController@pending');



//Job_Seeker

$router->get('User/Job_Seeker','User\\JobSeekerController@index');

$router->get('User/Delete','User\\JobSeekerController@delete');
$router->get('User/Resume','User\\JobSeekerController@resume');
$router->get('User/Edit_Resume','User\\JobSeekerController@edit_resume');
$router->get('User/Profile_Detail','User\\JobSeekerController@profile_detail');
$router->get('User/Applied_Job','User\\JobSeekerController@applied_job');
$router->post('User/Del','User\\JobSeekerController@del');
$router->post('User/Profile_update','User\\JobSeekerController@profile_update');
$router->post('User/Password_Update','User\\JobSeekerController@password_update');
$router->get('Seeker_Profile','User\\JobSeekerController@profile');
$router->get('User/BookMark','User\\JobSeekerController@viewbookmark');



//Career Object
$router->post('User/Career','User\\SeekerDetail@career');

//Job Seeker  Work Experience
$router->post('User/Work_experience','User\\SeekerDetail@work_experience');
$router->post('User/Work_experience_Delete','User\\SeekerDetail@work_experience_delete');
//Job Seeker Education
$router->post('User/Education','User\\SeekerDetail@education');
$router->post('User/Education_Delete','User\\SeekerDetail@education_delete');

//Job Seeker Qualification
$router->post('User/Qualification','User\\SeekerDetail@qualification');
$router->post('User/Qualification_Delete','User\\SeekerDetail@qualification_delete');

//Job Seeker Language
$router->post('User/Language','User\\SeekerDetail@language');
$router->post('User/Language_Delete','User\\SeekerDetail@language_delete');

$router->post('User/Seeker_Detail','User\\SeekerDetail@detail');

//Employer
$router->get('User/Employer','User\\EmployerController@index');
$router->post('User/Employer_Add','User\\EmployerController@add');
$router->get('Employer/Post_Job','User\\EmployerController@post_job');
$router->get('Employer/Packages','User\\EmployerController@packages');
$router->post('Employer/Job_a_post','User\\EmployerController@post_job_add');
$router->post('Employer/Buy_post','User\\EmployerController@buy_post');
$router->get('Employer/Job_List','User\\EmployerController@joblist');
$router->post('Employer/Interview','User\\EmployerController@interview');
$router->get('Employer/Job_Edit','User\\EmployerController@jobedit');
$router->post('Employer/PostJob_edit','User\\EmployerController@postjobedit');



$router->get('Employer/Interview_pass','User\\EmployerController@interview_pass');
$router->get('Employer/Interview_fail','User\\EmployerController@interview_fail');

$router->get('Employer/Profile_Detail','User\\EmployerController@profile_detail');
$router->post('Employer/Profile_update','User\\EmployerController@profile_update');
$router->post('Employer/Password_Update','User\\EmployerController@password_update');
$router->get('Employer/Reject','User\\EmployerController@reject');

//Job List

$router->get('Job_list','User\\JobController@list');
$router->get('Job_Detail','User\\JobController@detail');


$router->post('Apply_Job','User\\JobController@apply');
$router->post('Bookmark','User\\JobController@bookmark');


//Report
$router->get('Admin/Annual_Report','Admin\\ReportController@annual');
$router->get('Admin/Monthly_Report','Admin\\ReportController@monthly');
$router->get('Admin/InActive_Report','Admin\\ReportController@inactive');
$router->get('Admin/DeleteUser_Report','Admin\\ReportController@del_user_report');