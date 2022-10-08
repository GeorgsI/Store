<?php
namespace app\views\templates;


class CategoryBlock {
    public function render(){
    echo "<section class='category-Block'>
                <div class='category__container'>
                    <div class='content-block'>
                        <h2 class='head-title'>
                            Категории
                        </h2>

                        <ul class='category__list'>
                            <li class='category__item'>
                                <a href='#' class='category__linck'>
                                <span class='category__item-photo-wrepper'>
                                    <picture>
                                        <source srcset='images//Lenovo Tab P11 Plus TB-J616F 64GB ZA940029RU/lenovo-tab-m10-plus-gen-3-feature-1.webp' type='image/webp'>
                                        <img src='images/Lenovo Tab P11 Plus TB-J616F 64GB ZA940029RU/lenovo-tab-m10-plus-gen-3-feature-1.jpg' class='category__item-img' alt=''>
                                    </picture>
                                </span>
                                <span class='category-title'>Планшеты</span>
                            </a>
                            </li>
                            <li class='category__item'>
                                <a href='#' class='category__linck'>
                                <span class='category__item-photo-wrepper'>
                                    <picture>
                                        <source srcset='images//ASUS Vivobook 14 X409FA-BV625/ASUS Vivobook 14 X409FA-BV625-1.webp' type='image/webp'>
                                        <img src='images/ASUS Vivobook 14 X409FA-BV625/ASUS Vivobook 14 X409FA-BV625-1.jpg' class='category__item-img' alt=''>
                                    </picture>
                                </span>
                                <span class='category-title'>Ноутбуки</span>
                            </a>
                            </li>
                            <li class='category__item'>
                                <a href='#' class='category__linck'>
                                <span class='category__item-photo-wrepper'>
                                    <picture>
                                        <source srcset='images//WH-1000XM4/sony-wh-1000xm4-black-1.webp' type='image/webp'>
                                        <img src='images/WH-1000XM4/sony-wh-1000xm4-black-1.jpg' class='category__item-img' alt=''>
                                    </picture>
                                </span> 
                                <span class='category-title'>Аккустика</span>
                            </a>
                            </li>
                            <li class='category__item'>
                                <a href='#' class='category__linck'>
                                <span class='category__item-photo-wrepper'>
                                    <picture>
                                        <source srcset='images//Huawei nova Y70 4GB128GB/Huawei nova Y70 4GB128GB-1.webp' type='image/webp'>
                                        <img src='images/Huawei nova Y70 4GB128GB/Huawei nova Y70 4GB128GB-1.jpg' class='category__item-img' alt=''>
                                    </picture>
                                </span> 
                                <span class='category-title'>Телефоны</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>";
     
    }
}
