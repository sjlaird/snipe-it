<?php

return array(

    'does_not_exist' => 'Category does not exist.',
    'assoc_users'	 => 'This category is currently associated with at least one model and cannot be deleted. Please update your models to no longer reference this category and try again. ',

    'create' => array(
        'error'   => 'Category was not created, please try again.',
        'success' => 'Category created successfully.'
    ),

    'update' => array(
        'error'   => 'Category was not updated, please try again',
        'success' => 'Category updated successfully.'
    ),

    'delete' => array(
        'confirm'   => 'Are you sure you wish to delete this category?',
        'error'   => 'There was an issue deleting the category. Please try again.',
        'success' => 'The category was deleted successfully.'
    ),
    
     'checkout' => array(
        'error'   		=> 'Accessory was not checked out, please try again',
        'success' 		=> 'Accessory checked out successfully.',
        'user_does_not_exist' => 'That user is invalid. Please try again.'
    ),

    'checkin' => array(
        'error'   		=> 'Accessory was not checked in, please try again',
        'success' 		=> 'Accessory checked in successfully.',
        'user_does_not_exist' => 'That user is invalid. Please try again.'
    )


);