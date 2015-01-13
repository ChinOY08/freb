<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
$config = array(
                 'users' => array(
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|trim|valid_email|is_unique[user.email]'
											
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required|trim'
                                         ),
                                    array(
                                            'field' => 'cpassword',
                                            'label' => 'Confirm Password',
                                            'rules' => 'required|trim|matches[password]'
                                         ),
                                    array(
                                            'field' => 'fname',
                                            'label' => 'Fname',
                                            'rules' => 'required|trim'
                                         ),
									array(
											'field' => 'lname',
											'label' => 'Lname',
											'rules' => 'required|trim'
										 ),

									array(
											'field' => 'idnum',
											'label' => 'IDNumber',
											'rules' => 'required|trim'
										 ),
									array(
											'field' => 'year',
											'label' => 'Year',
											'rules' => 'required|trim'
										 ),
									array(
											'field' => 'course',
											'label' => 'Course',
											'rules' => 'required|trim'
										 )
                                    )                               
               );



