<?
$PAGE['meta_title'] = "Элементы";
include($_SERVER['DOCUMENT_ROOT']."/templates/main/header.tpl.php");
?>

    <div class="design-elements">
        <div class="design-elements__row">
            <div class="design-elements__item">
                <div class="ttl-base">Заголовки</div>
                <div class="content">
                    <h1>Заголовок h1</h1>
                    <h2>Заголовок h2</h2>
                    <h3>Заголовок h3</h3>
                    <h4>Заголовок h4</h4>
                    <h5>Заголовок h5</h5>
                    <h6>Заголовок h6</h6>
                </div>
            </div>
            <div class="design-elements__item">
                <div class="ttl-base">Элементы форм</div>
                <div class="grid">
                    <div class="grid__cell">
                        <div class="form-base">
                            <div class="form-base__field">
                                <input type="text" name="name" placeholder="Имя" class="inp-base">
                            </div>
                            <div class="form-base__field">
                                <input type="email" name="email" placeholder="Email" class="inp-base">
                            </div>
                            <div class="form-base__field">
                                <input type="text" name="phone" placeholder="Телефон" class="inp-base phone-mask">
                            </div>
                        </div>
                    </div>
                    <div class="grid__cell">
                        <textarea name="message" placeholder="Ваше сообщение" class="textarea-base"></textarea>
                    </div>
                </div>
                <div class="grid">
                    <div class="grid__cell">
                        <label class="switch"><input type="radio" name="radio" class="switch__inp" checked><span class="switch__el"></span> radio 1</label>
                    </div>
                    <div class="grid__cell">
                        <label class="switch"><input type="radio" name="radio" class="switch__inp"><span class="switch__el"></span> radio 2</label>
                    </div>
                    <div class="grid__cell">
                        <label class="switch"><input type="checkbox" name="checkbox" class="switch__inp" checked><span class="switch__el"></span> checkbox</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="design-elements__row">
            <div class="design-elements__item">
                <div class="ttl-base">Кнопки</div>
                <a href="#simple_popup" class="js-openDialogAjax btn btn_base" data-title="Диалог">Открыть диалог</a>
                <button class="btn btn_primary">Кнопка</button>
                <button class="btn btn_secondary">Кнопка</button>
                <button class="btn btn_attention">Кнопка</button>
            </div>
            <div class="design-elements__item">
                <div class="ttl-base">
                    <div class="ttl-base__text">Иконки</div>
                </div>
                <div class="grid">
                    <div class="grid__cell">
                        <h4>svg</h4>
                        <svg class="svg-icon icon-arrow">
                            <use xlink:href="/skin/images/svg-sprite.svg#arrow"></use>
                        </svg>
                        <svg class="svg-icon icon-search">
                            <use xlink:href="/skin/images/svg-sprite.svg#search"></use>
                        </svg>
                    </div>
                    <div class="grid__cell">
                        <h4>png</h4>
                        <span class="icon icon-checkbox"></span>
                        <span class="icon icon-wishlist"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="design-elements__row">
            <div class="design-elements__item">
                <div class="ttl-base">Контент</div>
                <div class="content">
                    <div class="grid">
                        <div class="grid__cell">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores, eos illo magnam officia provident quod quos sapiente tenetur vel?</p>
                            <ul>
                                <li>Item 0</li>
                                <li>Item 1</li>
                                <li>Item 2</li>
                            </ul>
                            <ol>
                                <li>Item 0</li>
                                <li>Item 1</li>
                                <li>Item 2</li>
                            </ol>
                        </div>
                        <div class="grid__cell">
                            <table width="100%">
                                <tr>
                                    <th>th</th>
                                    <th>th</th>
                                    <th>th</th>
                                </tr>
                                <tr>
                                    <td>td</td>
                                    <td>td</td>
                                    <td>td</td>
                                </tr>
                                <tr>
                                    <td>td</td>
                                    <td>td</td>
                                    <td>td</td>
                                </tr>
                                <tr>
                                    <td>td</td>
                                    <td>td</td>
                                    <td>td</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <p><img src="/uploads/images/content_img.jpg" alt=""></p>
                </div>
            </div>
        </div>
    </div>

<?
include($_SERVER['DOCUMENT_ROOT']."/templates/main/footer.tpl.php");
?>