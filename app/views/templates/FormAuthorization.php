<?php
namespace app\views\templates;


class FormAuthorization {
  
    public function render(){
        echo"<section class='form-Block'>
                <form action='' class='form formAuthorization'>
                    <div class='form-innerWrepper'>
                        <div class='form-elementWrepper'>
                            <h2 class='form-title'>Вход</h2>
                        </div>
                        <div class='form-elementWrepper wrepperFB'>
                            <input class='field field-password' type='password' placeholder='Пароль' name='password'>
                            <button type='button' class='field_showBtn btn'>
                                <i class='fa fa-eye ' aria-hidden='true'></i>
                            </button>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field fieldAuthorization' placeholder='Логин' name='login' type='text'>
                        </div>

                        <div class='form-elementWrepper'>
                            <input class='btn form-btn fieldAuthorization' type='button' value='Войти' title='Войти в кабинет'>
                        </div>
                        <div class='form-elementWrepper' >
                            <!--input class='btn form-btn' type='button' value='Регистрация'-->
                            <a class='btn form-btn' href='index.php?Registration=Registration' title='Зарегистрироваться'>Регистрация</a>
                        </div>
                        
                    </div>
                </form>
            </section>";
    }
    
    
    
    
}
