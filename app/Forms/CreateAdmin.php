<?php
/**
 * Created by PhpStorm.
 * User: raja
 * Date: 12/26/15
 * Time: 4:41 PM
 */

namespace Erp\Forms;


use Erp\Models\User\User;


class CreateAdmin extends User implements FormInterface
{
    use FormControll, DataHelper;


    protected $nonEditableFields = [self::PASSWORD,self::CONFIRM_PASSWORD,self::EMAIL,self::USER_NAME];

    public function formInputFields($id = null,$id=null)
    {

               $formFields =  [
                [
                    'type'=>'hidden',
                    'name'=>'role',
                    'value'=>$this->role('admin')
                ],
                [
                    'type'=>'text',
                    'name'=>self::USER_NAME,
                    'label' => 'User Name',
                    'value'=>null,
                    'labclass'=>'col-sm-12',
                    'wrapclass'=>'col-sm-12 ',
                    'trans'=>false,
                    'others'=>[
                        'class'=>'form-control',
                    ],
                    'validation'=>'required|unique:users,username|max:10|min:6'
                ],[
                'type'=>'text',
                'name'=>self::FIRST_NAME,
                'label' => 'First Name',
                'value'=>null,
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12 ',
                'trans'=>true,
                'others'=>[
                    'class'=>'form-control',
                    'maxlength'=>10,
                    'minlength'=>5,
                ],
                'validation'=>'required|max:10',

            ],[
                'type'=>'text',
                'name'=>self::LAST_NAME,
                'label' => 'Last Name',
                'value'=>null,
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
                'trans'=>true,
                'validation'=>'required|max:10',
                'others'=>[
                    'class'=>'form-control',
                    'maxlength'=>10,
                    'minlength'=>5,

                ],
            ],[
                'type'=>'text',
                'name'=>self::ADDRESS,
                'label' => 'Address',
                'value'=>null,
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
                'trans'=>true,
                'others'=>[
                    'class'=>'form-control',
                    'maxlength'=>10,
                    'minlength'=>5,
                ],
                'validation'=>'required|max:10',

            ],[
                'type'=>'text',
                'name'=>self::PHONE,
                'label' => 'Phone',
                'value'=>null,
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
                'bool'=> true,
                'radval'=> ['1','2','3'],
                'others'=>[
                    'class'=>'form-control',
                    'maxlength'=>10,
                    'minlength'=>5,
                ],
                'validation'=>'required|max:10',
            ],[
                'type'=>'select',
                'name'=>self::GENDER,
                'label' => 'Gender',
                'others'=>['class'=>'form-control'],
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
                'trans'=>false,
                'options'=>$this->genderList(),
                'value'=>0,
                'validation'=>"required|in:".$this->genderKeys()

            ],[
                'type'=>'select',
                'name'=>self::RELIGION,
                'label' => 'Religion',
                'others'=>['class'=>'form-control'],
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
                'options'=>$this->relegionList(),
                'value'=>0,
                'validation'=>"required|in:".$this->relegionKeys()
            ],[
                'type'=>'select',
                'name'=>self::DEPARTMENT,
                'label' => 'Department',
                'others'=>['class'=>'form-control'],
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
                'options'=>$this->departmentList(),
                'value'=>0,
                'validation'=>"required|in:".$this->departmentKeys()
            ],[
                'type'=>'email',
                'name'=>self::EMAIL,
                'label' => 'Email',
                'others'=>[
                    'class'=>'form-control'
                ],
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-12',
            ],[
                'type'=>'password',
                'name'=>self::PASSWORD,
                'label' => 'Password',
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-6',
                'others'=>[
                    'class'=>'form-control'
                ],
                'validation'=>'confirmed'

            ],[
                'type'=>'password',
                'name'=>'password_confirmation',
                'label' => 'Confirm Password',
                'others'=>[
                    'class'=>'form-control'
                ],
                'labclass'=>'col-sm-12',
                'wrapclass'=>'col-sm-6',
            ],[
                'type'=>'submit',
                'label' => 'Submit',
                'others'=>[
                    'class'=>'btn btn-success',
                    'readonly'=>'readonly'
                ],
            ]
        ];

        return $formFields;

    }



}