<?php
namespace app\views\templates;


class FormRegistration {
  
    public function render(){
        echo"<section class='form-Block'>
                <form action='' class='form formRegistration'>
                    <div class='form-innerWrepper'>
                        <div class='form-elementWrepper'>
                            <h2 class='form-title'>Регистрация</h2>
                        </div>
                        
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Имя' name='name' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Фамилия' name='surname' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Отчество' name='patronymic' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='e-mail' name='email' type='email'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='телефон' name='phone' type='tel' >
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='адрес' name='address' type='text'>
                        </div>







                        <div class='form-elementWrepper'>
                            <input class='field field-password' type='password' name='password' placeholder='Пароль'>
                            <button type='button' class='field_showBtn btn'>
                                <i class='fa fa-eye ' aria-hidden='true'></i>
                            </button>
                        </div>
                        
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Логин'  name='login' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='btn form-btn formRegistration' type='button' value='Войти' title='Войти в кабинет'>
                        </div>
                        <div class='form-elementWrepper' >
                            <a class='btn form-btn' href='index.php?Authorization=Authorization' title='Зарегистрироваться'>Назад</a>
                        </div>
                        
                    </div>
                </form>
            </section>";
    }
    
    
    
    
}
